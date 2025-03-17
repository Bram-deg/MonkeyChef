#!/bin/bash

# Create css directory if not already exists
mkdir -p css

# Compile SASS to CSS and store in a variable
sass_output=$(sass style.scss --style compressed)

# print output to console
echo "SASS compiled to:"
echo "$sass_output"

# Run TailwindCSS and store in a variable
tailwind_output=$(tailwindcss -i tailwind.css --minify)
echo "TailwindCSS compiled to:"
echo "$tailwind_output"

# Combine Tailwind and SASS outputs into css/style.css
echo "$tailwind_output" "$sass_output" > css/style.css

# Run PurgeCSS: Temporarily keep classes in the safelist using wildcards
#npx purgecss --css css/style.css --content "**/*.php" --output css/style.css
npx purgecss --config ./purgecss.config.js

# cssnano and autoprefixer
postcss css/style.css --use autoprefixer postcss-prune-var --replace

# remove all command /* comment */ also /*! comment */
perl -0777 -pi -e 's/\/\*[\s\S]*?\*\///g' css/style.css

# make a new line on top of the file and place /*! Made by Seger */
sed -i '1s/^/\/\*! Made by Seger \*\/\n/' css/style.css

# remove empty spaces
sed -i '/^$/d' css/style.css

echo "SASS compiled, TailwindCSS processed, stylesheets combined, and unused CSS purged successfully!"
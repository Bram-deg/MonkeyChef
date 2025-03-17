FROM nginx:alpine

# Install dependencies for building NGINX from source
RUN apk update && apk add --no-cache \
    build-base \
    pcre-dev \
    zlib-dev \
    openssl-dev \
    wget \
    && apk add --no-cache --virtual .build-deps \
    curl \
    && apk add --no-cache bash

# Download NGINX source
# RUN wget http://nginx.org/download/nginx-1.24.0.tar.gz -P /tmp && \
#     tar -zxvf /tmp/nginx-1.24.0.tar.gz -C /tmp

# # Install NGINX with the ngx_http_random_index_module
# RUN cd /tmp/nginx-1.24.0 && \
#     ./configure --with-http_random_index_module && \
#     make && \
#     make install

# # Clean up
# RUN rm -rf /tmp/nginx-1.24.0

# Copy custom NGINX configuration here:
COPY ./Docker/default.conf /etc/nginx/conf.d/default.conf

# COPY ./ /usr/share/nginx/html

# give all files chmod 755
RUN chmod -R 755 /usr/share/nginx/html

# RUN rm /usr/share/nginx/html/50x.html && \
#     rm /usr/share/nginx/html/default.conf

EXPOSE 80
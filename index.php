<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
    <title>Monkey Chef</title>
</head>
<body>
<?php include_once "components/base-header.php" ?>
    <main>
        <section>
            <h1>Monkey Chef</h1>
            <p>Monkey Chef is a monkey that loves to cook. He is always looking for new recipes and ingredients. If you have a recipe for him, please let him know!</p>
            <p>He is also looking for a new phone, so if you have one for him, please let him know!</p>
        </section>
        <section>
        <img src="Monkey.png" alt="this monkey is missing!">
        <div class="monkey-call">You have <span id="counter">0</span> missed messages from Monkey Chef!!</div>    </section>
        <section id="form-section">
            <h2 class="underline">Contact</h2>
            <form action="">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name">
                <label for="phone">Phone number</label>
                <input type="text" name="phone" id="phone" placeholder="Phone">
                <button type="submit">Send</button>
                <div id="form-message" style="margin-top: 10px; font-size: 16px;"></div>
            </form>
        </section>
    </main>
    <?php include_once "components/base-footer.php" ?>
</body>
</html>
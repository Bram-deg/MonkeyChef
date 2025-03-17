<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekstanalyse Applicatie</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: system-ui, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            font-size: 24px;
        }

        textarea {
            width: 100%;
            height: 150px;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
            box-sizing: border-box;
        }

        .options {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 5px 0;
            font-size: 16px;
        }

        #stats {
            margin-top: 20px;
        }

        #stats p {
            font-size: 16px;
            margin: 5px 0;
        }

        #stats span {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Letterteller</h1>
    <textarea id="text-input" placeholder="Typ je tekst hier..." oninput="updateStats()"></textarea>

    <div class="options">
        <label>
            <input type="checkbox" id="exclude-spaces" onchange="updateStats()"> Spaties uitzonderen
        </label>
        <label>
            Karakterlimiet: <input type="number" id="char-limit" onchange="updateStats()" placeholder="Bijv. 500">
        </label>
    </div>
    <div id="stats">
        <p>Aantal karakters: <span id="char-count">0</span></p>
        <p>Aantal woorden: <span id="word-count">0</span></p>
        <p>Aantal zinnen: <span id="sentence-count">0</span></p>
        <p>Leestijd: <span id="reading-time">0</span> minuten</p>
    </div>
    <footer>
        <a href="/" class="hover:scale-1">&copy; MonkeyChef <?php echo date('Y'); ?></a>
    </footer>
</div>
<script>
    function updateStats() {
        const textInput = document.getElementById('text-input').value;
        const excludeSpaces = document.getElementById('exclude-spaces').checked;
        const charLimit = parseInt(document.getElementById('char-limit').value) || Infinity;

        // Beperk de tekst op basis van het karakterlimiet
        const text = textInput.substring(0, charLimit);

        // Karakter telling (optioneel zonder spaties)
        const charCount = excludeSpaces ? text.replace(/\s+/g, '').length : text.length;

        // Woorden telling
        const wordCount = text.trim().split(/\s+/).filter(word => word.length > 0).length;

        // Zinnen telling (gebaseerd op punt, vraagteken of uitroepteken)
        const sentenceCount = text.split(/[.!?]/).filter(sentence => sentence.trim().length > 0).length;

        // Leestijd (200 woorden per minuut)
        const readingTime = Math.ceil(wordCount / 200);

        // Update de statistieken
        document.getElementById('char-count').textContent = charCount;
        document.getElementById('word-count').textContent = wordCount;
        document.getElementById('sentence-count').textContent = sentenceCount;
        document.getElementById('reading-time').textContent = readingTime;
    }
</script>
</body>
</html>

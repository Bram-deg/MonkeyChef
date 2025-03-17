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
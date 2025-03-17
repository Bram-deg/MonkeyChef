document.addEventListener('DOMContentLoaded', function() {
    const img = document.querySelector('img');

    img.addEventListener('mouseenter', function() {
        img.classList.toggle('flipped');
    });
    img.addEventListener('mouseleave', function() {
        img.classList.toggle('flipped');
    });

    // Function to create a paragraph that counts from 1 to 15 and replaces the previous number
    function createCountingParagraph() {
        const counter = document.getElementById('counter');
        let count = 1;
        const intervalId = setInterval(() => {
            counter.textContent = count;
            if (count === 28) {
                clearInterval(intervalId);
                counter.classList.add('pop');
            }
            count++;
        }, 50);
    }

    // Call the function to create the counting paragraph
    createCountingParagraph();
});
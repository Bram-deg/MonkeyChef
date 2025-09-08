function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const messageDiv = document.getElementById('form-message');

        // Regular expression to validate phone number (example: 10 digits)
        const phoneRegex = /^\d{10}$/;

        if (name && phone) {
            if (phoneRegex.test(phone)) {
                messageDiv.textContent = `Thank you, ${name}! Monkey Chef will reach out ASAP!`;
                messageDiv.style.color = 'green';
            } else {
                messageDiv.textContent = 'Please enter a valid phone number (10 digits).';
                messageDiv.style.color = 'red';
            }
        } else {
            messageDiv.textContent = 'Please fill in both your name and phone number!';
            messageDiv.style.color = 'red';
        }
    });
});
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
        let maxcount = getRandomInt(1,100)
        const intervalId = setInterval(() => {
            counter.textContent = count;
            if (count === maxcount) {
                clearInterval(intervalId);
                counter.classList.add('pop');
            }
            count++;
        }, 20);
    }

    // Call the function to create the counting paragraph
    createCountingParagraph();
});
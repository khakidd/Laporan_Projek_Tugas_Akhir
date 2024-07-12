// Form validation for Contact Form
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let message = document.getElementById('message').value;
    let subject = document.getElementById('subject').value;

    if (!name || !email || !phone || !message || !subject) {
        alert('Please fill all the fields');
        return;
    }

    if (!validateEmail(email)) {
        alert('Please enter a valid email');
        return;
    }

    if (!validatePhone(phone)) {
        alert('Please enter a valid phone number');
        return;
    }

    this.submit();
});

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^[0-9]{10,15}$/;
    return re.test(phone);
}

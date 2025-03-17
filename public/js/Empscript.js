document.getElementById('employeeForm').addEventListener('submit', function (event) {
    if (!validateForm()) {
        event.preventDefault(); // Detener el envío del formulario
    }
});

function validateForm() {
    let isValid = true;
    clearErrors();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const password = document.getElementById('password').value.trim();

    // Validar nombre
    if (name === '') {
        showError('name', 'El nombre es obligatorio.');
        isValid = false;
    } else if (name.length < 7) {
        showError('name', 'El nombre debe tener al menos 7 caracteres.');
        isValid = false;
    }

    // Validar correo electrónico
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        showError('email', 'Por favor, ingrese un correo electrónico válido.');
        isValid = false;
    }

    // Validar número de teléfono
    const phonePattern = /^\d{3}\d{3}\d{4}$/;
    if (!phonePattern.test(phone)) {
        showError('phone', 'El número de teléfono debe tener el formato 1234567890.');
        isValid = false;
    }

    // Validar contraseña
    if (password === '') {
        showError('password', 'La contraseña es obligatoria.');
        isValid = false;
    } else if (password.length < 6) {
        showError('password', 'La contraseña debe tener al menos 6 caracteres.');
        isValid = false;
    }

    // Mostrar mensaje de éxito
    if (isValid) {
        document.getElementById('successMessage').textContent = 'Formulario enviado con éxito.';
        document.getElementById('successMessage').style.color = 'green';
    } else {
        document.getElementById('successMessage').textContent = '';
    }

    return isValid;
}

function showError(field, message) {
    const inputField = document.getElementById(field);
    const errorDiv = document.getElementById(field + 'Error');
    inputField.classList.add('error');
    errorDiv.textContent = message;
}

function clearErrors() {
    const inputFields = document.querySelectorAll('.form-group input');
    inputFields.forEach(input => {
        input.classList.remove('error');
    });

    const errorDivs = document.querySelectorAll('.form-group .error');
    errorDivs.forEach(div => {
        div.textContent = '';
    });

    document.getElementById('successMessage').textContent = '';
}

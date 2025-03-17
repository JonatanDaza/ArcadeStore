document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("employeeForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Evitar el envío del formulario para validar primero
        let valid = true;

        // Limpiar mensajes de error previos
        document.querySelectorAll(".error").forEach((el) => (el.textContent = ""));
        document.getElementById("successMessage").textContent = "";

        // Validar Tipo de documento
        const documento = document.getElementById("documento").value;
        if (!documento) {
            document.getElementById("selectError").textContent = "Seleccione un tipo de documento.";
            valid = false;
        }

        // Validar N° de documento
        const doc = document.getElementById("doc").value.trim();
        if (doc === "" || isNaN(doc)) {
            document.getElementById("docError").textContent = "Ingrese un número de documento válido.";
            valid = false;
        }

        // Validar Nombre completo
        const name = document.getElementById("name").value.trim();
        if (name === "" || name.length < 3) {
            document.getElementById("nameError").textContent = "Ingrese un nombre válido (mínimo 3 caracteres).";
            valid = false;
        }

        // Validar Correo electrónico
        const email = document.getElementById("email").value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            document.getElementById("emailError").textContent = "Ingrese un correo electrónico válido.";
            valid = false;
        }

        // Validar Teléfono
        const phone = document.getElementById("phone").value.trim();
        if (phone === "" || !/^\d{10}$/.test(phone)) {
            document.getElementById("phoneError").textContent = "Ingrese un número de teléfono válido (10 dígitos).";
            valid = false;
        }

        // Validar Fecha de inicio de contrato
        const fechaC = document.getElementById("fechaC").value;
        if (!fechaC) {
            document.getElementById("fechaError").textContent = "Seleccione una fecha válida.";
            valid = false;
        }

        // Mostrar mensaje de éxito si todo está correcto
        if (valid) {
            document.getElementById("successMessage").textContent = "Formulario enviado con éxito.";
            form.submit(); // Enviar el formulario si todo está bien
        }
    });
});

// script.js

document.addEventListener("DOMContentLoaded", function() {
    const navToggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('nav ul');
    
    
    navToggle.addEventListener('click', function() {
        navMenu.classList.toggle('show');
        navToggle.classList.toggle('open');
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const inputs = document.querySelectorAll(".input-box input");

    inputs.forEach(input => {
        input.addEventListener("focus", () => {
            const label = input.nextElementSibling;
            label.classList.add("active");
        });

        input.addEventListener("blur", () => {
            const label = input.nextElementSibling;
            if (input.value === "") {
                label.classList.remove("active");
            }
        });
    });
});


const dropdownButtons = document.querySelectorAll('.navbar-item > button.navbar-link');

function closeDropdowns(except = null) {
    dropdownButtons.forEach((button) => {
        if (button !== except) {
            button.parentElement.classList.remove('is-open');
            button.setAttribute('aria-expanded', 'false');
        }
    });
}

dropdownButtons.forEach((button) => {
    button.setAttribute('aria-expanded', 'false');

    button.addEventListener('click', () => {
        const isOpen = button.parentElement.classList.toggle('is-open');
        button.setAttribute('aria-expanded', String(isOpen));
        closeDropdowns(button);
    });
});

document.addEventListener('click', (event) => {
    if (!event.target.closest('.navbar-item')) {
        closeDropdowns();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeDropdowns();
    }
});

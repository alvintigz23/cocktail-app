document.addEventListener('DOMContentLoaded', () => {

    const selectElement = document.getElementById('lang-switcher');
    const form = document.getElementById('headerForm');

    // Add event listener to the select element
    selectElement.addEventListener('change', () => {
        form.submit();
    });
});
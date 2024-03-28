document.getElementById('label_toggle4').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Bajar al final de la página
document.getElementById('label_toggle5').addEventListener('click', function() {
    window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
});
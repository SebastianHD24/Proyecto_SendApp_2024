//JS CONTRASTE

let toggle=document.getElementById('toggle');
toggle.addEventListener('change',(event)=>{
    let checked=event.target.checked;
    document.body.classList.toggle('dark')

});
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//JS SUBIR Y BAJAR

document.getElementById('label_toggle4').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Bajar al final de la página
document.getElementById('label_toggle5').addEventListener('click', function() {
    window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
});
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


//JS ZOOM

var zoomLevel = 100; // Zoom level in percentage

    // Zoom in
    document.getElementById('label_toggle2').addEventListener('click', function() {
        // Zoom in effect
        zoomLevel += 10;
        document.body.style.zoom = zoomLevel + "%";
    });

    // Zoom out
    document.getElementById('label_toggle3').addEventListener('click', function() {
        // Zoom out effect
        zoomLevel -= 10;
        document.body.style.zoom = zoomLevel + "%";
    });

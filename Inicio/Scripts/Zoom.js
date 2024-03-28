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
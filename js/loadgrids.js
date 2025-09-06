    if (jQuery(".grid-gallery") !== null) {
        jQuery(".grid-gallery").each(function () {
            var galleryId = jQuery(this).attr("id");
            console.log(galleryId);
            new CBPGridGallery(document.getElementById(galleryId));
        });
        
    }

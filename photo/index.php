<div class="ion-image-slider" id="mySlider">
    <a href="link to large image 1"><img src="link to thumbnail 1" data-caption="Image name, if have one" /></a>
    <a href="link to large image 2"><img src="link to thumbnail 2" /></a>
    ...
    <a href="link to large image N"><img src="link to thumbnail N" data-caption="One more name" /></a>
</div>

<script>

$("#mySlider").ionImageSlider({
    zoomText: "Увеличить",                  // text near zoom icon; set "", if don't need
    startFrom: 0,                           // # of start picture
    slideShow: true,                        // enable slide show
    slideShowDelay: 7                       // pause between picture change (if slide show is on)
});

</script>
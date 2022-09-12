<?php include "header.php"; ?>

<main>
    <h2>Portfolio</h2>

        <div id="lightgallery">
            <a href="media/1full.jpg">
                <img src="media/1thumb.jpg" alt="Magazine Cover"/><figcaption>Magazine Cover</figcaption>
            </a>
            <a href="media/2full.jpg">
                <img src="media/2thumb.jpg" alt="Italy Postcard"/><figcaption>Italy Postcard</figcaption>
            </a>
            <a href="media/3full.jpg">
                <img src="media/3thumb.jpg" alt="Guitar Motivational Flyer"/><figcaption>Guitar Flyer</figcaption>
            </a>
            <a href="media/4full.jpg">
                <img src="media/4thumb.jpg" alt="Movie Poster"/><figcaption>Movie Poster</figcaption>
            </a>
            <a href="media/5full.jpg">
                <img src="media/5thumb.jpg" alt="Pizzaria Flyer"/><figcaption>Pizzaria Flyer</figcaption>
            </a>
            <a href="media/6full.jpg">
                <img src="media/6thumb.jpg" alt="Website Mockup"/><figcaption>Website Mockup</figcaption>
            </a>
            <a href="media/7full.jpg">
                <img src="media/7thumb.jpg" alt="Book Cover"/><figcaption>Book Cover</figcaption>
            </a>
            <a href="media/8full.jpg">
                <img src="media/8thumb.jpg" alt="Restaurant Menu"/><figcaption>Restaurant Menu</figcaption>
            </a>
            <a href="media/9full.jpg">
                <img src="media/9thumb.jpg" alt="Real Estate"/><figcaption>Real Estate</figcaption>
            </a>
        </div>

        <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/lightgallery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#lightgallery").lightGallery({
                    thumbnail: true
                });
            });
        </script>
</main>

<?php include "footer.php"; ?>
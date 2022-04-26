<?php /* Template Name: General Page */ ?>
<?php
get_header();

?>

<div class="general-page">
    <div class="top-section">
        <div class="logo">
            <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/12/EDT-asset-light-logo.png" alt="">
        </div>
        <div class="image small" style="background-image: url(https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/general-image3.jpg)"></div>
        <div class="image large" style="background-image: url(https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/general-image2-scaled.jpg)"></div>
        <div class="image large" style="background-image: url(https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/general-image1.jpg)"></div>
        <div class="image small" style="background-image: url(https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/front-page-bg.jpg)"></div>
        <div class="overlay"></div>
        <div class="title">
            <div>
                <span><?php echo get_the_title() ?></span>
            </div>
        </div>
    </div>
    <div class="content-section">
        <p><?php the_content() ?></p>
    </div>
</div>

<?php
// get_sidebar();
get_footer();

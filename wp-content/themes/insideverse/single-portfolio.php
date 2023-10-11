<?php
get_header();

?>



<section class="section-single-portfolio">
    <div class="main">
        <div class="single-portfolio">
            <h1 class="heading-primary color-blue-lotus text-center"><?php echo the_title(); ?></h1>

            <div class="single-portfolio__content">
                <div class="single-portfolio__box">
                    <div class="single-portfolio__text-box">
                        <p><?php echo the_content(); ?></p>
                    </div>

                    <?php

                    $video = get_post_meta(get_the_ID(), "single-portfolio-video", true);

                    if (!empty($video)) {
                    ?>

                        <div class="single-portfolio__video-box">
                            <video controls>
                                <source src="<?php echo $video ?>" type="video/mp4">
                            </video>
                        </div>

                    <?php
                    } else {
                    ?>

                        <div class="single-portfolio__video-box">
                            <img src="<?php echo the_post_thumbnail_url();
                                        ?>" alt="">
                        </div>
                    <?php
                    }
                    ?>
                </div>


                <div class="single-portfolio-gallery">
                    <?php
                    // Get the CMB2 field values
                    $images = get_post_meta(get_the_ID(), "single-portfolio", true);

                    // Check if any options are available
                    if ($images) {
                        foreach ($images as $image) {
                            $img = '';
                            if (isset($image['single-portfolio-page-image'])) {
                                $img = esc_html($image['single-portfolio-page-image']);
                            }

                            if (!empty($img)) {
                    ?>
                                <div class="gallery-iteam">
                                    <img src="<?php echo $img ?>" alt="">
                                </div>

                    <?php
                            }
                        }
                    }
                    ?>
                </div>

                <p><?php echo get_post_meta(get_the_ID(), "single-portfolio-desc", true); ?></p>
            </div>

        </div>
    </div>
</section><!-- .section-single-portfolio -->


<?php
get_footer();
?>
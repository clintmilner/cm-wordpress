<?php
    $features_section_image     =   get_field( 'features_section_image' );
    $features_section_title     =   get_field( 'features_section_title' );
?>
<!-- ========== COURSE FEATURES ========== -->
<section id="course-features">
    <div class="container">

        <div class="section-header">
            <?php // If the user has uploaded an image for this section ?>
            <?php if( !empty( $features_section_image ) ) { ?>
                <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
            <?php } ?>

            <h2><?php echo $features_section_title; ?></h2>
        </div>

        <div class="row">
            <?php $cf_loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

            <?php while( $cf_loop -> have_posts() ) : $cf_loop -> the_post(); ?>
                <div class="col-sm-2">
                    <i class="<?php the_field( 'course_feature_icon' ); ?>"></i>
                    <h4><?php the_title(); ?></h4>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
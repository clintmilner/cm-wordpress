<?php
    $instructor_section_title   = get_field( 'instructor_section_title' );
    $instructor_name   = get_field( 'instructor_name' );
    $bio_excerpt   = get_field( 'bio_excerpt' );
    $full_bio  = get_field( 'full_bio' );
    $twitter_username = get_field( 'twitter_username' );
    $facebook_username = get_field( 'facebook_username' );
    $number_of_students = get_field( 'number_of_students' );
    $number_of_reviews = get_field( 'number_of_reviews' );
    $number_of_courses = get_field( 'number_of_courses' );
?>
<!-- ========== INSTRUCTORS ========== -->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2><?php echo $instructor_section_title; ?>
                            <small><?php echo $instructor_name; ?></small>
                        </h2>
                    </div>
                    <div class="col-lg-4">
                        <?php if( !empty($twitter_username) ) : ?>
                            <a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i
                                    class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                        <?php if( !empty($facebook_username) ) : ?>
                            <a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                        <!--<a href="https://plus.google.com/+ClintHussey" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>-->
                    </div>
                </div>
                <p class="lead"><?php echo $bio_excerpt; ?></p>

                <?php echo $full_bio; ?>

                <hr>
                <h3>The Numbers
                    <small>They Don't Lie</small>
                </h3>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $number_of_students; ?>+ <span>students</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $number_of_reviews; ?> <span>reviews</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $number_of_courses; ?> <span>courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
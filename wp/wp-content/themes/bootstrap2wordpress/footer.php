<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package B2W - CM
 */

?>



<?php wp_footer(); ?>

<!-- ========== SIGN UP ========== -->
<section id="signup" data-type="background" data-speed="4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Are you ready to take your skills to the <strong>next level?</strong></h2>
                <p><a href="#" class="btn btn-lg btn-block btn-success">Sign Me Up!</a></p>
            </div>
        </div>
    </div>
</section>

<!-- ========== FOOTER ========== -->
<footer>
    <div class="container">
        <div class="col-sm-3">
            <p><a href="/"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
        </div><!-- end col -->
        <div class="col-sm-6">
            <nav>
                <ul class="list-unstyled list-inline">
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Resources</a></li>
                    <li><a href="">Contact</a></li>
                    <li class="signup-link"><a href="">Sign up now</a></li>
                </ul>
            </nav>
        </div><!-- end col -->
        <div class="col-sm-3">
            <p class="pull-right">&copy; 2015 Clint Milner</p>
        </div><!-- end col -->
    </div><!-- container -->
</footer>

<!-- ========== MODAL ========== -->
<div class="modal fade" id="subModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="subModalLabel"><i class="fa fa-envelope-o"></i> Subscribe to our Mailing
                    List</h4>
            </div>
            <div class="modal-body">
                <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our
                    best-selling courses, <em>for free!</em></p>

                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">and your email</label>
                        <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Subscribe!">
                </form>

                <hr>

                <p>
                    <small>By providing your email you consent to receiving occasional promotional emails &amp;
                        newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at
                        any time.
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/scripts.js"></script>

</body>
</html>

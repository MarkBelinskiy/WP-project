<?php if (!is_page('contacts')) { ?>
    <!-- CALL2ACTION -->
    <div class="full-width call-action">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4>У вас появились вопросы? Спросите нас!</h4>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo get_permalink(254); ?>" class="btn btn-danger">Задать вопрос</a>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL2ACTION -->

    <?php } ?>
        

        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 copy-right">
                        <p><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-logo.png" alt="Logo" class="img-responsive"> &copy; 2016 Поликарбонат</p>
                    </div>
                    <div class="col-md-7">
						<?php 
						wp_nav_menu(array(
							'theme_location' => 'footer',
							'container'       => '',
							'menu_class'      => '',
							'items_wrap'      => '<ul>%3$s</ul>'
						));
						?>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/masonry.pkgd.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slick.min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.selectBox.min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/icheck.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/counter.animation.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.appear.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/isotope.pkgd.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.cycle2.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fancybox.pack.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
		<?php wp_footer(); ?>
    </body>
</html>
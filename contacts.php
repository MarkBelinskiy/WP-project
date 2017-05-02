    <!-- MAP&FORM -->
    <div class="full-width map-wrap">

        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=AMMMdf2qMBykuiOwr75z6IAb4qudbk3k&amp;width=100%&amp;height=625&amps;scroll=false&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>

        <div class="contact-form-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-8 col-sm-offset-6">
                        <div class="contact-form">
                            <h3>Ваш отзыв</h3>


                            <?php echo the_content(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- MAP&FORM -->

    <!-- ADDRESS -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 address">
                <i class="fa fa-map-marker"></i>
                <span><?php echo get_field('adr'); ?></span>
            </div>
            <div class="col-md-3 col-sm-3 address">
                <i class="fa fa-phone"></i>
                <span><?php echo get_field('phone'); ?></span>
            </div>
            <div class="col-md-3 col-sm-3 address">
                <i class="fa fa-envelope"></i>
                <span><?php echo get_field('e-mail'); ?></span>
            </div>
            <div class="col-md-3 col-sm-3 address">
                <i class="fa fa-skype"></i>
                <span><?php echo get_field('skype'); ?></span>
            </div>
        </div>
    </div>
    <!-- ADDRESS -->

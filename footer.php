<?php
/**
 * The template for displaying the footer
 *
 * @package SRB_Advertising
 */
?>
    <footer data-scroll-section>
        <div class="secpad">
            <div class="container frow">
                <div class="tagline">
                    <img src="<?php echo get_theme_file_uri('assets/img/tagline1.svg'); ?>" alt="Image">
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-12 mb-xl-0 mb-md-5 mb-4">
                        <div class="secpara" data-scroll data-scroll-repeat>
                            <p>We ensure your brand stands out and stays remembered.</p>
                        </div>
                        <ul class="list-inline ftul animlist mb-0" data-scroll data-scroll-repeat>
                            <li class="list-inline-item">
                                <a class="active" href="<?php echo home_url(); ?>">Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php echo home_url('/about-us'); ?>">About Us</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php echo home_url('/what-we-do/branding'); ?>">What We Do</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php echo home_url('/portfolio'); ?>">Portfolio</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php echo home_url('/join'); ?>">Join</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php echo home_url('/contact-us'); ?>">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-xl-center mb-md-0 mb-4">
                        <ul class="list-unstyled mb-0 smul text-start animlist d-inline-block" data-scroll data-scroll-repeat>
                            <li><a target="_blank" href="https://www.facebook.com/srbadvertising">Facebook</a></li>
                            <li><a target="_blank" href="https://www.twitter.com/srbadvertising">Twitter</a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/srbadvertising">Linkedin</a></li>
                            <li><a target="_blank" href="https://www.instagram.com/srbadvertising">Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-md-8">
                        <ul class="list-unstyled mb-0 animlist ctul" data-scroll data-scroll-repeat>
                            <li>
                                <span>Call us</span><p class="me-1">:</p>
                                <p>
                                    <a href="tel:+97143313477"><i class="fas fa-phone"></i>+971 50 263 5446</a><br />
                                    <a href="tel:+971503987462">+971 50 398 7462</a><br />
                                    <a href="tel:+97142536397">+971 4 253 6397</a>
                                </p>
                            </li>
                            <li>
                                <span>Email</span><p class="me-1">:</p>
                                <div>
                                    <p><a href="mailto:info@srbadvertisingllc.com">info@srbadvertisingllc.com</a></p>
                                    <p><a href="mailto:sales@srbadvertisingllc.com">sales@srbadvertisingllc.com</a></p>
                                    <p>&nbsp;</p>
                                </div>
                            </li>
                            <li>
                                <span>Address</span><p class="me-1">:</p>
                                <p><a href="https://maps.app.goo.gl/rTpGXQr3VMJvjxai8" target="_blank">M-01 | The Meydan Hotel |<br />Nad Al Sheba | Dubai | UAE</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container srow" data-scroll-section>
            <span class="cpyrt animel animel-top" data-scroll data-scroll-repeat>© <?php echo date('Y'); ?> SRB Advertising LLC - FZ. All Rights Reserved</span>
        </div>
        <a href="javascript:void(0);" class="scrolltotop animel animel-right" data-scroll data-scroll-repeat>
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="24.5" stroke="white"/>
                <path d="M24 34.75C24 35.3023 24.4477 35.75 25 35.75C25.5523 35.75 26 35.3023 26 34.75L24 34.75ZM25.7071 15.2929C25.3166 14.9024 24.6834 14.9024 24.2929 15.2929L17.9289 21.6569C17.5384 22.0474 17.5384 22.6805 17.9289 23.0711C18.3195 23.4616 18.9526 23.4616 19.3431 23.0711L25 17.4142L30.6569 23.0711C31.0474 23.4616 31.6805 23.4616 32.0711 23.0711C32.4616 22.6805 32.4616 22.0474 32.0711 21.6569L25.7071 15.2929ZM26 34.75L26 16L24 16L24 34.75L26 34.75Z" fill="white"/>
            </svg>
        </a>
    </footer>
    </main>
    
    <!-- cursor -->
    <div class="srb-cursor cursor-outer" data-default="yes" data-link="yes" data-slider="no">
        <span class="fn-cursor"></span>
    </div>
    <div class="srb-cursor cursor-inner" data-default="yes" data-link="yes" data-slider="no">
        <span class="fn-cursor">
            <span class="fn-left"></span>
            <span class="fn-right"></span>
        </span>
    </div>

    <!-- preloader -->
    <div class="loading-container">
        <div class="loading-text">
            <img src="<?php echo get_theme_file_uri('assets/uploads/1694715053_159c16498d0e9a0478c3.png'); ?>" alt="Srb Advertising LLC-FZ | Evolution of brilliant ideas" class="img-fluid">
            <img src="<?php echo get_theme_file_uri('assets/img/load.gif'); ?>" alt="loader" class="img-fluid loadgif">
        </div>
    </div>

    <a href="https://wa.me/+971502635446" class="wtspfxd" target="_blank"><i class="bi bi-whatsapp"></i></a>

    <?php wp_footer(); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const bodyContent = document.body.innerHTML;
            const modifiedContent = bodyContent.replace(/SRB/g, '<span class="srb-class">SRB</span>');
            document.body.innerHTML = modifiedContent;
        });
    </script>
</body>
</html>
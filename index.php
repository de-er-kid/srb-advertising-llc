<?php get_header(); ?>

<section class="inbanner" data-scroll-section>
    <div class="container cnt">
        <div class="col-lg-6 col-7 px-0 ">
            <h5 class="sechead clr" data-scroll data-scroll-repeat><span class="headcnt"><?php the_title(); ?></span></h5><br><br>
            <div class="d-inline-block position-relative">
                <span class="circpink" data-scroll data-scroll-repeat></span>
                <span class="circblue" data-scroll data-scroll-repeat></span>
                <h2 class="sechead2 splitline splitline1 clr" data-scroll data-scroll-repeat>Crafting Visions,
                    Captivating Audiences.</h2>
            </div><br>
            <div class="secpara mb-0 clr" data-scroll data-scroll-repeat>
                <p>SRB Advertising doesn&#39;t just convey, we connect deeply. With campaigns that captivate and
                    imprint, we ensure your brand stands out and stays remembered.</p>
            </div>
        </div>
    </div>
    <div class="text-end">
        <div class="d-inline-block position-relative imgcnt">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697697019_e3b6048672d3b400de26.jpg"
                alt="banner" class="img-fluid">
            <div class="svgblue" data-scroll data-scroll-repeat><svg xmlns="http://www.w3.org/2000/svg" width="30"
                    height="30" viewBox="0 0 30 30" fill="none">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_radial_42_128)" />
                    <defs>
                        <radialGradient id="paint0_radial_42_128" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(15 8.5) rotate(70.4976) scale(25.4608)">
                            <stop stop-color="#00ADEA" />
                            <stop offset="1" stop-color="#00ADEA" stop-opacity="0" />
                        </radialGradient>
                    </defs>
                </svg></div>
        </div>
    </div>
    <div class="svgpink" data-scroll data-scroll-repeat><svg width="41" height="41" viewBox="0 0 41 41" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="20.5" cy="20.5" r="20.5" fill="url(#paint0_radial_42_129)" />
            <defs>
                <radialGradient id="paint0_radial_42_129" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                    gradientTransform="translate(11.5 22.5) rotate(40.9555) scale(35.0892)">
                    <stop stop-color="#FB008D" />
                    <stop offset="1" stop-color="#FB008D" stop-opacity="0" />
                </radialGradient>
            </defs>
        </svg></div>
</section>

<section>
    <?php the_content(); ?>
</section>


<?php get_footer(); ?>
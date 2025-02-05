<?php
/*
Template Name: Portfolio Page
*/
get_header();
?>

<section class="inbanner" data-scroll-section>
    <div class="container cnt">
        <div class="col-lg-7 col-7 px-0">
            <h5 class="sechead clr" data-scroll data-scroll-repeat><span class="headcnt">PORTFOLIO</span></h5><br>
            <div class="d-inline-block position-relative">
                <span class="circpink" data-scroll data-scroll-repeat></span>
                <span class="circblue" data-scroll data-scroll-repeat></span>
                <h2 class="sechead2 splitline splitline1 clr" data-scroll data-scroll-repeat>Crafted Creations: SRB's
                    Showcase of Excellence.</h2>
            </div><br>
            <div class="secpara clr" data-scroll data-scroll-repeat>
                <p>Dive into our curated showcase, where creativity meets results. Experience the breadth of our
                    expertise and the depth of our passion through each project, reflecting SRB&#39;s commitment to
                    excellence.</p>
            </div>
        </div>
    </div>
    <div class="text-end">
        <div class="d-inline-block position-relative imgcnt">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698035555_c194b1cb0a1b3154e095.jpg" alt="banner" class="img-fluid">
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
<section class="portfolio bg-white secpad pt-0" data-scroll-section>
    <div class="container">
        <ul class="list-inline portmenu animlist text-center border-0" data-scroll data-scroll-repeat>
            <li class="list-inline-item"><a href="javascript:void(0);" class="filter active" data-filter=".all">All</a>
            </li>
            <li class="list-inline-item"><a href="javascript:void(0);" class="filter" data-filter=".pcat1">Branding</a>
            </li>
            <li class="list-inline-item"><a href="javascript:void(0);" class="filter" data-filter=".pcat2">Signages</a>
            </li>
            <li class="list-inline-item"><a href="javascript:void(0);" class="filter"
                    data-filter=".pcat3">Advertising</a></li>
            <li class="list-inline-item"><a href="javascript:void(0);" class="filter" data-filter=".pcat4">Digital</a>
            </li>
        </ul>
        <div class="row lightgallery overflow-hidden" id="portfolio" data-scroll data-scroll-repeat>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697886827_0ab0814541d4fae51e0f.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem1">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697886827_0ab0814541d4fae51e0f.png" alt="Posters" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Posters</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697886182_cb4ba71b100ecfe9c9c5.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat2 animitem1">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697886182_cb4ba71b100ecfe9c9c5.png" alt="Signs" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Signs</h4>
                            <p>Signages</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038279_5467493fcdd7fd8cd250.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem1">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038279_5467493fcdd7fd8cd250.png" alt="Vehicle Graphics"
                        class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Vehicle Graphics</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038297_0ad78e7a4116402d3096.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem1">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038297_0ad78e7a4116402d3096.png" alt="Kiosk" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Kiosk</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887320_1afc96fb2a5bb7f740d6.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem1">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887320_1afc96fb2a5bb7f740d6.png" alt="Vehicle Graphics"
                        class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Vehicle Graphics</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038384_ffd24a8ce9b9739e6252.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat3 animitem1">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038384_ffd24a8ce9b9739e6252.png" alt="Brochure" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Brochure</h4>
                            <p>Advertising</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038402_70145c41cbb1347f7342.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem2">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038402_70145c41cbb1347f7342.png" alt="Corporate Branding"
                        class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Corporate Branding</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887181_6286488fde76b168c5f4.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem2">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887181_6286488fde76b168c5f4.png" alt="Flyers" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Flyers</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887367_c2cc92868fe9d80e31c3.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat2 animitem2">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887367_c2cc92868fe9d80e31c3.png" alt="Signage" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Signage</h4>
                            <p>Signages</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887409_d2ec5ad3ba9d059dcce8.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem2">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887409_d2ec5ad3ba9d059dcce8.png" alt="Display Stand" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Display Stand</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887444_aba71bed6c8e1aec9c8c.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem2">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697887444_aba71bed6c8e1aec9c8c.png" alt="Signage" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Signage</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038564_9ad7b813f3dddd69ca45.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem2">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038564_9ad7b813f3dddd69ca45.png" alt="LED Shelf" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>LED Shelf</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038596_48124576c42a8eea8bdf.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat3 animitem3">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038596_48124576c42a8eea8bdf.png" alt="Posters" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Posters</h4>
                            <p>Advertising</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038641_797716ac2ef590cd10a9.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem3">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038641_797716ac2ef590cd10a9.png" alt="Promotional Items"
                        class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Promotional Items</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038665_f85729093807b816a33c.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem3">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698038665_f85729093807b816a33c.png" alt="Al Ain Kiosk" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Al Ain Kiosk</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697889824_86abe5d5eaca564ae438.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem3">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1697889824_86abe5d5eaca564ae438.png" alt="Packaging" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Packaging</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698036489_44ff1967166e88013e4a.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem3">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698036489_44ff1967166e88013e4a.png" alt="Fruity" class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>Fruity</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698037029_fdff1d4976988937491d.png"
                class="col-lg-4 col-sm-6 col-12 galgrid all pcat1 animitem3">
                <div class="galitem">
                    <span data-scroll></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/1698037029_fdff1d4976988937491d.png" alt="POS Material Stand"
                        class="img-fluid">
                    <div class="galcnt">
                        <div>
                            <h4>POS Material Stand</h4>
                            <p>Branding</p>
                        </div>
                        <i class="bi bi-plus"></i>
                    </div>
                </div>
            </a>
        </div>

    </div>
</section>

<?php get_footer(); ?>
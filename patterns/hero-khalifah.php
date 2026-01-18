<?php
/**
 * Title: Hero Section (Khalifah)
 * Slug: mrty-theme/hero-khalifah
 * Categories: featured
 */
?>
<!-- wp:cover {"url":"https://placehold.co/1200x600/009988/ffffff?text=Selamat+Datang","dimRatio":20,"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:100px;padding-bottom:100px">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
    <img class="wp-block-cover__image-background" src="https://placehold.co/1200x600/009988/ffffff?text=Selamat+Datang"
        alt="Masjid Raya Mrty" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"42px","fontWeight":"700"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:42px;font-weight:700">Selamat Datang di
            Website Masjid Raya Mrty</h1>
        <!-- /wp:heading -->
    </div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-light-bg-background-color has-background"
    style="margin-top:0;margin-bottom:0;padding-top:20px;padding-bottom:20px">
    <!-- wp:shortcode -->
    [mrty_prayer_widget]
    <!-- /wp:shortcode -->
</div>
<!-- /wp:group -->
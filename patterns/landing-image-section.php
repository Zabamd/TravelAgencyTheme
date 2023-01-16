<?php
/**
 * Title: Landing Page Image Section
 * Slug: t-par-agency/landing-image-section
 * Categories: t-par-agency
 */
?>
<!-- wp:group {"tagName":"header","className":"landingPageHeader","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"spaceAround"}} -->
<header class="wp-block-group landingPageHeader">
  <!-- wp:group  {"className":'landingPageLogo'} -->
  <div class="wp-block-group landingPageLogo"></div>
  <!-- /wp:group -->

  <!-- wp:list {"className":"landingPageNav"} -->
  <ul class="landingPageNav">
    <!-- wp:list-item {"className":"landingPageNavLink"} -->
    <li class="landingPageNavLink"><a><? echo esc_html__('CONFIGURATEUR','t-par-agency')?></a></li>
    <!-- /wp:list-item -->
    <!-- wp:list-item {"className":"landingPageNavLink"} -->
    <li class="landingPageNavLink"><a><? echo esc_html__('BLOG','t-par-agency')?></a></li>
    <!-- /wp:list-item -->
    <!-- wp:list-item {"className":"landingPageNavLink"} -->
    <li class="landingPageNavLink"><a><? echo esc_html__('MON COMPTE','t-par-agency')?></a></li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->
</header>
<!-- /wp:group -->

<!-- wp:group {"className":"landingImage"} -->
<div class="wp-block-group landingImage">
  <!-- wp:group  {"className":"headingWrapper","layout":{"type":"flex","orientation":"vertical"}} -->
  <div class="wp-block-group headingWrapper">
    <!-- wp:paragraph {"className":"landingPageParagraph"} -->
    <p class="landingPageParagraph"><? echo esc_html__('Bienvenue','t-par-agency')?></p>
    <!-- /wp:paragraph -->
    <!-- wp:heading {"className":"landingPageHeading"} -->
    <h2 class="landingPageHeading"><? echo esc_html__('CONFIGUREZ LE VOYAGE DE VOS RÊVES !','t-par-agency')?></h2>
    <!-- /wp:heading -->
    <!-- wp:buttons {"className":"landingPageButtonGroup"} -->
    <div class="wp-block-buttons landingPageButtonGroup">
      <!-- wp:button {"className":"landingPageButton"} -->
      <div class="wp-block-button landingPageButton">
        <a class="wp-block-button__link"
          ><? echo esc_html__('ON EST TIPAR ! ','t-par-agency')?><span class="arrow">&rarr;</span></a
        >
      </div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
  <!-- /wp:group -->
  <!-- wp:social-links {"className":"landingPageSocialLinks"} -->
  <ul class="wp-block-social-links landingPageSocialLinks">
    <!-- wp:social-link {"service":"instagram","url":"https://example.com/"} /-->
    <!-- wp:social-link {"service":"youtube","url":"https://example.com/"} /-->
    <!-- wp:social-link {"service":"pinterest","url":"https://example.com/"} /-->
  </ul>
  <!-- /wp:social-links -->
</div>
<!-- /wp:group -->

<?php
/**
 * Title: Content Section for destination post 
 * Slug: t-par-agency/destination-content-section
 * Categories:t-par-agency
 */
?>

<!-- wp:group {'className':'contentSection'} -->
<div class="wp-block-group contentSection">
  <!-- wp:heading {'className':'contentSectionHeading'} -->
  <h2 class="contentSectionHeading">
    <? echo esc_html__('NOS')?>
    <span class="textHighlightYellow"> <? echo esc_html__('VOYAGES')?> </span> 
    <? echo esc_html__('PHARES')?>
  </h2>
  <!-- /wp:heading -->
  <!-- wp:paragraph {'className':'contentSectionParagraph'} -->
  <p class="contentSectionParagraph">
    <? echo esc_html__('Voici une séléction de nos')?>
    <span class="textHighlightBold"> <? echo esc_html__('voyages les plus prisés!')?></span>
    <? echo esc_html__("Il existe de nombreux endroits magnifiques à travers le monde qui méritent d'être visités. Pour vous aider à faire votre choix, voici quelques-unes des")?>
    <span class="textHighlightBold"><? echo esc_html__('meilleures destinations')?></span> 
    <?  echo esc_html__('de voyage àtravers le monde :')?>
  </p>
  <!-- /wp:paragraph -->

  <!-- wp:query {"queryId":8,"query":{"perPage":3,"pages":0,"offset":0,"postType":"destination","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"className":"destinationQueryBlock"} -->
  <div class="wp-block-query destinationQueryBlock">
    <!-- wp:post-template {"className":"destinationPostTemplate"} -->
    <!-- wp:group {"className":"destinationPostCard"} -->
    <div class="wp-block-group destinationPostCard">
      <!-- wp:post-featured-image {"className":"destinationPostImage"} /-->
      <!-- wp:post-title {"className":"destinationPostTitle"} /-->
      <!-- wp:post-content {"className":"destinationPostContent"} /-->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
    <p><? echo esc_html__('Add destinations')?></p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
  </div>
  <!-- /wp:query -->
</div>
<!-- /wp:group -->

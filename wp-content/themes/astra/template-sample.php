<?php

/**
* Template Name: Search Page
**/
get_header(); ?>


<main id="content" role="main">
  <!-- How can we help Start -->
    <div class="container content-space-t-3 content-space-t-lg-4">
      <div class="row row-cols-1 sample-rows">
        <?php if (isset($_REQUEST['q'])) {
          echo $search = $_REQUEST['q'];
        } ?>
      </div>
      <!-- End Row -->
    </div>
  <!-- How can we help End -->
</main>
<?php get_footer(); ?>

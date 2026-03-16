<?php
/* Template Name: New School Landing */
get_header();
?>

<div class="landing-wrapper">

<?php
// === Editable top section: use the WordPress page editor to edit this block ===
if ( have_posts() ) :
  while ( have_posts() ) : the_post();

    // PAGE-SPECIFIC MASTER CTA LINK (set this custom field on the page)
    // Add a custom field named "cta_link" in the page editor (Custom Fields panel)
    $cta_link = get_post_meta( get_the_ID(), 'cta_link', true );

    // Fallback if not set
    if ( empty( $cta_link ) ) {
        $cta_link = '#';
    }

    // Make the CTA link available to all template parts included below
    set_query_var( 'cta_link', $cta_link );

    // Output editable hero / top content (paste your hero HTML into the page content)
    the_content();

  endwhile;
endif;
?>

<?php
// === Fixed template parts below (these remain as PHP includes / template parts) ===
// Using get_template_part() is child-theme friendly; it will look for the corresponding PHP files
get_template_part('template-parts/custom-page-parts/setsumeikai/part-2-why-KidsUP');
get_template_part('template-parts/custom-page-parts/setsumeikai/call-to-action');
get_template_part('template-parts/custom-page-parts/setsumeikai/part-3-course-information');
get_template_part('template-parts/custom-page-parts/setsumeikai/call-to-action');
get_template_part('template-parts/custom-page-parts/setsumeikai/part-4-working-moms');
get_template_part('template-parts/custom-page-parts/setsumeikai/call-to-action');
get_template_part('template-parts/custom-page-parts/setsumeikai/part-5-english-learners');

// If you prefer the original require() style, replace the lines above with your require() calls.
// require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/part-2-why-KidsUP.php';
// ...
?>

</div>

<?php
get_footer();

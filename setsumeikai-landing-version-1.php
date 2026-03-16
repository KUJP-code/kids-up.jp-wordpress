<?php
/*
Template Name: Setsumeikai Landing
*/
?>

<?php get_header('setsu1'); ?>

<main>

<?php
// === Fixed template parts below (these remain as PHP includes / template parts) ===
// Using get_template_part() is child-theme friendly; it will look for the corresponding PHP files
get_template_part('template-parts/custom-page-parts/setsumeikai/part-1-hero');
get_template_part('template-parts/custom-page-parts/setsumeikai/special-offers/winter-2026');
get_template_part('template-parts/custom-page-parts/setsumeikai/part-2-why-KidsUP');
get_template_part('template-parts/custom-page-parts/setsumeikai/call-to-action-static');
get_template_part('template-parts/custom-page-parts/setsumeikai/part-3-course-information');
get_template_part('template-parts/custom-page-parts/setsumeikai/call-to-action-static');
get_template_part('template-parts/custom-page-parts/setsumeikai/part-4-working-moms');
get_template_part('template-parts/custom-page-parts/setsumeikai/call-to-action-static');
get_template_part('template-parts/custom-page-parts/setsumeikai/part-5-english-learners');

// If you prefer the original require() style, replace the lines above with your require() calls.
// require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/kidsup/template-parts/custom-page-parts/setsumeikai/part-2-why-KidsUP.php';
// ...
?>


</main>

<?php get_footer(); ?>

<?php
/*
Template Name: Blog
 */

get_header();
$get_fields = get_post_custom();
$fields = get_fields();
?>
<div id="primary" class="content-area pt-5">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <?php
            // Start the loop.
            while (have_posts()) : the_post();
                // Include the page content template.
                get_template_part('content');
            // End the loop.
            endwhile;
            ?>
        </div>
    </main><!-- .site-main -->
</div>

<script>
$('img').addClass('img-fluid');
</script>

<?php get_footer(); ?>
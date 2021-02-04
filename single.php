<?php
$base_url = esc_url(get_template_directory_uri());
get_header(); 

$args = array(
	'numberposts'	=> 20,
	'category'		=> 4
);
$my_posts = get_posts( );

$tumbnail = get_the_post_thumbnail_url(get_the_ID(), '');
?>

<?php if (get_post_type() == 'post') : ?>
<main id="blog-single">
    <section class="content-area">
        
        <div class="espacamento">
            <img src="<?= $tumbnail;?>"  class=" banner"/>
        </div>
        
        <div class="conteudo">
            <?php if (have_posts()) : the_post(); ?>

            <div class="">
                
                <div class="col-12 col-sm-8 mb-5  flex-column divConteudo">
                    <?php the_title('<h1 class="text-left avenirRegular-500">','</h1>'); ?>

                    <div>
                        <?= the_content(); ?>
                    </div>
                </div>
                

                <div class="col-4 pl-0 flex-column pb-5">
                    <?php foreach($my_posts as $post):
                        $text = $post->post_content;
                        $words = 20;
                        $more = '[…]';
                            
                        $excerpt = wp_trim_words( $text, $words, $more ); ?>

                        <div>
                            <a href="<?= $post->guid; ?>">
                            <h5><?= $post->post_title; ?></h5>
                            <p><?= $excerpt; ?></p></a>
                        </div>
                        <div style="width:100%; background-color: #9F9F9F; height:1px"></div>
                     
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php endif; ?>
<?php get_footer(); ?>

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
    <section id="primary" class="content-area">
        <!-- <div class="d-flex align-items-center justify-content-center" style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID())?>'); height: 400px"> -->
        <div class="d-none d-sm-flex  align-items-center justify-content-center" style="background-color: #000; height:400px">
        </div>
        <div class="d-flex d-sm-none align-items-center justify-content-center" style="background-color: #000; height:200px">
        </div>
        <img src="<?= $tumbnail;?>"  class="img-fluid d-none d-sm-block mx-auto" style="width:-webkit-fill-available; width:80%; margin-top:-200px; "/>
        <img src="<?= $tumbnail;?>"  class="img-fluid d-block d-sm-none mx-auto" style="width:-webkit-fill-available; width:85%; margin-top:-80px; "/>
        <!-- <main id="main" class="site-main bg-white main-blog" role="main"> -->
            <div class="py-5">
                <?php if (have_posts()) : the_post(); ?>
                <div class="row p-sm-5 mx-0 d-flex justify-content-center w-100">
                    
                    <div class="col-8  mb-5 d-none d-sm-flex flex-column divConteudo">
                        <?php the_title('<h1 class="text-uppercase mx-5 text-left avenirRegular-500 f30">','</h1>'); ?>

                        <div>
                            <div class="col-md-12 p-3 px-sm-5 avenirRegular-600 f18">
                                <?= the_content(); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-5 d-flex d-sm-none flex-column divConteudo px-3">
                        <?php the_title('<h1 class="text-uppercase mx-3 text-justify avenirBold f25">','</h1>'); ?>
                        <div>
                            <div class="col-md-12 p-3 p-sm-5 text-justify avenirRegular-600 f16">
                                <?= the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 pl-0 d-none d-sm-flex flex-column pb-5" style="border-left:1px solid #9F9F9F;height:100%;">
                        <?php foreach($my_posts as $post){
                            $text = $post->post_content;
                            $words = 20;
                            $more = '[…]';
                             
                            $excerpt = wp_trim_words( $text, $words, $more );
                            echo '<div class="pl-3 py-3">
                            <a href="'.$post->guid.'">
                                    <h5 class="avenirRegular-600 f16" style="color:#FF0000">'.$post->post_title.'</h5>';
                            echo '  <p class="avenirRegular-600 f18" style="color: #000;line-height: 22px;">'.$excerpt.'</p></a>
                                </div>';
                            echo '<div style="width:100%; background-color: #9F9F9F; height:1px"></div>';
                        }?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        <!-- </main>.site-main -->
        
    </section><!-- .content-area -->
    <?php get_footer(); ?>
<?php endif; ?>

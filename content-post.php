<?php

    $thumburl = get_the_post_thumbnail_url();
    $get_fields = get_post_custom();
    $fields = get_fields();

    $imagem = '';
    if (!empty($thumburl)) :
        $imagem = '<a href="' . get_permalink() . '"><img src="' . get_the_post_thumbnail_url(get_the_ID(), '') . '" style="height: 100%; width:100%" alt="' . get_the_title() . '" /></a>';
    endif;

    $tags = wp_get_post_tags(get_the_ID(), array('fields' => 'names'));
    $tags = implode(", ", $tags);

?>

<?php $newValue = get_query_var( 'categories' );?>

<?php if (get_post_type() == 'post') : ?>

<div class="mr-5 cards-blog">
    <div class="card cardBlog" style="border-radius: 0px;min-height: 425px;box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
        
        <div class="d-flex" style="height: 139px">
            <?php if($imagem !== ''){
                echo $imagem;
            }else{   ?>
                <div class="divNullImg" style="height: 190px;width:100%; background-color: #F5F5F5;"></div>
            <?php } ?>
        </div>

        <div class="card-body d-flex flex-column justify-content-center">
            <div style="height: 180px">
                <div style="height:80px;">
                    <?php
                    $text = get_the_title();
                    $words = 10;
                    $more = ' […]';
                    
                    $excerpt = wp_trim_words( $text, $words, $more ); ?>

                    <h1 class="avenirBold"><?= $excerpt; ?></h1>
                </div>
                <?php the_excerpt();?>
            </div>

            <a href="<?= get_permalink(); ?>" class="f18" style="color: #ff502a;">Ler mais</a>
        </div>
    </div>
</div>


<?php endif; ?>


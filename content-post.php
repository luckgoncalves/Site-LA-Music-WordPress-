<?php

$thumburl = get_the_post_thumbnail_url();
$get_fields = get_post_custom();
$fields = get_fields();
$imagem = '';
if (!empty($thumburl)) :
    $imagem = '<a href="' . get_permalink() . '"><img src="' . get_the_post_thumbnail_url(get_the_ID(), 'blog_list') . '" class="img-fluid" alt="' . get_the_title() . '" /></a>';
endif;

$tags = wp_get_post_tags(get_the_ID(), array('fields' => 'names'));
$tags = implode(", ", $tags);

?>

<?php if (get_post_type() == 'post') : ?>
<div class="col-lg-4 col-md-4 mb-5" style="max-width:25rem;">
    <div class="card cardBlog" style="border-radius: 0px;min-height: 425px;box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
        <div class="d-flex">
            <?php if($imagem !== ''){
                echo $imagem;
            }else{   ?>
                <div class="divNullImg" style="height: 190px;width:100%; background-color: #F5F5F5;"></div>
            <?php } ?>
        </div>
        <div class="d-none card-body d-sm-flex flex-column justify-content-center">
            <div style="height: 180px">
                <div style="height:80px;">
                <?php
                $text = get_the_title();
                $words = 10;
                $more = ' […]';
                 
                $excerpt = wp_trim_words( $text, $words, $more );
                echo '<h1 class="f18 avenirBold text-uppercase">'.$excerpt.'</h1>';
                ?>
                </div>
                    <?php the_excerpt();?>
            </div>
            <a href="<?= get_permalink(); ?>" class="f18" style="color: #ff502a;">Ler mais</a>
        </div>
        <div class="d-flex card-body d-sm-none flex-column justify-content-center">
            <div>
                <div>
                <?php
                    $text = get_the_title();
                    $words = 10;
                    $more = ' […]';
                    
                    $excerpt = wp_trim_words( $text, $words, $more );
                    echo '<h1 class="f18 avenirBold text-uppercase">'.$excerpt.'</h1>';
                ?>
                </div>
                    <?php the_excerpt();?>
            </div>
            <a href="<?= get_permalink(); ?>" class="f18" style="color: #ff502a;">Ler mais</a>
        </div>
    </div>
</div>


<?php endif; ?>

<?php
    $base_url = '/wp-content/themes/la_music/';
    get_header(); 
?>

<div id="primary" class="content-area">
    <div id="banner-list-blog" class="bg-black d-flex align-items-center justify-content-center pl-0">
        <div class="row d-flex flex-column align-items-center justify-content-center">
            
            <h2 class="absolute text-white text-uppercase text-center avenirBold">Viver de Música</h2>

            <div class="form-group has-search">
                <span class="fa fa-search form-control-feedback fa-2x"></span>
                <input id="search-post" type="text" class="form-control" placeholder="Search">
            </div>
            <div class="has-tags">
                <p>TAG's:</p>
                <span>
                    Direito autoral
                </span>
                <span>
                    ISRC
                </span>
                <span>
                    Dinheiro
                </span>
            </div>
        </div>
    </div>
    
    <div id="containerCardBlog" class="mx-3 mx-sm-5">
        <div class="row d-flex mx-0 w-100 justify-content-around">
        
        <?php
            foreach ($postslist as $post) :  setup_postdata($post); ?>  
            <!-- <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  -->
            
            <?php endforeach; ?> 
           
            <?php 
                foreach( get_categories() as $category ) {
                    $args = array( 'category' => $category->cat_ID, 'post_type' =>  'post' ); 
                    $postslist = get_posts( $args );    
                    

                    echo 
                        '<div class="row w-100 mt-5">
                            <div class="d-flex flex-column justify-content-center" style="width: 304px;">
                                <h2 style="font-size:2.76rem">'.$category->name.'</h2>
                                <a href="#" class="d-block">ver mais<a/>
                            </div>

                            <div class="d-flex">';
                                $qtd = 0;
                                foreach ($postslist as $post) :  setup_postdata($post); 
                                    if($qtd >= 3) {
                                        
                                        break;
                                    } 
                                    get_template_part('content', 'post');
                                    $qtd++;
                                endforeach;
                    echo '</div>
                        </div>';
                }
            ?>
            <?php
            // while (have_posts()) : the_post();
            //     $tipo_post = get_post_type();
            //     // echo $tipo_post;
            //     // Include the page content template.
            //     set_query_var( 'my_var_name', 'dasd' );

            //     get_template_part('content', $tipo_post, 'teste');
            // // End the loop.
            // endwhile;
            // echo $template_content;
            if (get_post_type() == 'post') :
                echo '</div>';?>
                    <div class="blog-pagination mb-5">
                            <?php previous_posts_link('Anterior');?><?php next_posts_link('Próximo'); ?>
                    </div>
            <?php endif;
            ?>
        </div>
        <div class="row align-items-center w-100 mx-0 d-none d-sm-flex">
            <div class="col-6 pl-sm-5 pl-0">
                <h4 class="avenirRegular f26">Quer receber novidades no seu e-mail</br> <span class="avenirBold">Se inscreva em nossa newsletter</span></h4>
                <div class="d-flex">
                    <input type="text" class="form-control" placeholder="Seu e-mail" style="width:70%; border-radius:0; height:45px"/>
                    <buttom class="btn avenirRegular-500 d-flex align-items-center text-white f19" style="background-color: #FF2A2A; margin-left:-10%; border-radius:0;height:45px">Inscrever</buttom>
                </div>
            </div>
            <div class="col-6 pr-0">
                <img src="<?= $base_url?>/assets/img/bg-newsletter.png" class="img-fluid d-block ml-auto"/>
            </div>
        </div>
        <div class="row align-items-center w-100 mx-0 d-flex d-sm-none mb-5 px-3">
            <div class="col-12 pl-sm-5 pl-0">
                <h4 class="avenirRegular text-center f26">Quer receber novidades no seu e-mail <span class="avenirBold">Se inscreva em nossa newsletter</span></h4>
                <div class="d-flex flex-column">
                    <input type="text" class="form-control mb-3" placeholder="Seu e-mail" style="border-radius:0; height:45px"/>
                    <buttom class="btn avenirRegular-500 d-flex justify-content-center align-items-center text-white f19 text-center" style="background-color: #FF2A2A; border-radius:0;height:45px">Inscrever</buttom>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
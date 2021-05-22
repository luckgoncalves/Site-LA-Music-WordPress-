<?php
$base_url = esc_url(get_template_directory_uri());
global $wp_query;
$pageId     = $wp_query->post->ID;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>">
    <meta name="author" content="LA Music">
    <?php
        $posttags = get_the_tags();
        $keywords = '';
        if ($posttags) {
            foreach($posttags as $tag) {
                $keywords .= $tag->name . ','; 
            }
        }
    ?>
    <meta name="keywords" content="<?= $keywords; ?>" />
    
    <meta property="og:site_name" content="LA Music">
    <meta property="og:url" content="<?php the_permalink(); ?>" />

    <meta property="og:image" content="<?= get_the_post_thumbnail_url(get_the_ID(), 'blog_list')?>">

    <meta name="facebook-domain-verification" content="aygybya038eb6ltspirhisalw6xztd" />

    <link rel="shortcut icon" href="/wp-content/themes/la_music/assets/img/ico.svg" />

    <?php if ($post->ID !== 328) { ?>
        <meta property="og:description" content="<?= get_post_field('description', $post->ID) ?>" />
        <meta property="og:title" content="<?= get_post_field('title', $post->ID) ?>" />
    <?php }else{ ?>
        <meta property="og:title" content="Blog - Viver de Música/ LA Music" />
        <meta property="og:description" content="Entenda como funciona o direito autoral e o mercado da música no Brasil de uma forma descomplicada e inovadora." />
    <?php };?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css"/> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css"/> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/global/styles.css" />
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/home/styles.css" />
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/quem-somos/styles.css" />
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/clientes/styles.css" />
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/contratos/styles.css" />
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/registro-marcas/styles.css" />
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/direito-autoral/styles.css" />
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/creditos-retidos/styles.css" />
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/blog-single/styles.css" />
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/blog-list/styles.css" />
    <link rel="stylesheet" href="/wp-content/themes/la_music/assets/scss/login/styles.css" />
    <!-- MAIN CSS -->


    <title><?php wp_title( '| ', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
   
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143795586-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143795586-1');
    </script>

<body style="background-color: #E5E5E5;">
  <header class="header-menu w-100" style="position:fixed;z-index:9999">
      <div class="menu ">
          <nav class="navbar w-100 text-white px-lg-5 px-md-3 py-3 nav-desktop">
            
            <div class="py-3 px-lg-3 px-xl-5 d-none d-sm-flex justify-content-end align-items-center ml-auto">
                <a href="https://www.linkedin.com/company/lamusic/" target="_blank">
                    <img class="mx-2" src="<?= $base_url ?>/assets/img/linkedin.svg" alt="Linkedin" />
                </a>    
                <a href="https://www.facebook.com/LAMusicMM" target="_blank">
                    <img class="mx-2" src="<?= $base_url ?>/assets/img/facebook.svg" alt="Facebook" />
                </a>
                <a href="https://www.instagram.com/lamusicmm/" target="_blank">
                    <img class="mx-2" src="<?= $base_url ?>/assets/img/instagram.svg" alt="Instagram" />
                </a>
                <a href="https://api.whatsapp.com/send?phone=5541992399888&fbclid=IwAR2ouD7MCdPlnh7fRCScOEQe1fWdxVmZW_TXVTqsEkFR7HS7WskFHgaF42Q" target="_blank">
                    <img class="ml-2" src="<?= $base_url ?>/assets/img/whatsapp.svg" alt="WhatsApp" />
                </a>
            </div>

            
            <div class="row d-flex justify-content-between mx-md-0 px-0 w-100 align-items-center px-md-0 px-lg-3 px-xl-5 px-0">                      
                <img src="<?= $base_url ?>/assets/img/logo-la.svg"
                    class="d-inline-block logoTop img-fluid align-top" id="logoLA" alt="LA Music" style="cursor: pointer" />
                <?php wp_nav_menu(array('theme_location' => 'menu-topo', 'menu_class' => 'menu-topo align-items-center navbar-nav mr-auto text-center', 'menu_id' => 'top-nav')); ?>
            </div>

          </nav>
          <div class="pos-f-t nav-mobile">
              <nav class="navbar navbar-dark float-right w-100" style="background-color: #111111">
                <img src="<?= $base_url ?>/assets/img/logo-la.svg" id="logoLA" class="d-inline-block logoTop img-fluid align-top" alt="LA Music" style="cursor:pointer">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img src="/wp-content/themes/la_music/assets/img/hamburguer.svg" alt="Menu">
                </button>
                
                <div class="collapse w-100 justify-content-center" id="navbarToggleExternalContent">
                  <?php wp_nav_menu(array('theme_location' => 'menu-topo', 'menu_class' => 'menu-topo align-items-center navbar-nav mr-auto text-center', 'menu_id' => 'top-nav')); ?>
                </div>
              </nav>
          </div>
      </div>
  </header>

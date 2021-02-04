<?php
/*
Template Name: Home
 */
$base_url = esc_url(get_template_directory_uri());
get_header(); 

$args = array(
  'post_type' => 'servicos',
  'orderby' => 'menu_order',
  'order' => 'ASC',
);
$queryServicos = new WP_Query($args);

$args = array(
  'post_type' => 'clientes',
  'orderby' => 'menu_order',
  'order' => 'ASC',
);
$queryClientes = new WP_Query($args);

$args = array(
  'post_type' => 'testemunho',
  'orderby' => 'menu_order',
  'order' => 'ASC',
  
);
$queryTestemunho = new WP_Query($args);

$args = array(
  'post_type' => 'parceiros',
  'orderby' => 'menu_order',
  'order' => 'ASC',
);
$queryParceiros = new WP_Query($args);
?>
<main id="home">
  <div id="slider">
    <section id="home-home" class="selected">

        <div class="text-slide">
          <div class="logoLA">
            <img class="" src="<?= $base_url?>/assets/img/la-music-background.png" style="" />
          </div>

          <div class="description">
            <h1 class=" avenirRegular-600">Resgate de Créditos Retidos</h1>
            <p class=" avenirRegular-500">Créditos retidos são valores que o ECAD arrecada e  não distribui por inconsistências de cadastro.
              Se você é compositor, pode ter créditos retidos para receber.</p>
              <a href="https://consulta.lamusic.com.br/" class="bt bg-red scrollSuave f14 avenirRegular-600">Consulte grátis</a>
              <div class="mt-3">
                <ul class="d-flex px-0 justify-content-center">
                  <li style="list-style:none;cursor:pointer;" onclick="nexSliderM(0)" class=" mr-3">
                    <a>
                      <div style="height:20px;width: 20px; background-color: #2F2F2F; border:1px solid #2F2F2F; border-radius:50%"></div>
                    </a>
                  </li>
    
                  <li style="list-style:none;cursor:pointer;" onclick="nexSliderM(1)" class=" mr-3">
                    <a>
                      <div style="height:20px;width: 20px; background-color: transparent; border:1px solid #2F2F2F; border-radius:50%"></div>
                    </a>
                  </li>
                </ul>
              </div>
          </div>


        </div>

        <div>
          <img src="<?= $base_url?>/assets/img/la-music-background.png" style="" />
        </div>
    </section>

    <section id="home-home">
      <div class="text-slide">
        <div class="logoLA">
          <img src="<?= $base_url?>/assets/img/la-music-background.png" style="" />
        </div>

        <div class="description">
          <h1 class="text-white text-center text-sm-left avenirRegular-600">A startup que conecta o artista ao seu direito</h1>
          <a href="#home-quemsomos" class="bt bg-red scrollSuave f14 avenirRegular-600">Saiba mais</a>
          
          <div class="mt-3">
            <ul class="d-flex px-0 justify-content-center">
              <li style="list-style:none;cursor:pointer;" onclick="nexSliderM(0)"class=" mr-3">
                <a>
                  <div style="height:20px;width: 20px; background-color: transparent; border:1px solid #2F2F2F; border-radius:50%"></div>
                </a>
              </li>
              
              <li style="list-style:none;cursor:pointer;" onclick="nexSliderM(1)" class=" mr-3">
                <a>
                  <div style="height:20px;width: 20px; background-color: #2F2F2F; border:1px solid #2F2F2F; border-radius:50%"></div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
      </div>

      <div>
        <img src="<?= $base_url?>/assets/img/la-music-background.png" style="" />
      </div>
    </section>
  </div>

  <section id="home-solucoes" >
    <article>
      <h2 class="f35 avenirBold">Soluções que oferecemos</h2>

      <div class="">
        <p class="f16 avenirRegular-500">A LA Music é uma Startup focada na administração de direitos autorais para músicos. Cuidamos de toda burocracia que envolve o recebimento de receitas para que o artista consiga focar na carreira e VIVER DE MÚSICA!</p>
        <div style="width: 30%; background-color: #FF5656; height:3px; border-radius: 44px"></div>
      </div>
    </article>

    <article class="w-100 custom-scroll">
      <div class="cards">
        <?php if ($queryServicos->have_posts()) : ?>
          <?php while ($queryServicos->have_posts()) :
                  $queryServicos->the_post(); ?>
                  
                  <div class="card">

                    <div class="card-image">
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
                    </div>
                    
                    <div class="card-body">
                      <p class="avenirRegular-500"><?= get_the_title();?></p>
                    </div>
                    
                    <div class="card-bottom bg-dark">
                      <a href="<?= get_field('link_pagina');?>"><?= get_field('texto_chamada');?></a>
                    </div>
                  
                  </div>
          <?php endwhile; ?>
        <?php endif;?>
      </div>
    </article>
  </section>

  <section id="home-motivo" >
      <div>
        <h2 class="avenirBold">Mas por que escolher a LA Music?</h2>
        <ul>
          <li>
           <p> Você pode <strong>rescindir</strong> seu contrato <strong>quando bem entender.</strong></p>
          </li>
          <li>
            <p><strong>A menor comissão</strong> do mercado</p>
          </li>
          <li>
            <p><strong>Controle seu catálogo.</strong> Sem cessão de direitos autorais</p>
          </li>
          <li>
            <p><strong>Informações descomplicada</strong> sobre seus direitos autorias</p>
          </li>
        </ul>
        <a href="#home-contato" class="bt bg-red scrollSuave avenirRegular-600">Fale conosco</a>
      </div>

      <div>
        <div>
          <img src="/wp-content/themes/la_music/assets/img/priscilla-prezz.png" alt="Priscilla">
          <div class="separator bg-orange"></div>
        </div>
        <div>
          <div>  
            <img src="/wp-content/themes/la_music/assets/img/daniel-angele.png" alt="Daniel">
            <div class="separator bg-orange"></div>
          </div>
          <div>
            <img src="/wp-content/themes/la_music/assets/img/jan-unsplash.png" alt="Jan">
            <div class="separator bg-orange"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="home-quemsomos" class="bg-dark">
    <div>
      <div>
        <h2 class="avenirBold">Somos apaixonados por música</h2>
        <p class="f16 avenirRegular">
          Nossa missão é descomplicar a vida do artista que não pode perder tempo com as burocracias do direito autoral e do music business, mas que precisa de uma ferramenta confiável para gestão de seu catálogo, liberando tempo e energia para o que é mais importante: <span class="avenirBold"> VIVER DE MÚSICA.</span>
        </p>
        <h2 class="avenirBold">A startup que conecta o artista ao seu direito</h2>
        <a href="/quem-somos" class="bt bg-red avenirRegular-600">Quem somos</a>
      </div>
      <div>
        <img src="/wp-content/themes/la_music/assets/img/bg-quemsomos-la.png"/>
      </div>
    
    </div>
  </section>

  <section id="home-depoimento" class="bg-light">
    <article class="w-100">
        <div>
          <h2 class=" avenirBold">O que nossos clientes andam falando sobre nós</h2>
        </div>
        <div class="depoimentos custom-scroll">
          <?php if ($queryTestemunho->have_posts()) : ?>
            <?php while ($queryTestemunho->have_posts()) :
                    $queryTestemunho->the_post(); ?>

                    <div class="depoimento">
                      <div class="box">
                        <p class="avenirRegular-500"><?= get_the_content() ?></p>
                      </div>

                      <div class="info" >
                        <div class="avatar">
                          <img src="<?php the_post_thumbnail_url('circular'); ?>" alt="<?= get_the_title();?>"/>
                        </div>
                      
                        <div class="description">
                          <h2 class="avenirBold"><?= get_the_title();?></h2>
                          <p class="avenirRegular-500"><?= get_field('informacoes');?></p>
                        </div>
                      </div>
                    </div>

            <?php endwhile; ?>
          <?php endif;?>
        </div>
    </article>
  </section>

  <section id="home-clientes" class="d-flex pt-3" >
    <img id="img-mic" src="<?= $base_url?>/assets/img/img-mic.png" />

    <div id="divClientes" class="w-100 d-flex">

      <div class="py-5">
        <h2 class="text-white mb-5 text-center text-sm-left avenirBold ">Estes são alguns clientes da casa</h2>
        <a href="/clientes" class="bt bg-red desktop avenirRegular-500">Veja a lista completa de clientes</a>
      </div>

      <div class="d-flex justify-content-center clients">
        <?php if ($queryClientes->have_posts()) : ?>
          <?php while ($queryClientes->have_posts()) :
                  $queryClientes->the_post();
                  if(get_field('principais')) :?>

                    <div class="d-flex align-items-center justify-content-center">
                      <img class="img-fluid" style="border-radius:50%" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'circular')?>" alt="<?= the_title();?>" />
                    </div>

            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif;?>
      </div>

      <div class="text-center mobile col-12 my-5">
        <a href="/clientes" class="bt bg-red avenirRegular-500  mx-auto">Veja a lista completa de clientes</a>
      </div>
    
    </div>
  </section>

  <section id="home-parceiros" class="d-flex justify-content-center">
    <div class="mx-0 divParceiros  p-5 text-center" style="border-radius:4px;background-image:url('<?= $base_url?>/assets/img/bg-parceiros.png'); background-color: #F7F7F7; z-index:10;">
        <h2 class="mb-4 f30 avenirRegular-500">Nossos parceiros nessa jornada</h2>
        <div class="d-none d-sm-block carousel">
          <?php if ($queryParceiros->have_posts()) {
              while ($queryParceiros->have_posts()) {
                $queryParceiros->the_post(); ?>
                  <div class="d-flex justify-content-center">
                    <div class="d-flex align-items-center justify-content-center" style="width:115px!important; height:115px; border-radius:50%; border: 2px solid #EAB41F;">
                      <img class="img-fluid" src="<?= the_post_thumbnail_url()?>" alt="<?= get_the_title();?>" />
                    </div>
                  </div>
              <?php }
            }?>
          </div>
        <div class="d-block d-sm-none  carouselMobile">
          <?php if ($queryParceiros->have_posts()) {
              while ($queryParceiros->have_posts()) {
                $queryParceiros->the_post(); ?>
                  <div class="d-flex justify-content-center">
                    <div class="d-flex align-items-center justify-content-center" style="width:115px!important; height:115px; border-radius:50%; border: 2px solid #EAB41F;">
                      <img class="img-fluid" src="<?= the_post_thumbnail_url()?>" alt="<?= get_the_title();?>" />
                    </div>
                  </div>
              <?php }
            }?>
          </div>
        </div>
    </div>
  </section>

  <section id="home-contato" >
    <div class="px-3 pb-0 pt-5 pb-sm-5">
      <img id="home-contato-logo" class="img-fluid d-none d-sm-block m-auto  pt-5" src="/wp-content/themes/la_music/assets/img/logo-la_music.png" />
      <div class="card mt-3">
        <div class="card-header pt-5">
          <p class="card-text mb-0 f26 avenirRegular">Seja muito bem-vindo</p>
          <h3 class="f26 avenirBold">Vamos trocar uma ideia ?</h3>
        </div>
        <div class="card-body p-3">
          <?= do_shortcode( '[contact-form-7 id="15" title="contato"]' ); ?>
        </div>
      </div>
    </div>
  </section>
</main>


<script>
  let time = 7000,
      currentSliderIndex = 0,
      section = document.querySelectorAll("#slider section")
      max = section.length;

  function nexSliderM(slid){
    section[0].classList.remove("selected")
    section[1].classList.remove("selected")
    // section[2].classList.remove("selected")
    section[slid].classList.add("selected")
  }

  function nexSlider(slid){
    section[currentSliderIndex].classList.remove("selected")
    currentSliderIndex++;
    if(currentSliderIndex >= max)
      currentSliderIndex = 0;
    section[currentSliderIndex].classList.add("selected")
  }

  function start(){
    setInterval(() => {
      // nexSlider()
    }, time);
  }

  window.addEventListener ("load", start)
</script>
<?php get_footer();?>
<?php
  /* Template Name: Quem somos */

  $base_url = '/wp-content/themes/la_music';

  get_header(); 

  $args = array(
    'post_type' => 'equipe',
    'orderby' => 'menu_order',
    'order' => 'ASC',
  );
  $queryEquipe = new WP_Query($args);

  $get_fields = get_post_custom();
  $fields = get_fields();
?>

<main id="quem-somos">
  <section id="quemSomos-topo">
    <div class="mt-5 w-100">
      <div class="text-white">
        <h1 class="avenirRegular-600 f30">Afinal, quem somos?</h1>

        <div>
          <img src="<?= $base_url?>/assets/img/img-quemsomos.png"/>
        </div>

        <p class="avenirRegular-500">Como você, somos apaixonados por música. </p>
        
        <p>A ideia de criar uma ferramenta tecnológica para descomplicar a vida do artista 
          surgiu da própria dificuldade do fundador, que se autodenomina como músico frustrado,
           em entender e desvendar a complexa cadeia de arrecadação e distribuição da receita de 
           direitos autorais no music business. </p>

        <p>Ao constatar que no Brasil, por ano, mais de 200 milhões simplesmente não chegam ao 
          músico pela complexidade do sistema, tornou-se uma obsessão para nosso time formado por 
          especialistas em direito autoral ajudar o músico nesta empreitada.</p>
        
        <p>Assim, nossa missão é descomplicar a vida do artista que não pode perder tempo com 
          as burocracias do direito autoral e do music business, mas que precisa de uma ferramenta 
          confiável para gestão de seu catálogo, liberando tempo e energia para o que é mais 
          importante: VIVER DE MÚSICA!</p>
      </div>

      <div>
        <img src="<?= $base_url?>/assets/img/img-quemsomos.png"/>
      </div>
    </div>
  </section>

  <section id="quemSomos-equipe">
    <h1 class="text-center avenirBold my-5">Somos apaixonados por música</h1>
   
    <?php if ($queryEquipe->have_posts()): ?>
      <?php while ($queryEquipe->have_posts()):
              $queryEquipe->the_post();?>

              <div>
                <div class="foto">
                  <img src="<?php the_post_thumbnail_url(); ?>"/>
                </div>

                <div class="info-equipe">
                  <h3 class="avenirRegular-600"><?= get_the_title();?></h3>
                  <h4 class="avenirRegular-500 "><?= get_field('cargo')?></h4>
                  <?= the_content();?>
                </div>

                <div class="sociais">
                  <a href="<?= get_field('linkedin'); ?>" target="_blank">
                    <img src="<?= $base_url?>/assets/img/linkedin.png" alt="linkedin" />
                  </a>
                  <a href="<?= get_field('facebook'); ?>" target="_blank">
                    <img src="<?= $base_url?>/assets/img/facebook.png" alt="facebook" />
                  </a>
                  <a href="<?= get_field('instagram'); ?>" target="_blank">
                    <img src="<?= $base_url?>/assets/img/instagram.png" alt="instagram" />
                  </a>
                  <a href="mailto: <?= get_field('e-mail'); ?>" target="_blank">
                    <img title="<?= get_field('e-mail'); ?>" src="<?= $base_url?>/assets/img/email.png" alt="email" />
                  </a>
                </div>
              </div>
      <?php endwhile;?>
    <?php endif; ?>
  </section>

  <section class="mt-5 p-5 text-center text-white" style="background-color: #000;">
    <div class="row">
      <div class="d-none d-sm-flex col-2"></div>
      
      <div class="col-12 col-sm-8">
        <h2 class="avenirBold mb-5 f33">Somos apaixonados por música</h2>
        
        <p class="avenirRegular f16">Nossa missão é descomplicar a vida do artista que não pode perder tempo com as burocracias do direito autoral e do music business, mas que precisa de uma ferramenta confiável para gestão de seu catálogo, liberando tempo e energia para o que é mais importante:<span class="avenirBold"> VIVER DE MÚSICA.</span></p>

        <h2 class="avenirBold mt-5 f26">A startup que conecta o artista ao seu direito</h2>
      </div>
      
      <div class="d-none d-sm-flex col-2"></div>
    </div>
  </section>

  <section id="home-contato" >
    <div class="d-flex justify-content-center align-items-center flex-column px-3 pb-0 pt-5 pb-sm-5" style="background-image: url('<?= $base_url?>/assets/img/18.png'); background-repeat:no-repeat; background-size: cover">
      <img id="home-contato-logo" class="img-fluid d-none d-sm-block m-auto  pt-5" src="<?= $base_url?>/assets/img/logo-la_music.png" />
      <div class="card mt-3">
        <div class="card-header pt-5" style="border-bottom: none; background-color: #fff">
          <p class="card-text text-center mb-0 f26 avenirRegular">Seja muito bem-vindo</p>
          <h3 class="f26 avenirBold">Vamos trocar uma ideia ?</h3>
        </div>
        <div class="card-body p-3" style="position:relative; background-color: #fff">
          <?= do_shortcode( '[contact-form-7 id="15" title="contato"]' ); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer();?>
<?php
/*
Template Name: Quem somos
 */
$base_url = esc_url(get_template_directory_uri());
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

<section id="quemSomos-topo" class="d-none d-sm-flex pl-5 " style="background-color: #000; padding-top:140px">
  <div class="row mt-5 w-100">
    <div class="col-6 text-white mt-5">
      <h1 class="avenirRegular-600 f30">Afinal, quem somos?</h1>
      <p  class="avenirRegular-500 f16">Como você, somos apaixonados por música.
      <br>
      <br>
      A ideia de criar uma ferramenta tecnológica para descomplicar a vida do artista surgiu da própria dificuldade do fundador, que se autodenomina como músico frustrado, em entender e desvendar a complexa cadeia de arrecadação e distribuição da receita de direitos autorais no music business.
      <br>
      <br>
      Ao constatar que no Brasil, por ano, mais de 200 milhões simplesmente não chegam ao músico pela complexidade do sistema, tornou-se uma obsessão para nosso time formado por especialistas em direito autoral ajudar o músico nesta empreitada.
      <br>
      <br>
      Assim, nossa missão é descomplicar a vida do artista que não pode perder tempo com as burocracias do direito autoral e do music business, mas que precisa de uma ferramenta confiável para gestão de seu catálogo, liberando tempo e energia para o que é mais importante: VIVER DE MÚSICA!</p>
    </div>
    <div class="col-6" style="margin-bottom:-2%">
      <img class="img-fluid d-block ml-auto" src="<?= $base_url?>/assets/img/img-quemsomos.png" style="max-height:538px; max-width:587px" />
    </div>
  </div>
</section>
<section id="quemSomos-topo" class="d-flex d-sm-none pl-5 pt-5" style="background-color: #000">
  <div class="row mt-5 w-100">
    <div class="col-12">
      <h1 class="mb-3 avenirRegular-600 text-white f30">Afinal, quem somos?</h1>
    </div>
    <div class="col-12" style="margin-bottom:-2%">
      <img class="img-fluid d-block ml-auto" src="<?= $base_url?>/assets/img/img-quemsomos.png" />
    </div>
    <div class="col-12 text-white mt-5">
      <p  class="avenirRegular-500 f18">Como você, somos apaixonados por música.
      <br>
      <br>
      A ideia de criar uma ferramenta tecnológica para descomplicar a vida do artista surgiu da própria dificuldade do fundador, que se autodenomina como músico frustrado, em entender e desvendar a complexa cadeia de arrecadação e distribuição da receita de direitos autorais no music business.
      <br>
      <br>
      Ao constatar que no Brasil, por ano, mais de 200 milhões simplesmente não chegam ao músico pela complexidade do sistema, tornou-se uma obsessão para nosso time formado por especialistas em direito autoral ajudar o músico nesta empreitada.
      <br>
      <br>
      Assim, nossa missão é descomplicar a vida do artista que não pode perder tempo com as burocracias do direito autoral e do music business, mas que precisa de uma ferramenta confiável para gestão de seu catálogo, liberando tempo e energia para o que é mais importante: VIVER DE MÚSICA!</p>
    </div>
    
  </div>
</section>
<section id="quemSomos-equipe" class="px-3 px-sm-5 pt-3 pt-sm-5" >
  <h1 class="d-none d-sm-flex text-center avenirBold my-5 f45">Somos apaixonados por música</h1>
  <h1 class="d-flex d-sm-none text-center avenirBold my-5 px-3 f35">Somos apaixonados por música</h1>
  <?php if ($queryEquipe->have_posts()) {
            while ($queryEquipe->have_posts()) {
              $queryEquipe->the_post();?>
              <div class="d-none d-sm-flex ">
                <div style="min-width:298px;min-height:278px">
                  <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" style="max-width:250px;max-height:230px"/>
                </div>
                <div class="infoEquipe" style="width:42%;">
                  <h3 class="avenirRegular-600 f25"><?= get_the_title();?></h3>
                  <h4 class="avenirRegular-500 f15"><?= get_field('cargo')?></h4>
                  <?= the_content();?>
                </div>
                <div class="d-flex flex-column align-items-center ml-5">
                <?php /* if(get_field('linkedin') !==  ''){ */?>
                  <a href="<?= get_field('linkedin'); ?>" target="_blank">
                    <img src="<?= $base_url?>/assets/img/linkedin.png" alt="linkedin" class="img-fluid mt-3" />
                  </a>
                <?php/* }*/?>
                <?php /*if(get_field('facebook') !==  ''){ */?>
                  <a href="<?= get_field('facebook'); ?>" target="_blank">
                    <img src="<?= $base_url?>/assets/img/facebook.png" alt="facebook" class="img-fluid mt-3" />
                  </a>
                  <a href="<?= get_field('instagram'); ?>" target="_blank">
                    <img src="<?= $base_url?>/assets/img/instagram.png" alt="instagram" class="img-fluid mt-3" />
                  </a>
                <?php/* }*/?>
                <?php/* if(get_field('email') !==  ''){ */?>
                  <a href="mailto: <?= get_field('e-mail'); ?>" target="_blank">
                    <img title="<?= get_field('e-mail'); ?>" src="<?= $base_url?>/assets/img/email.png" alt="email" class="img-fluid mt-3" />
                  </a>
                <?php/* }*/?>
                </div>
              </div>
              <div class="d-flex d-sm-none row mb-5 px-3 w-100 mx-0 px-5">
                <div class="col-12 mb-4 px-0">
                  <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid d-block"/>
                </div>
                <div class="infoEquipe col-12 px-0">
                  <h3 class="avenirRegular-600 f25"><?= get_the_title();?></h3>
                  <h4 class="avenirRegular-500 my-3 f15"><?= get_field('cargo')?></h4>
                  <?= the_content();?>
                  <div class="d-flex align-items-center justify-content-between px-0">
                  <?php /* if(get_field('linkedin') !==  ''){ */?>
                    <a href="<?= get_field('linkedin'); ?>" target="_blank">
                      <img src="<?= $base_url?>/assets/img/linkedin.png" alt="linkedin" class="img-fluid" />
                    </a>
                  <?php/* }*/?>
                  <?php /*if(get_field('facebook') !==  ''){ */?>
                    <a href="<?= get_field('facebook'); ?>" target="_blank">
                      <img src="<?= $base_url?>/assets/img/facebook.png" alt="facebook" class="img-fluid" />
                    </a>
                    <a href="<?= get_field('instagram'); ?>" target="_blank">
                      <img src="<?= $base_url?>/assets/img/instagram.png" alt="instagram" class="img-fluid" />
                    </a>
                  <?php/* }*/?>
                  <?php/* if(get_field('email') !==  ''){ */?>
                    <a href="mailto: <?= get_field('e-mail'); ?>" target="_blank">
                      <img title="<?= get_field('e-mail'); ?>" src="<?= $base_url?>/assets/img/email.png" alt="email" class="img-fluid" />
                    </a>
                  <?php/* }*/?>
                  </div>
                </div>
              </div>
            <?php }}?>
</section>
<section class="mt-5 p-5 text-center text-white" style="background-color: #000;">
  <div class="row">
    <div class="d-none d-sm-flex col-2"></div>
    <div class="col-12 col-sm-8">
      <h2 class="avenirBold mb-5 f33">Somos apaixonados por música</h2>
      <p class="avenirRegular f16">Nossa missão é descomplicar a vida do artista que não pode perder tempo com as burocracias do direito autoral e do music business, mas que precisa de uma ferramenta confiável para gestão de seu catálogo, liberando tempo e energia para o que é mais importante:<span class="avenirBold"> VIVER DE MÚSICA.</span>
      </p>
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

<?php get_footer();?>
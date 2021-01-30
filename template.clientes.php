<?php
  /* Template Name: Clientes */
  $base_url = '/wp-content/themes/la_music/';
  get_header(); 

  $args = array(
    'post_type' => 'clientes',
    'orderby' => 'menu_order',
    'order' => 'ASC',
  );
  $queryClientes = new WP_Query($args);

  $get_fields = get_post_custom();
  $fields = get_fields();
?>
<main id="clientes">
  <section id="home-clientes" class="d-flex">
    <img id="img-mic" src="<?= $base_url?>/assets/img/img-mic.png" />

    <div id="divClientes" class="w-100 d-flex">
      <div class="py-5">
        <h2 class="text-white text-center avenirBold ">Estes são alguns clientes da casa</h2>
        <a href="/clientes" class="bt bg-red desktop avenirRegular-500">Veja a lista completa de clientes</a>
      </div>
      
      <div class="justify-content-center clients">
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

      <div class="text-center button-2 mobile col-12 my-5">
        <a href="/clientes" class="bt bg-red avenirRegular-500  mx-auto">Veja a lista completa de clientes</a>
      </div>
    </div>
    <img id="flechas" class="img-fluid" src="<?= $base_url?>/assets/img/flexa-client.png" />
  </section>

  <section id="clientes-clientes" class="p-5">
    <div class="row w-100 justify-content-center">
      <ul>
        <?php if ($queryClientes->have_posts()) : ?>
            <?php  while ($queryClientes->have_posts()) :
                  $queryClientes->the_post();?>

                  <li class="mb-0 mt-3 avenirBold"><?= the_title();?></li>

            <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </section>

  <section id="home-contato" >
    <div class="px-3 pb-0 pt-5 pb-sm-5">
      <img id="home-contato-logo" class="img-fluid d-none d-sm-block m-auto  pt-5" src="<?= $base_url?>/assets/img/logo-la_music.png" />
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

<?= get_footer();?>
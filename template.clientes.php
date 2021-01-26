<?php
/*
Template Name: Clientes
 */
$base_url = esc_url(get_template_directory_uri());
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
<section class="d-none d-sm-flex p-5 flex-column align-items-center" id="home-clientes" style="background-color: #000A13; position: relative; z-index:-1; margin-bottom:-1px;">
  <img id="img-mic" class="img-fluid mt-5 pt-5" src="<?= $base_url?>/assets/img/img-mic.png" style="position: absolute; top: 0; left:0; z-index:-1" />
  <div id="divClientes" class="row mt-5 pt-5">
    <div class="col-4 py-5">
      <h2 class="text-white avenirBold mb-5 f30">Estes são alguns clientes da casa</h2>
      <a href="#" class="btn f14" style="width:280px; background-color: #FF2A2A; color: #F7F7F7; border-radius:0;">Quero fazer parte!</a>
    </div>
    <div class="col-8 row">
        <?php 
          if ($queryClientes->have_posts()) {
            while ($queryClientes->have_posts()) {
              $queryClientes->the_post();
              if(get_field('principais')){?>
                <div class="col-4 d-flex align-items-center justify-content-center">
                  <img class="img-fluid" style="border-radius:50%" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'circular')?>" alt="<?= the_title();?>" />
                </div>
        <?php 
              }
            }
          }?>
    </div>
  </div>
  <img class="img-fluid" src="<?= $base_url?>/assets/img/flexa-client.png" style="position:absolute; bottom: 0" />
</section>
<section class="d-flex d-sm-none p-5 flex-column align-items-center" id="home-clientes" style="background-color: #000A13; position: relative; z-index:-1; margin-bottom:-1px;">
  <div id="divClientes" class="row mt-5 pt-5">
    <div class="col-12 py-5">
      <h2 class="text-white text-center avenirBold mb-5 f30">Estes são alguns clientes da casa</h2>
      <a href="#" class="btn f14 d-flex mx-auto align-items-center justify-content-center" style="width:255px; height:38px; background-color: #FF2A2A; color: #F7F7F7; border-radius:0;">Quero fazer parte!</a>
    </div>
  </div>
  <img class="d-none d-sm-flex img-fluid" src="<?= $base_url?>/assets/img/flexa-client.png" style="position:absolute; bottom: 0" />
  <img class="d-flex d-sm-none img-fluid" src="<?= $base_url?>/assets/img/flexa-client.png" style="position:absolute; bottom: 0; width:15%;" />
</section>

<section id="clientes-clientes" class="d-none d-sm-flex p-5" style="background-color: #000A13;">
  <div class="row w-100 justify-content-center">
    <?php if ($queryClientes->have_posts()) :
            echo '<ul class="text-center" style="list-style:none">';
            while ($queryClientes->have_posts()) :
              $queryClientes->the_post();?>
                <li class="mb-0 mt-3 avenirBold text-white f35"><?= the_title();?></li>
    <?php   endwhile;
            echo '</ul>';
          endif;?>
  </div>
</section>
<section id="clientes-clientes" class="d-flex d-sm-none p-5" style="background-color: #000A13;">
  <div class="row w-100 justify-content-center">
    <?php if ($queryClientes->have_posts()) :
            echo '<ul class="text-center" style="list-style:none">';
            while ($queryClientes->have_posts()) :
              $queryClientes->the_post();?>
                <li class="mb-0 mt-3 avenirBold text-white f25"><?= the_title();?></li>
    <?php   endwhile;
            echo '</ul>';
          endif;?>
  </div>
</section>

<section id="home-contato" class="d-none d-sm-inline" >
  <div class="d-flex justify-content-center align-items-center flex-column pb-5" style="background-image: url('<?= $base_url?>/assets/img/18.png'); background-repeat:no-repeat; background-size: cover">
    <img id="home-contato-logo" class="img-fluid d-block m-auto  pt-5" src="<?= $base_url?>/assets/img/logo-la_music.png" />
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
<script>
  $(document).ready(function(){
    let heightMic = $('#img-mic').height();
    let widthMic  = ($('#img-mic').width() - 95);
    
    $('#home-clientes').height(heightMic+'px');
    $('#divClientes').attr("style", "max-width:"+ widthMic+"%")

    let heigthParceiros = ($('#home-parceiros').height() / 2) + 10;

    $('#home-parceiros').attr("style", "margin-top: -"+heigthParceiros+'px')
    $('#home-contato').attr("style", "margin-top: -"+heigthParceiros+'px')
    $('#home-contato-logo').attr("style", "margin-top: "+heigthParceiros+'px !important')
  })
</script>
<?= get_footer();?>
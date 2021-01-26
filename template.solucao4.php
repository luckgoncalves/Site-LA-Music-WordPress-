<?php
/*
Template Name: Solucoes4
 */
$base_url = esc_url(get_template_directory_uri());
get_header(); 

$get_fields = get_post_custom();
$fields = get_fields();
?>

<section class="d-flex px-5 pt-5 p-sm-5 flex-column align-items-center" id="home-clientes" style="background-image: url('<?= the_post_thumbnail_url()?>'); background-color:#000; position: relative;">
  <div class="row w-100 mt-sm-5 pt-sm-5 align-items-center">
    <div class="col-3 d-none d-sm-block"></div>
    <div class="col-12 col-sm-6 py-5 text-center d-flex flex-column align-items-center justify-content-center">
      <h1 style="line-height:36px;" class="mb-3 f30 text-white avenirRegular-600">Contratos Artísticos e Consultoria Jurídica</h1>
      <p style="line-height: 19px" class="f16 text-white avenirRegular-500">Com especialistas em Music Business e Direito Autoral e em parceria com a LPBK Advogados Associados, a LA Music poderá te auxiliar na elaboração, revisão, negociação e gestão de contratos artísticos, bem como na solução de conflitos.</p>
      <a href="#home-contato" style="background-color:#FF2A2A; color: #fff; border-radius:0;height:48px;width:265px" class="f14 scrollSuave btn mt-5 avenirRegular-600 d-flex align-items-center justify-content-center">Entre em contato</a>
    </div>
    <div class="col-3 d-none d-sm-block"></div>
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
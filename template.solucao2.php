<?php
/*
Template Name: Solucoes2
 */
$base_url = esc_url(get_template_directory_uri());
get_header(); 

$get_fields = get_post_custom();
$fields = get_fields();
?>

<section class="d-flex py-5 p-sm-5 flex-column align-items-center" id="home-clientes" style="background: linear-gradient(90deg, #000000 21.6%, rgba(0, 0, 0, 0) 100%);background-image: url('<?= the_post_thumbnail_url()?>');  position: relative;">
  <div class="row w-100 mt-5 pt-5 align-items-center">
    <div class="col-12 col-sm-5 d-flex flex-column flex-sm-row d-sm-block align-items-center">
      <h2 class="avenirRegular-600 text-center text-sm-left f22 mb-4 mb-sm-0" style="color: #FF2A2A;">Administração Autoral</h2>
      <h1 class="f35 text-center text-sm-left text-white avenirRegular-600">Você só recebe Direitos Autorais com suas músicas cadastradas no ECAD.</h1>
      <a href="#home-contato" style="background-color:#FF2A2A; color: #fff; border-radius:0;height:48px;width:265px; white-space:normal" class="f14 p-4 btn mt-5 avenirRegular-600 d-flex align-items-center justify-content-center"> Solicite a análise de seu repertório GRÁTIS!</a>
    </div>
    <div class="col-7 d-none d-sm-block">
      <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/la-solucao2.png"/>
    </div>
  </div>
</section>
<section id="solucoes-info" style="background-color: #000; position:relative; z-index:-10">
<img src="<?= $base_url?>/assets/img/bg-degrade92.png" style="position:absolute; top:0; width:100%; z-index:9999" />
  <div class="row w-100 py-5 pb-sm-0 pt-sm-3 pl-sm-5 align-items-center ml-0">
    <div class="col-12 col-sm-5">
      <p class="avenirRegular-600 text-center text-sm-left text-white f28" style="line-height:34px">Para que você receba direitos autorais de suas músicas é preciso cadastrar suas composições no ECAD - órgão responsável pela arrecadação e distribuição de direitos autorais no Brasil.</p>
    </div>
    <div class="col-7 d-none d-sm-block pr-0">
      <img src="<?= $base_url?>/assets/img/capa-violao.png" class="img-fluid"/>
    </div>
  </div>
</section>

<section class="mx-sm-5" style="margin-top: -2%;margin-bottom:-3%; z-index:9998; position:relative">
  <div class="d-flex flex-column align-items-center justify-content-center py-5 px-3 p-sm-5" style="background-color:#fff;box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
    <h5 style="color: #000;" class="avenirRegular-600 text-center text-sm-left f40">Oferecemos as seguintes soluções!</h5>
    <div class="row w-100 mt-5">
      <div class="col-12 col-sm-3 ">
        <div style="min-height:120px;" class="d-flex align-items-center">
          <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/clipboard.png" />
        </div>
        <p style="color: #000408" class="f16 avenirRegular-500 text-center">Registro de suas músicas no ECAD.  Descomplicado e online.</p>
      </div>
      <div class="col-12 col-sm-3">
        <div style="min-height:120px;" class="d-flex align-items-center">
          <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/filiacao.png" />
        </div>
        <p style="color: #000408" class=" f16 avenirRegular-500 text-center">Filiação GRATUITA do titular nas Associações de Gestão Coletiva (ECAD).</p>
      </div>
      <div class="col-12 col-sm-3">
        <div style="min-height:120px;" class="d-flex align-items-center">
          <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/tax.png" />
        </div>
        <p style="color: #000408" class=" f16 avenirRegular-500 text-center"> Liberação de créditos retidos com a menor taxa de administração do mercado.</p>
      </div>
      <div class="col-12 col-sm-3">
        <div style="min-height:120px;" class="d-flex align-items-center">
          <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/support.png" />
        </div>
        <p style="color: #000408" class="f16 avenirRegular-500 text-center"> Suporte jurídico para proteção das músicas cadastradas.</p>
      </div>
    </div>
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
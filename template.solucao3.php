<?php
/*
Template Name: Solucoes3
 */
$base_url = esc_url(get_template_directory_uri());
get_header(); 

$get_fields = get_post_custom();
$fields = get_fields();
?>

<section id="solucoes3-home" class="px-5 py-5 pb-sm-0" style="background-image:url('<?= the_post_thumbnail_url()?>'); background-repeat:no-repeat;background-size: cover; background-position-y:center;padding-top: 140px !important;">
  <div class="row mt-5 align-items-center ">
    <div class="col-lg-4 col-xl-4 col-md-5 d-flex d-sm-block flex-column flex-sm-row justify-content-center align-items-center">
      <h2 class="text-white text-center text-sm-left avenirRegular-600">Registro de Marcas artísticas</h2>
      <p class="text-white text-center text-sm-left avenirRegular-500 f16" style="line-height:19px">Temos o primeiro serviço de registro de marcas pensado exclusivamente para músicos.</p>
      <a href="<?= get_field('link_pesquisar_viabilidade');?>" class="btn f14 avenirRegular-600" style="width: 200px; background-color: #ff2a2a; color: #fff; border-radius:0px">Pesquisar viabilidade</a>
    </div>
    <div class="col-xl-2 d-lg-none"></div>
    <div class="col-lg-7 d-none d-sm-block col-xl-8">
      <img class="img-fluid" src="<?= $base_url?>/assets/img/la-solucoes3.png" style="margin-bottom:-20px" />
    </div>
  </div>
</section>
<section id="solucoes-info" style="position:relative; z-index:-10; background-color:#F4F4F4;">
  <div class="row w-100 mx-0 py-5 px-0 p-sm-5 align-items-center">
    <div class="col-2 d-none d-sm-block"></div>
    <div class="col-12 col-sm-8 text-center">
      <h2 style="letter-spacing: 0.365em;" class="text-uppercase avenirBold py-3 f26">Como funciona ?</h2>
      <p class="avenirRegular f22" style="line-height:26px">O registro do nome artístico ou da banda como marca dá o direito de utilizar o nome com exclusividade e impede que outros músicos ganhem dinheiro em cima do seu trabalho sem autorização.
    <br/>
    <br/>
    Se isso ocorrer, você terá direito a pedir uma indenização.</p>
    </div>
    <div class="col-2 d-none d-sm-block">
    </div>
  </div>
</section>
<section id="solucoes-info"style="background-color: #000; position:relative;">
  <div class="row w-100 pl-sm-5 align-items-center ml-0">
    <div class="d-flex d-sm-block flex-column flex-sm-row justify-content-center align-items-center py-5 py-sm-0 pl-sm-5 col-12 col-sm-5">
      <h2 style="line-height:31px" class="text-white text-center text-sm-left avenirRegular-600 mb-3 f26">São as menores taxas do mercado para tornar esta proteção acessível ao músico em qualquer estágio de carreira. </h2>
      <p class="avenirRegular-600 f14 text-center text-sm-left text-white">Contrate nosso serviço e garanta a proteção à sua marca.</p>
      <a href="<?= get_field('link_garantir_protecao');?>" style="background-color:#FF2A2A; color: #fff; border-radius:0;height:48px;width:265px" class="f14 mt-3 btn avenirRegular-600 d-flex align-items-center justify-content-center">Garantir proteção</a>
    </div>
    <div class="col-7 d-none d-sm-block pr-0">
      <img src="<?= $base_url?>/assets/img/bg-solucoes3.png" class="img-fluid d-block ml-auto" />
    </div>
  </div>
</section>

<section class="px-0 px-sm-5 bg-white" style="position:relative">
  <div class="d-flex flex-column align-items-center justify-content-center p-5">
    <div class="d-flex flex-column align-items-center">
      <h5 style="color: #040404;" class="avenirRegular-600 text-center text-sm-left f23 text-uppercase">Como funciona o processo</h5>
      <div style="background-color:#FF2A2A; border-radius:4px; height:3px; width:30%;"></div>
    </div>
    <div class="row w-100 mt-5">
      <div class="col-12 col-sm-3 d-flex flex-column align-items-center justify-content-center ">
        <div class="d-flex align-items-center" style="height:140px; width:100px">
          <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/pesquisa.png" />
        </div>
        <p style=" color: #000408" class="avenirRegular-600 f16 text-center">Pesquisa de viabilidade</p>
      </div>
      <div class="col-12 col-sm-3 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex align-items-center" style="height:140px; width:100px">
          <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/tel-registro.png" />
        </div>
        <p style=" color: #000408" class="avenirRegular-600 f16 text-center">Solicitação de registro ao INPI</p>
      </div>
      <div class="col-12 col-sm-3 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex align-items-center" style="height:140px; width:100px">
          <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/acompanhamento.png" />
        </div>
        <p style=" color: #000408" class="avenirRegular-600 f16 text-center">Acompanhamento do processo</p>
      </div>
      <div class="col-12 col-sm-3 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex align-items-center" style="height:140px; width:100px">
          <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/calendar.png" />
        </div>
        <p style=" color: #000408" class="avenirRegular-600 f16 text-center">Recurso administrativo</p>
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
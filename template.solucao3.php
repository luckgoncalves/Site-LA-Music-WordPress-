<?php
/*
Template Name: Solucoes3
 */
$base_url = esc_url(get_template_directory_uri());
get_header(); 

$get_fields = get_post_custom();
$fields = get_fields();
?>
<main id="registro-marcas">
  <section id="solucoes3-home">
    <div class=" ">
        <h2 class="avenirRegular-600">Registro de Marcas artísticas</h2>
        <p class="avenirRegular-500" style="line-height:19px">Temos o primeiro serviço de registro de marcas pensado exclusivamente para músicos.</p>
        <a href="<?= get_field('link_pesquisar_viabilidade');?>" class="bt bg-red f14 avenirRegular-600">Pesquisar viabilidade</a>
      
      <!-- <div class="col-lg-7 d-none d-sm-block col-xl-8">
        <img class="img-fluid" src="<?= $base_url?>/assets/img/la-solucoes3.png" style="margin-bottom:-20px" />
      </div> -->
    </div>
  </section>

  <section id="funcionamento" style="position:relative;">
    <div>
      <h2 class="avenirBold">Como funciona ?</h2>
      <p class="avenirRegular">O registro do nome artístico ou da banda como marca dá o direito de utilizar o nome com exclusividade e impede que outros músicos ganhem dinheiro em cima do seu trabalho sem autorização.</p>
      <p class="avenirRegular"> Se isso ocorrer, você terá direito a pedir uma indenização. </p>
    </div>
  </section>

  <section style="background-color: #000; position:relative;">
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
<?php get_footer();?>
<?php
  /* Template Name: Solucoes */
  $base_url = esc_url(get_template_directory_uri());
  get_header(); 

  $get_fields = get_post_custom();
  $fields = get_fields();
?>

<main id="creditos-retidos">

  <section id="section1" class="d-flex p-5 flex-column align-items-center justify-content-center relative"  style="background-image: url('<?= the_post_thumbnail_url()?>');background-position-x:center;background-size:cover;background-repeat:no-repeat; ">
    <div class="row w-100 mt-5 py-5 align-items-center">
      <div class="col-12 col-sm-4">
        <h1 class="text-white text-center text-sm-left avenirRegular-600 f30">Resgate de Créditos Retidos</h1>
        <p class="text-white text-center text-sm-left avenirRegular-500 f16" style="line-height: 19px">Créditos retidos são valores que o ECAD arrecada e  não distribui por inconsistências de cadastro.
  Se você é compositor, pode ter créditos retidos para receber.</p>
        <a href="<?= get_field('link_consulte_gratis');?>" target="_blank" style="background-color:#FF2A2A; border-radius:0;height:48px;width:265px" class="btn mt-4 text-white avenirRegular-600 f14 d-flex align-items-center justify-content-center">Consulte grátis</a>
      </div>
      <div class="col-8 d-none d-sm-block">
        <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/la-porco.png"/>
      </div>
    </div>
  </section>

  <section id="section2" class="relative bg-black d-flex align-items-center" style="background-image:url('<?= $base_url?>/assets/img/bg-solucoes-info.png');background-size:cover; background-repeat: no-repeat; background-postion-x:230px">
    <img src="<?= $base_url?>/assets/img/bg-degrade.png" style="position:absolute; top:0; width:100%; z-index:9999" />
    <div class="mx-auto row w-100 p-5 align-items-center">
      <div class="col-xl-5 col-lg-6">
        <h2 class="text-white text-center text-sm-left avenirBold mb-3 f30">O ECAD arrecadou 1,1 bilhão em direitos autorais em 2018, destes 249 milhões ficaram retidos.</h2>
        <p class="avenirRegular-600 text-white f18 text-center text-sm-left" style="line-height:22px">Preencha o formulário. Em 48 horas você receberá um e-mail com o relatório personalizado sobre sua situação perante o ECAD.</p>
        <h3 class="avenirBold text-white mt-4 f18 text-center text-sm-left">Você pode ter dinheiro para receber e não sabe!</h3>
        <a href="<?= get_field('link_consulte_gratis');?>" target="_blank" style="background-color:#FF2A2A; border-radius:0;height:48px;width:265px" class="btn mt-4 text-white avenirRegular-600 f14 d-flex align-items-center justify-content-center">Resgatar créditos retidos</a>
      </div>
      <!-- <div class="col-6" st>
        <img src="<?= $base_url?>/assets/img/bg-solucoes-info.png" class="img-fluid absolute" style="margin-top:-5%"/>
        </div> -->
    </div>
  </section>

  <section id="section3" class="mx-0 mx-sm-5" style="margin-top: -3%;margin-bottom:-3%; z-index:9998; position:relative">
    <div class="d-flex flex-column align-items-center justify-content-center p-5" style="background-color:#fff;box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
      <h5 style="color: #7E7E7E;" class="avenirRegular-600 mb-5 mb-sm-0 f20">Mas por que escolher a LA Music?</h5>
      <p style="color: #000; line-height:36px;" class="text-center text-sm-left avenirRegular-600 f35">Tem diversas coisas que nos diferenciam!</p>
      <div class="row w-100 mt-3">
        <div class="col-12 col-sm-3 ">
          <div class="d-flex align-items-center" style="min-height:122px">
            <img class="img-fluid d-block m-auto mb-3" src="<?= $base_url?>/assets/img/clipboard.png" />
          </div>
          <p style="color: #000408" class="f16 avenirRegular-500 text-center">Você pode rescindir seu contrato quando bem entender.</p>
        </div>
        <div class="col-12 col-sm-3">
          <div class="d-flex align-items-center" style="min-height:122px">
            <img class="img-fluid d-block m-auto mb-3" src="<?= $base_url?>/assets/img/money.png" />
          </div>
          <p style="color: #000408" class="f16 avenirRegular-500 text-center">A menor comissão do mercado.</p>
        </div>
        <div class="col-12 col-sm-3">
          <div class="d-flex align-items-center" style="min-height:122px">
            <img class="img-fluid d-block m-auto mb-3" src="<?= $base_url?>/assets/img/cassete.png" />
          </div>  
          <p style="color: #000408" class="f16 avenirRegular-500 text-center">Controle seu catálogo. Sem cessão de direitos autorais.</p>
        </div>
        <div class="col-12 col-sm-3">
          <div class="d-flex align-items-center" style="min-height:122px">
            <img class="img-fluid d-block m-auto mb-3" src="<?= $base_url?>/assets/img/contract.png" />
          </div>
          <p style="color: #000408" class="f16 avenirRegular-500 text-center">Informação descomplicada sobre seus direitos autorais.</p>
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

</main>

<?php get_footer();?>
<?php
  /* Template Name: Solucoes */
  
  $base_url = '/wp-content/themes/la_music/';
  get_header(); 

  $get_fields = get_post_custom();
  $fields = get_fields();
?>

<main id="creditos-retidos">

  <section id="section1" style="background-image: url('<?= the_post_thumbnail_url()?>'); ">
      <div>
        <h1 class="avenirRegular-600">Resgate de Créditos Retidos</h1>
        <p class="avenirRegular-500">
        Créditos retidos são valores que o ECAD arrecada e  não distribui por inconsistências de cadastro.
        Se você é compositor, pode ter créditos retidos para receber.</p>
        <a href="<?= get_field('link_consulte_gratis');?>" target="_blank"class="bt bg-red">Consulte grátis</a>
      </div>
      <div>
        <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/la-porco.png"/>
      </div>
  </section>

  <section id="section2">
    <div>
      <h2 class="avenirBold mb-3">O ECAD arrecadou 1,1 bilhão em direitos autorais em 2018, destes 249 milhões ficaram retidos.</h2>
      <p class="avenirRegular-600">Preencha o formulário. Em 48 horas você receberá um e-mail com o relatório personalizado sobre sua situação perante o ECAD.</p>
      <h3 class="avenirBold">Você pode ter dinheiro para receber e não sabe!</h3>
      <a href="<?= get_field('link_consulte_gratis');?>" target="_blank" class="bt bg-red avenirRegular-600">Resgatar créditos retidos</a>
    </div>
    <img src="<?= $base_url?>/assets/img/bg-degrade.png" />
  </section>

  <section id="section3">
    <div class="px-3">
      <h5 class="avenirRegular-600">Mas por que escolher a LA Music?</h5>
      <p class="avenirRegular-600">Tem diversas coisas que nos diferenciam!</p>
     
      <div id="motivos">
        <div class="motivo ">
          <div>
            <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/clipboard.png" />
          </div>
          <p class="avenirRegular-500">Você pode rescindir seu contrato quando bem entender.</p>
        </div>

        <div class="motivo">
          <div>
            <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/money.png" />
          </div>
          <p class="avenirRegular-500">A menor comissão do mercado.</p>
        </div>

        <div class="motivo">
          <div>
            <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/cassete.png" />
          </div>  
          <p class="avenirRegular-500">Controle seu catálogo. Sem cessão de direitos autorais.</p>
        </div>

        <div class="motivo">
          <div>
            <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/contract.png" />
          </div>
          <p class="avenirRegular-500">Informação descomplicada sobre seus direitos autorais.</p>
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
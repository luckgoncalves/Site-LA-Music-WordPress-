<?php
 /* Template Name: Solucoes3 */
  $base_url = '/wp-content/themes/la_music/';
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
    </div>
      
    <div>
      <img class="img-fluid" src="<?= $base_url?>/assets/img/la-solucoes3.png" style="margin-bottom:-20px" />
    </div>
  </section>

  <section id="funcionamento">
    <div>
      <h2 class="avenirBold">Como funciona ?</h2>
      <p class="avenirRegular">O registro do nome artístico ou da banda como marca dá o direito de utilizar o nome com exclusividade e impede que outros músicos ganhem dinheiro em cima do seu trabalho sem autorização.</p>
      <p class="avenirRegular"> Se isso ocorrer, você terá direito a pedir uma indenização. </p>
    </div>
  </section>

  <section id="section-3">
    <div>
      <h2 style="line-height:31px" class="avenirRegular-600">São as menores taxas do mercado para tornar esta proteção acessível ao músico em qualquer estágio de carreira. </h2>
      <p class="avenirRegular-600">Contrate nosso serviço e garanta a proteção à sua marca.</p>
      <a href="<?= get_field('link_garantir_protecao');?>" class="bt avenirRegular-600 bg-red">Garantir proteção</a>
    </div>

    <div>
      <img src="<?= $base_url?>/assets/img/bg-taxas.png" />
    </div>
  </section>

  <section id="steps-process" class="bg-white">
    <div class="d-flex flex-column align-items-center justify-content-center p-5">

      <div class="header">
        <h5 class="avenirRegular-600">Como funciona o processo</h5>
        <div class="separator bg-red" ></div>
      </div>

      <div class="steps">
        
        <div class="step ">
          <div class="d-flex align-items-center">
            <img class="d-block mx-auto" src="<?= $base_url?>/assets/img/pesquisa.png" />
          </div>
          <p class="avenirRegular-600">Pesquisa de viabilidade</p>
        </div>
      
        <div class="step">
          <div class="d-flex align-items-center">
            <img class="d-block mx-auto" src="<?= $base_url?>/assets/img/tel-registro.png" />
          </div>
          <p class="avenirRegular-600">Solicitação de registro ao INPI</p>
        </div>
      
        <div class="step">
          <div class="d-flex align-items-center">
            <img class="d-block mx-auto" src="<?= $base_url?>/assets/img/acompanhamento.png" />
          </div>
          <p class="avenirRegular-600">Acompanhamento do processo</p>
        </div>
      
        <div class="step">
          <div class="d-flex align-items-center">
            <img class="d-block mx-auto" src="<?= $base_url?>/assets/img/calendar.png" />
          </div>
          <p class="avenirRegular-600">Recurso administrativo</p>
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
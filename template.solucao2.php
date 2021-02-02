<?php
  /* Template Name: Solucoes2 */

  $base_url = '/wp-content/themes/la_music/';
  get_header(); 

  $get_fields = get_post_custom();
  $fields = get_fields();
?>

<main id="direitos-autorais">

  <section id="admin-autoral" style="background-image: url('<?= the_post_thumbnail_url()?>');">
  
      <div>
        <h2 class="avenirRegular-600">Administração Autoral</h2>
        <h1 class="avenirRegular-600">Você só recebe Direitos Autorais com suas músicas cadastradas no ECAD.</h1>
        <a href="#home-contato" class="bt bg-red avenirRegular-600"> Solicite a análise de seu repertório GRÁTIS!</a>
      </div>

      <div class="">
        <img class="img-fluid " src="<?= $base_url?>/assets/img/la-solucao2.png"/>
      </div>
  </section>

  <section id="section2">
    <div class="">
      <p class="avenirRegular-600">Para que você receba direitos autorais de suas músicas é preciso cadastrar suas composições no ECAD - órgão responsável pela arrecadação e distribuição de direitos autorais no Brasil.</p>
    </div>
    <div class="">
      <img src="<?= $base_url?>/assets/img/capa-violao.png" class="img-fluid"/>
    </div>
    <img  src="<?= $base_url?>/assets/img/bg-degrade92.png" />
  </section>

  <section id="section3">
    <div class="px-3">
      <h5 class="avenirRegular-600">Oferecemos as seguintes soluções!</h5>
     
      <div id="servicos">
        <div  class="servico">
          <div>
            <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/clipboard.png" />
          </div>
          <p class="avenirRegular-500">Registro de suas músicas no ECAD.  Descomplicado e online.</p>
        </div>

        <div class="servico">
          <div>
            <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/filiacao.png" />
          </div>
          <p class="avenirRegular-500">Filiação GRATUITA do titular nas Associações de Gestão Coletiva (ECAD).</p>
        </div>
        
        <div class="servico">
          <div>
            <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/tax.png" />
          </div>
          <p class="avenirRegular-500"> Liberação de créditos retidos com a menor taxa de administração do mercado.</p>
        </div>
        
        <div class="servico">
          <div>
            <img class="img-fluid d-block mx-auto" src="<?= $base_url?>/assets/img/support.png" />
          </div>
          <p class="avenirRegular-500"> Suporte jurídico para proteção das músicas cadastradas.</p>
        </div>
      </div>
      <a href="#home-contato" class="bt bg-red">Solicite a análise de seu repertório GRÁTIS!</a>
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
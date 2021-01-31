<?php
/* Template Name: Solucoes4 */

  $base_url = esc_url(get_template_directory_uri());
  get_header(); 

  $get_fields = get_post_custom();
  $fields = get_fields();
?>

<main id="contratos">

  <section id="home-contrato"  style="background-image: url('<?= the_post_thumbnail_url()?>');">
    <div>
      <h1 class="avenirRegular-600">Contratos Artísticos e Consultoria Jurídica</h1>
      <p class="avenirRegular-500">Com especialistas em Music Business e Direito Autoral e em parceria com a LPBK Advogados Associados, a LA Music poderá te auxiliar na elaboração, revisão, negociação e gestão de contratos artísticos, bem como na solução de conflitos.</p>
      <a href="#home-contato" class="scrollSuave bt bg-red avenirRegular-600">Entre em contato</a>
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
</body>
<?php $base_url = '/wp-content/themes/la_music'; ?>

<footer class="d-none d-lg-block py-5 px-xl-5 px-3">
  
  <div class="row d-flex align-items-center w-100">
    <div class="col-12 col-md-4 d-inline order-md-1">
      <img src="<?= $base_url;?>/assets/img/logo-la_music.png" class="img-fluid d-block m-auto"/>
    </div>

    <div class="col-12 col-md-4 order-3 order-md-2">
      <div class="row">
        <div class="col-12 col-md-5">
        <?php wp_nav_menu(array('theme_location' => 'menu-topo', 'menu_class' => 'menu-topo align-items-center flex-column navbar-nav mr-auto text-left', 'menu_id' => 'bot-nav')); ?>
        </div>

        <div class="col-12 col-md-7">
          <ul id="list-servicos">
            <li class="avenirRegular-600">
              <a href="/politica-de-privacidade">Política de Privacidade</a>
            </li>
            <li class="avenirRegular-600">
              <a href="/termos-de-uso">Termos de Uso</a>
            </li>
            <li class="avenirRegular-600">
              <a href="#home-contato">Suporte</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-4 d-flex flex-column align-items-center order-1 order-md-3">
      <div class="my-3">
        <p class="text-abramus text-white avenirRegular w-100">Startup filiada à Associação Brasileira de Música e Artes - <span class="avenirBold">ABRAMUS</span></p>
      </div>

      <div class="d-none d-lg-flex flex-column justify-content-start align-items-start w-100">
        <div class="d-flex align-items-center justify-content-between">
          <a href="https://www.linkedin.com/company/lamusic/" target="_blank">
              <img class="mr-3" src="<?= $base_url ?>/assets/img/linkedin.svg" alt="Linkedin" />
          </a>    
          <a href="https://www.facebook.com/LAMusicMM" target="_blank">
              <img class="mx-3" src="<?= $base_url ?>/assets/img/facebook.svg" alt="Facebook" />
          </a>
          <a href="https://www.instagram.com/lamusicmm/" target="_blank">
              <img class="mx-3" src="<?= $base_url ?>/assets/img/instagram.svg" alt="Instagram" />
          </a>
          <a href="https://api.whatsapp.com/send?phone=5541998987030&fbclid=IwAR2ouD7MCdPlnh7fRCScOEQe1fWdxVmZW_TXVTqsEkFR7HS7WskFHgaF42Q" target="_blank">
              <img class="mx-3" src="<?= $base_url ?>/assets/img/whatsapp.svg" alt="WhatsApp" />
          </a>
        </div>
      </div>
      <div class="address-footer">
        <p>Rua Padre Anchieta, 2.272, sobreloja – Bigorrilho</p>
        <p> Curitiba – Paraná - CEP: 80.730-000</p>
        <p> Fone: 41 3017-5650 </p>
        <p>Whatsapp: 41 9239-9888</p>
      </div>
    </div>
  </div>
</footer>

<div class="d-flex d-lg-none flex-column justify-content-center align-items-center p-5" style="background-color: #262626">
  <p class="text-white text-sociais">Nos siga em nossas redes:</p>
  <div class="d-flex align-items-center justify-content-between mt-3">
    <a href="https://www.linkedin.com/company/lamusic/" target="_blank">
        <img class="mr-3" src="<?= $base_url ?>/assets/img/linkedin.svg" alt="Linkedin" />
    </a>    
    <a href="https://www.facebook.com/LAMusicMM" target="_blank">
        <img class="mx-3" src="<?= $base_url ?>/assets/img/facebook.svg" alt="Facebook" />
    </a>
    <a href="https://www.instagram.com/lamusicmm/" target="_blank">
        <img class="mx-3" src="<?= $base_url ?>/assets/img/instagram.svg" alt="Instagram" />
    </a>
    <a href="https://api.whatsapp.com/send?phone=5541998987030&fbclid=IwAR2ouD7MCdPlnh7fRCScOEQe1fWdxVmZW_TXVTqsEkFR7HS7WskFHgaF42Q" target="_blank">
        <img class="mx-3" src="<?= $base_url ?>/assets/img/whatsapp.svg" alt="WhatsApp" />
    </a>
  </div>
</div>

<footer class="d-block d-lg-none py-5 px-xl-5 px-3">
  <div class="row d-flex align-items-center w-100 mx-auto">

    <div class="col-12 my-3">
      <p class="w-100 text-white text-center f18 avenirRegular">Startup filiada à Associação Brasileira de Música e Artes - <span class="avenirBold">ABRAMUS</span></p>
    </div>

    <div class="col-12 order-3 order-md-2">
      <div class="row">
        <div class="col-12">
        <?php wp_nav_menu(array('theme_location' => 'menu-topo', 'menu_class' => ' align-items-center flex-column navbar-nav mr-auto text-center f16', 'menu_id' => 'bot-nav')); ?>
        </div>
        <div class="col-12  mt-5">
          <ul id="list-servicos" class="menu-topo align-items-center flex-column navbar-nav mr-auto text-left">
            <li class="avenirRegular-600 text-center">
              <a href="/politica-de-privacidade">Política de Privacidade</a>
            </li>
            <li class="avenirRegular-600">
              <a href="/termos-de-uso">Termos de Uso</a>
            </li>
            <li class="avenirRegular-600">
              <a href="#home-contato" >Suporte</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="p-5 text-footer" style="background-color: #1F1F1F;">
  <p class="text-center mb-0 text-white f16 avenirRegular-600">A LA Music é acelerada pelo Programa de Inovação da <span style="color: #EAB41F;">LPBK Advogados Associados</span></p>
</div>

<script>
  $('.carousel').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 4,
  });

  $('.carouselMobile').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 2,
    slidesToScroll: 2,
  });
</script>

<script>
  var $doc = $('html, body');
    $('.scrollSuave').click(function() {
        $doc.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });

    $('#logoLA').click(function(){
      window.location.href = "https://www.lamusic.com.br";
    })
</script>
<script src="<?= $base_url ?>/assets/js/toggleMenu.js"></script>

<script src="<?= $base_url ?>/assets/js/auth.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
      cssMode: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination'
      },
      mousewheel: true,
      keyboard: true,
    });
  </script>
</body>
<?php 
$base_url = esc_url(get_template_directory_uri());
?>

<footer style="background-color: #111111" class="d-none d-sm-block py-5 px-xl-5 px-3">
  
  <div class="row d-flex align-items-center w-100">
    <div class="col-12 col-md-4 d-none d-md-inline order-md-1">
      <img src="<?= $base_url?>/assets/img/logo-la_music.png" class="img-fluid d-block m-auto"/>
    </div>
    <div class="col-12 col-md-4 order-3 order-md-2">
      <div class="row">
        <div class="col-12 col-md-5">
        <?php wp_nav_menu(array('theme_location' => 'menu-topo', 'menu_class' => 'menu-topo align-items-center flex-column navbar-nav mr-auto text-left f14', 'menu_id' => 'bot-nav')); ?>
        </div>
        <div class="col-12 col-md-7">
          <ul id="list-servicos">
            <li class="f14 py-3 avenirRegular-600"><a href="/politica-de-privacidade" style="text-decoration:none;color: #7E7E7E;">Política de Privacidade</a></li>
            <li class="f14 py-3 avenirRegular-600"><a href="/termos-de-uso" style="text-decoration:none;color: #7E7E7E;">Termos de Uso</a></li>
            <li class="f14 py-3 avenirRegular-600"><a href="#home-contato" style="text-decoration:none;color: #7E7E7E;">Suporte</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 d-flex flex-column align-items-center order-1 order-md-3">
      <p class="text-white f16 avenirRegular w-100">Startup filiada à Associação Brasileira de Música e Artes - <span class="avenirBold">ABRAMUS</span></p>
      <div class="d-none d-sm-flex flex-column justify-content-start align-items-start w-100">
        <div class="d-flex align-items-center justify-content-between">
          <a href="https://www.linkedin.com/company/lamusic/" target="_blank">
              <img class="mx-2" src="<?= $base_url ?>/assets/img/linkedin.svg" alt="Linkedin" />
          </a>    
          <a href="https://www.facebook.com/LAMusicMM" target="_blank">
              <img class="mx-2" src="<?= $base_url ?>/assets/img/facebook.svg" alt="Facebook" />
          </a>
          <a href="https://www.instagram.com/lamusicmm/" target="_blank">
              <img class="mx-2" src="<?= $base_url ?>/assets/img/instagram.svg" alt="Instagram" />
          </a>
          <a href="https://api.whatsapp.com/send?phone=5541998987030&fbclid=IwAR2ouD7MCdPlnh7fRCScOEQe1fWdxVmZW_TXVTqsEkFR7HS7WskFHgaF42Q" target="_blank">
              <img class="mx-2" src="<?= $base_url ?>/assets/img/whatsapp.svg" alt="WhatsApp" />
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
  <div class="d-flex d-sm-none flex-column justify-content-center align-items-center p-5" style="background-color: #262626">
    <p class="text-white">Nos siga em nossas redes:</p>
    <div class="d-flex align-items-center justify-content-between">
      <a href="https://www.linkedin.com/company/lamusic/" target="_blank">
          <img class="mx-2" src="<?= $base_url ?>/assets/img/linkedin.svg" alt="Linkedin" />
      </a>    
      <a href="https://www.facebook.com/LAMusicMM" target="_blank">
          <img class="mx-2" src="<?= $base_url ?>/assets/img/facebook.svg" alt="Facebook" />
      </a>
      <a href="https://www.instagram.com/lamusicmm/" target="_blank">
          <img class="mx-2" src="<?= $base_url ?>/assets/img/instagram.svg" alt="Instagram" />
      </a>
      <a href="https://api.whatsapp.com/send?phone=5541998987030&fbclid=IwAR2ouD7MCdPlnh7fRCScOEQe1fWdxVmZW_TXVTqsEkFR7HS7WskFHgaF42Q" target="_blank">
          <img class="mx-2" src="<?= $base_url ?>/assets/img/whatsapp.svg" alt="WhatsApp" />
      </a>
    </div>
  </div>
<footer style="background-color: #111111" class="d-block d-sm-none py-5 px-xl-5 px-3">
  <div class="row d-flex align-items-center w-100 mx-auto">
    <div class="col-12 col-md-4 d-flex justify-content-center flex-md-row align-items-center">
      <!-- <img src="<?= $base_url?>/assets/img/logo-abramus.png" class="img-fluid mr-3"/>
      <img src="<?= $base_url?>/assets/img/logo-ecad.png" class="img-fluid mr-3"/> -->
    </div>
    <div class="col-12 mt-3">
      <p class="text-white text-center f18 avenirRegular">Startup filiada à Associação Brasileira de Música e Artes - <span class="avenirBold">ABRAMUS</span></p>
    </div>
    <div class="col-12 col-md-4 order-3 order-md-2">
      <div class="row">
        <div class="col-12 col-md-5">
        <?php wp_nav_menu(array('theme_location' => 'menu-topo', 'menu_class' => ' align-items-center flex-column navbar-nav mr-auto text-center f16', 'menu_id' => 'bot-nav')); ?>
        </div>
        <div class="col-12 col-md-7">
          <ul id="list-servicos" class="menu-topo align-items-center flex-column navbar-nav mr-auto text-left f16">
            <li class="f18 py-3 avenirRegular-600"><a href="/politica-de-privacidade" style="text-decoration:none;color: #7E7E7E;">Política de Privacidade</a></li>
            <li class="f18 py-3 avenirRegular-600"><a href="/termos-de-uso" style="text-decoration:none;color: #7E7E7E;">Termos de Uso</a></li>
            <li class="f18 py-3 avenirRegular-600"><a href="#home-contato"  style="text-decoration:none; color: #7E7E7E">Suporte</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="p-5" style="background-color: #1F1F1F;">
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
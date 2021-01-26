<?php 
/*
Template Name: Login
 */
get_header();
?>

<div style="background-color: #090909; height:120px; position:relative;display:list-item;width:100%"></div>
  <div id="page-login" class="row p-3 p-sm-5 w-100 mx-auto py-5 d-flex justify-content-center" style="background-color: #090909;">
    <section id="login">
      <div class="card p-5">
        <h2 class="avenirBold">Acessar minha conta</h2>
        <form action="https://lamusic-platform-backend.herokuapp.com/autentificar" method="post">
          <div class="form-group">
            <label class="avenirRegular-600 f16" for="">Endereço de e-mail:</label>
            <input type="text" id="login-email" name="email" class="form-control" placeholder>
          </div>
          <div class="form-group">
            <label class="avenirRegular-600 f16" for="">Senha:</label>
            <input type="password" id="login-senha" name="senha" class="form-control" placeholder>
          </div>
          <div class="mb-4 d-flex justify-content-between">
            <span class="next-cards avenirRegular-600" onClick="showCard('register');">Não tenho uma conta</span>
            <span class="next-cards avenirRegular-600" onClick="showCard('reset');">Esqueci minha senha</span>
          </div>
          <button type="button" onClick="login()" class="d-block btn w-100 btn-success">Login</button>
        </form>
      </div>
    </section>

    <section id="register" class="d-none">
      <div class="card p-5">
        <h2 class="avenirBold">Crie uma conta</h2>
        <form action="" method="post">
          <div class="form-group">
            <label class="avenirRegular-600 f16" for="">Endereço de e-mail:</label>
            <input type="email" class="form-control">
          </div>
          <div class="form-group">
            <label class="avenirRegular-600 f16" for="">Seu nome completo:</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label class="avenirRegular-600 f16" for="">CPF:</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label class="avenirRegular-600 f16" for="">Número de telefone:</label>
            <input type="text" class="form-control" placeholder="(00) 0 0000-0000">
          </div>
          <div class="d-flex mb-4">
            <span class="next-cards avenirRegular-600" onClick="showCard('login');">Já tenho uma conta</span>
          </div>
          <button type="submit" class="d-block btn w-100 btn-success">Criar conta</button>
        </form>
      </div>
    </section>

    <section id="reset" class="d-none">
      <div class="card p-5">
        <h2 class="avenirBold">Recuperar minha senha</h2>
        <div class="d-flex">
          <span class="next-cards avenirRegular-600" onClick="showCard('register')">Não tenho uma conta</span>
        </div>
      </div>
    </section>
  </div>
</div>
<script>
function showCard(id){
  section = document.querySelectorAll("section")
  for (let index = 0; index < section.length; index++) {
    section[index].classList.add("d-none")
  }
  $('#'+id).removeClass('d-none');
}

function login(){
  let email = $('#login-email').val()
  let pwd = $('#login-senha').val()
  let url = 'https://lamusic-platform-backend.herokuapp.com/autentificar'

  $.ajax({
    type: 'POST',
    url: url,
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    data: JSON.stringify({email: email, senha: pwd})
  }).done(function(data){
    if(window.location.hostname === 'localhost'){
      if(data.papel === 'admin'){
        window.location.href = 'http://localhost:3000/admin/dashboard';
      }else{
        window.location.href = 'http://localhost:3000/user/credito-retido';
      }
    }else{
      if(data.papel === 'admin'){
        window.location.href = 'https://lamusic-platform-backend.herokuapp.com/admin/dashboard';
      }else{
        window.location.href = 'https://lamusic-platform-backend.herokuapp.com/user/credito-retido';
      }
    }
    document.cookie = "lamusic-Token="+data.token+";path=/"
    document.cookie = "lamusic-Papel="+data.papel+";path=/"
  });

}
</script>
<?php get_footer(); ?>

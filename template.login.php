<?php 
/* Template Name: Login */
get_header();
?>

<main id="main-login" >
    <section id="login" >
      <div class="card">
        <h2 class="avenirBold">Acessar minha conta</h2>
        <form action="https://lamusic-platform-backend.herokuapp.com/autentificar" method="post">
          <div class="form-group">
            <label class="avenirRegular-600" for="">Endereço de e-mail:</label>
            <input type="text" id="login-email" name="email" class="form-control" placeholder="luiz@lamusic.com.br">
          </div>

          <div class="form-group">
            <label class="avenirRegular-600 f16" for="">Senha:</label>
            <input type="password" id="login-senha" name="senha" class="form-control" placeholder="*******">
          </div>
          
          <!-- <div class="mb-4 d-flex justify-content-between">
            <span class="next-cards avenirRegular-600" onclick="showCard('register');">Não tenho uma conta</span>
            <span class="next-cards avenirRegular-600" onclick="showCard('reset');">Esqueci minha senha</span>
          </div> -->

          <button type="button" onclick="login()" class="d-block bt bg-green w-100">Login <i class="fa spin-login d-none fa-spinner fa-spin"></i></button>
        </form>
      </div>
    </section>

    <section id="register" class="d-none" >
      <div class="card">
        <h2 class="avenirBold">Crie uma conta</h2>
        <form action="" method="post">
          <div class="form-group">
            <label class="avenirRegular-600" for="">Endereço de e-mail:</label>
            <input type="email" class="form-control" placeholder="luiz@lamusic.com.br">
          </div>
          <div class="form-group">
            <label class="avenirRegular-600" for="">Seu nome completo:</label>
            <input type="text" class="form-control" placeholder="Luiz Antonio">
          </div>
          <div class="form-group">
            <label class="avenirRegular-600" for="">CPF:</label>
            <input type="text" class="form-control" placeholder="000.000.000-00">
          </div>
          <div class="form-group">
            <label class="avenirRegular-600" for="">Número de telefone:</label>
            <input type="text" class="form-control" placeholder="(00) 0 0000-0000">
          </div>
          <div class="d-flex mb-4">
            <span class="next-cards avenirRegular-600" onclick="showCard('login');">Já tenho uma conta</span>
          </div>
          <button type="submit" class="d-block bt bg-green w-100">Criar conta</button>
        </form>
      </div>
    </section>

    <section id="reset" class="d-none">
      <div class="card">
        <h2 class="avenirBold">Esqueceu sua senha?</h2>
        <form action="">
          <div class="form-group">
            <label class="avenirRegular-600" for="">Seu e-mail:</label>
            <input type="email" class="form-control" placeholder="luiz@lamusic.com.br">
          </div
          >
          <div class="d-flex">
            <span class="next-cards avenirRegular-600" onclick="showCard('register')">Não tenho uma conta</span>
          </div>
          <button type="button" class="d-block bt bg-green w-100">Enviar</button>
        </form>
      </div>
    </section>

    <div id="modal" class="d-none">
      <div class="modal-content">
          <div class="modal-header">
            Ops!
          </div>
          <div class="modal-body">
            <p id="response"></p>
          </div>
          <div class="modal-footer">
            <button class="bt bg-red" onclick="closeModal()">Ok</button>
          </div>
      </div>
    </div>
</main>

<?php get_footer(); ?>

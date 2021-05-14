function login(){
    let email = $('#login-email').val()
    let pwd = $('#login-senha').val()
    let url = 'https://lamusic-platform-backend.herokuapp.com/autentificar'

    $('.spin-login').removeClass('d-none');

    try {
        $.ajax({
            type: 'POST',
            url: url,
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            data: JSON.stringify({email: email, senha: pwd}),
            error: function(e) {

                $('#response').html(e.responseJSON.message)
                $('#modal').removeClass('d-none');
                $('.spin-login').addClass('d-none');
              },
          })
          
          .done(function(data){

            if(!data) {
                $('#response').html('Estamos normalizando nossos serviços, tente novamente em alguns instantes');
                $('#modal').removeClass('d-none');
            }

            $('.spin-login').addClass('d-none');
        
            const redirect = {
                admin: function(){
                    document.cookie = "lamusic-Token="+data.token+";path=/;domain=lamusic-frontend.herokuapp.com;";
                    document.cookie = "lamusic-email="+email+";path=/;domain=lamusic-frontend.herokuapp.com;";
                    
                    setTimeout(() => {
                        window.location.href = 'https://lamusic-frontend.herokuapp.com/admin/dashboard';
                    }, 300);
                },
        
                pro: function(){
                    document.cookie = "lamusic-Token="+data.token+";path=/;domain=app.lamusic.com.br;";
                    document.cookie = "lamusic-email="+email+";path=/;domain=app.lamusic.com.br;";
                    document.cookie = "lamusic-name="+data.nome+";path=/;domain=app.lamusic.com.br;";

                    setTimeout(() => {
                        window.location.href = 'https://app.lamusic.com.br/pro';
                    }, 300);


                    // window.location.href = 'http://localhost:3000/pro';                    
                },
        
                user: function(){
                    window.location.href = 'https://app.lamusic.com.br/user';
                }
            
            }
            
            
            redirect[data.papel]()
          })
          
        
    } catch (error) {
        
        $('#response').html(error);
        $('#modal').removeClass('d-none');
        $('.spin-login').addClass('d-none');
    }
}

function showCard(id){

    section = document.querySelectorAll("section")
    for (let index = 0; index < section.length; index++) {
        section[index].classList.add("d-none")
    }
    $('#'+id).removeClass('d-none');
}

function closeModal() {
    $('#modal').addClass('d-none');
}

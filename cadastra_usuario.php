<!DOCTYPE html>
<!-- saved from url=(0055)https://getbootstrap.com.br/docs/4.1/examples/checkout/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

  <title>Sistema de Tickets</title>

  <!-- Principal CSS do Bootstrap -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS personalidado -->
  <link href="./css/style.css" rel="stylesheet">

  <!-- Estilos customizados para esse template -->
  <link href="./css/form-validation.css" rel="stylesheet">
  <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>

</head>

  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="login.php">
          <img src="./images/house.svg" alt="" width="25" height="25">
        </a>
      </nav>
    </header>

    </br>
    </br>
    </br>

    <div class="container text-center">

      <form class="needs-validation" novalidate="">

        <div class="py-4">
          <img class="d-block mx-auto mb-4" src="./images/bootstrap-solid.svg" alt="" width="72" height="72">
          <h2>Cadastrar novo usuário</h2>
          <p class="lead">Preencha os dados solicitados corretamente.</p>
        </div>

        <div class="container">
          
            <div class="row justify-content-md-center">

              <div class="col-sm-8">
                <label for="usuario"><h5>Usuário</h5></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" id="usuario" placeholder="Usuário" required="">
                  <div class="invalid-feedback" style="width: 100%;">
                    Seu usuário é obrigatório.
                  </div>
                </div>
              </div>

            </div>

            </br>

            <div class="row justify-content-md-center">

              <div class="col-sm-8">
                <label for="email"><h5>Email</h5></label>
                <input type="email" class="form-control" id="email" placeholder="fulano@exemplo.com" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Por favor, insira seu endereço de e-mail corretamente.
                </div>
              </div>

            </div>

            </br>

            <div class="row justify-content-md-center">

            <div class="col-sm-8 col-md-6">
              <label for="senha"><h5>Senha</h5></label>
              <input type="password" class="form-control" id="senha" placeholder="Digite uma nova senha" required="">
              <div class="invalid-feedback" style="width: 100%;">
                Por favor, insira uma senha válida!
              </div>
            </div>

            </div>

            </br>

            <div class="row justify-content-md-center">

            <div class="col-sm-8 col-md-6">
              <label for="confirma_senha"><h5>Confirme a senha</h5></label>
              <input type="password" class="form-control" id="confirma_senha" placeholder="Confirme a nova senha" required="">
              <div class="invalid-feedback" style="width: 100%;">
                Por favor, insira uma senha válida!
              </div>
            </div>

            </div>

            </br>

            <hr class="mb-4">

            <div class="row justify-content-md-center">

              <div class="col-sm-8 col-md-6">
                <label for="estado"><h5>Estado</h5></label>
                <select class="custom-select d-block w-100" id="estado" required="">
                  <option value="">Escolha...</option>
                  <option>RIO DE JANEIRO</option>
                </select>
                <div class="invalid-feedback">
                  Por favor, insira um estado válido.
                </div>
              </div>

            </div>

            </br>

            <div class="row justify-content-md-center">

              <div class="col-sm-8 col-md-6">
                <label for="cidade"><h5>Cidade</h5></label>
                <select class="custom-select d-block w-100" id="estado" required="">
                  <option value="">Escolha...</option>
                  <option>RIO DE JANEIRO</option>
                </select>
                <div class="invalid-feedback">
                  Por favor, insira uma cidade válida.
                </div>
              </div>

            </div>

            </br>

            <hr class="mb-4">
              
            <div class="row justify-content-md-center">

                <div class="col-sm-8">

                  <h5>Tipo de usuario</h5>

                  <div class="d-block my-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" checked name="tipo_usuario" id="operador" value="OPERADOR">
                      <label class="form-check-label" for="operador">Operador</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tipo_usuario" id="analista" value="ANALISTA">
                      <label class="form-check-label" for="analista">Analista</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="tipo_usuario" id="administrador" value="ADMINISTRADOR">
                      <label class="form-check-label" for="administrador">Administrador</label>
                    </div>
                  </div>
                </div>
                
            </div>

            <hr class="mb-4">

            <div class="row justify-content-md-center">

              <div class="col-sm-8 col-md-6">

                <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>

              </div>

            </div>

        </div>

      </form>

    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
          <p class="mb-1">© 2024-2024 Nome da companhia</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacidade</a></li>
            <li class="list-inline-item"><a href="#">Termos</a></li>
            <li class="list-inline-item"><a href="#">Suporte</a></li>
          </ul>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="./js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/holder.min.js"></script>
    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  

</body></html>
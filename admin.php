<!DOCTYPE html>
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

    <title>Sistema de Tickets</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

  <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script></head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">
          <img src="./images/house.svg" alt="" width="25" height="25">
        </a>
        <a class="navbar-brand" href="index.php">
          <img src="./images/admin.svg" alt="" width="30" height="30">
        </a>
        <a class="navbar-brand" href="login.php">
          <img src="./images/exit.svg" alt="" width="30" height="30">
        </a>
      </nav>
    </header>

    </br>
    </br>
    </br>

    <main role="main">

    </br>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Solicitações de acesso</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">6</h1>
            <button type="button" class="btn btn-lg btn-block btn-primary">Verificar</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Tickets abertos</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">10</h1>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Verificar</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Gerenciar conteúdo</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">6</h1>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Verificar</button>
          </div>
        </div>
      </div>

      <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->

      <div class="container text-center py-4">

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h1 class="h2">Solicitações de acesso</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-secondary">Exportar</button>
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>USUÁRIO</th>
                  <th>EMAIL</th>
                  <th>ESTADO</th>
                  <th>CIDADE</th>
                  <th>TIPO USUÁRIO</th>
                  <th>AÇÃO</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Thiago Lira</td>
                  <td>thiago@email.com</td>
                  <td>RJ</td>
                  <td>RIO DE JANEIRO</td>
                  <td>ADMINISTRADOR</td>
                  <td><button class="btn btn-sm btn-warning">Analisar</button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Thiago Lira</td>
                  <td>thiago@email.com</td>
                  <td>RJ</td>
                  <td>RIO DE JANEIRO</td>
                  <td>ADMINISTRADOR</td>
                  <td><button class="btn btn-sm btn-warning">Analisar</button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Thiago Lira</td>
                  <td>thiago@email.com</td>
                  <td>RJ</td>
                  <td>RIO DE JANEIRO</td>
                  <td>ADMINISTRADOR</td>
                  <td><button class="btn btn-sm btn-warning">Analisar</button></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Thiago Lira</td>
                  <td>thiago@email.com</td>
                  <td>RJ</td>
                  <td>RIO DE JANEIRO</td>
                  <td>ADMINISTRADOR</td>
                  <td><button class="btn btn-sm btn-warning">Analisar</button></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Thiago Lira</td>
                  <td>thiago@email.com</td>
                  <td>RJ</td>
                  <td>RIO DE JANEIRO</td>
                  <td>ADMINISTRADOR</td>
                  <td><button class="btn btn-sm btn-warning">Analisar</button></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Thiago Lira</td>
                  <td>thiago@email.com</td>
                  <td>RJ</td>
                  <td>RIO DE JANEIRO</td>
                  <td>ADMINISTRADOR</td>
                  <td><button class="btn btn-sm btn-warning">Analisar</button></td>
                </tr>
              </tbody>
            </table>
          </div>

        <hr class="featurette-divider">

        <!-- /FIM DAS FEATUREZINHAS *-* -->

      </div><!-- /.container -->

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p>© Companhia S.A., 2024-2024 · <a href="#">Termos</a></p>
      </footer>

    </main>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="./js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="./js/holder.min.js"></script>
  

<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body></html>
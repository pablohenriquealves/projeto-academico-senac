<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include 'header.php'?>
</head>
<body>
  <main class="col-12">
    <section class="position-absolute top-50 start-50 translate-middle vw-100">
      <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="imagens/draw2.webp" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="login.php" method = "POST">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Entre com </p>
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>
            
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>
            
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>
          <div class="divider d-flex align-items-center my-4 ">
          <hr class="border border-danger border-2 opacity-50">
          <p class="text-center fw-bold mx-3 mb-0">Ou</p>
          <hr class="border border-danger border-2 opacity-50">
          </div>
          

          <div class="row g-3 align-items-center">
          <div class="col-auto">
          <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuário">
          </div>
          </div>

          <div class="row g-3 align-items-center my-0">
          <div class="col-auto">
          <input type="password" id="senha" name="senha" class="form-control" aria-describedby="passwordHelpInline" placeholder="Senha">
          </div>
          </div>
          
          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Manter conectado
              </label>
            </div>
          </div>
          <a href="#!" class="text-body fs-6">Esqueceu a senha?</a>
          
          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Não possui uma conta? <a href="#!"
            class="link-danger">Registrar</a></p>
          </div>
          
                </form>
              </div>
            </div>
          </div>
        </section>
        </main>

<footer>
  <?php include 'footer.php' ?>
</footer>

</body>
</html>
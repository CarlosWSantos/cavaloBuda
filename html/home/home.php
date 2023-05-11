


<!DOCTYPE html>
<html>
 
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Página Inicial</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  >
        <script src='main.js'></script>
    </head>


    <body>

                <section class="vh-100" style="background-color: #dddddd;">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-xl-10">
                            <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img
                                    src="/image/img1.jpg"
                                    alt="login form"
                                    class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                                />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                <h1>Registrar-se</h1>
                                    <form action="/php/registrar.php" method="post">
                                        <div class="container mt-5 ">
                                                <div class="mb-3">
                                                    <label  class="form-label">Seu e-mail</label>
                                                    <input type="email" name="email" class="form-control" required placeholder="ex: name@example.com">
                                                </div>
                                                <div class="mb-3">
                                                    <label  class="form-label">Seu Nome</label>
                                                    <input type="text"  name="nome" class="form-control" required placeholder="ex: Willian">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Sua Senha</label>
                                                    <input type="password" name="senha" class="form-control" required placeholder="*****">
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary mb-3 ">Registar Usuário</button>
                                                    <a href="/html/home/logar.php" class="btn btn-primary mb-3">Logar</a>
                                                </div>
                                        </div>
                                    </form>

                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
               </section>


       
    </body>

</html>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
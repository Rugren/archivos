<?php
$tiendaTitulo = "Login";
include("../templates/header.php");
?>

<section class="bg-secondary">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <form action="logicalogear.php" method="post">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your username and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="username" name="username" class="form-control form-control-lg" />
                                    <label class="form-label" for="username">Username</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="contraseña" name="contraseña" class="form-control form-control-lg" />
                                    <label class="form-label" for="contraseña">Password</label>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                <input type="submit" value="Enviar" class="btn btn-secondary">

                            </div>

                            <div>
                                <p class="mb-0">No tienes cuenta? <a href="register.php" class="text-white-50 fw-bold">Registrate</a>
                                </p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("../templates/footer.php");
?>
<?php

session_start()
?>




<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Inscription</h2>

                            <?php if (isset($_GET['error']) && $_GET['error'] == 'missing') : ?>
                                <div class="alert alert-danger" role="alert">
                                    Vous devez remplir tous les champs
                                </div>
                            <?php endif; ?>

                            <form method="POST" action="index.php">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" name="firstname" />
                                            <label class="form-label" for="form3Example1">Nom</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example2" class="form-control" name="lastname" />
                                            <label class="form-label" for="form3Example2">Prénom</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example3" class="form-control" name="username" />
                                    <label class="form-label" for="form3Example3">Identifiant</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4" class="form-control" name="password" />
                                    <label class="form-label" for="form3Example4">Mot de passe </label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4" class="form-control" name="confirm_password" />
                                    <label class="form-label" for="form3Example4">Confirmer le mot de passe </label>
                                </div>


                                <!-- Submit button -->
                                <input type="submit" class="btn btn-primary btn-block mb-4" name="register" value="Inscription">
                                <!-- Register buttons -->
                                <div class="text-center">
                                    <a href="login.php">Connecter-vous</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4" alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->

</body>

</html>
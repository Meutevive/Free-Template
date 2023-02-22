<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./assets/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
                $(document).ready(function() {
                        $("form").submit(function(event) {
                                event.preventDefault();
                        })
                })
        </script>
</head>

<body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                        <a class="navbar-brand" href="#">Blog</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                        <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                                        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                </svg></a>
                                        <!--        <a class="nav-link" href="#">Pricing</a>
                                        <a class="nav-link disabled">Disabled</a> -->
                                </div>
                        </div>
                </div>
        </nav>
        <section>
                <form method="POST" action="index.php">
                        <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nom de l'article</label>
                                <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="title">
                                </div>
                        </div>
                        <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Contenu</label>
                                <div class="col-sm-10">
                                        <textarea id="txtid" name="content" rows="20" class="form-control" placeholder="contenu">

                                        </textarea>
                                </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Valider</button>
                </form>
        </section>
</body>

</html>
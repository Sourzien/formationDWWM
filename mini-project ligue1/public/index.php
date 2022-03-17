<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TD J31 15/03 tablePhP</title>
    <meta name="description" content="">
    <meta name="application-name" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta name="robots" content="none">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
    h1,
    h2 {
        color: #3aafa9;
    }

    h1 {
        font-weight: bold;
    }

    .btn {
        background-color: #3aafa9;
        color: white;
        border-radius: 40px;
        width: 50%;
        height: 50px;
    }

    input::placeholder {
        color: lightgray !important;
    }
</style>

<body>
    <section class="container">
        <div class="row">
            <div class="col text-center mb-3">
                <h1>Accéder à la Ligue 1</h1>
                <h2>Pour accéder au classement de la ligue 1, veuillez vous connecter</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php if (isset($_GET['error'])) {//si la variable existe
                if ($_GET['error']) {//si la variable vaut true
            ?>
                    <div class="col-6 alert alert-danger lh-1 mb-4 text-center" role="alert">
                        Erreur de connexion, veuillez vérifier vos identifiants de connexion
                    </div>
            <?php
                }
            } ?>
        </div>
    </section>
    <section class="container">
        <form class="form" action="../controller/traitement_connexion.php" method="post">
            <div class="row justify-content-center">
                <div class="col-4 mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="✉ Email">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4 mb-4">
                    <input class="form-control" id="pwd" name="pwd" type="password" placeholder="🔒 Password">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                    <button type="submit" class="btn mb-3">SIGN UP</button>
                </div>
            </div>
        </form>
    </section>
    <!--     <script>
        function checkForm(event){
            let email = document.getElementById("email").value;
            let pwd = document.getElementById("pwd").value;

            if (email!= "admin@cci.fr" || pwd!="1234")
            {
                event.preventDefault()
                document.getElementById("errorMsg").style.display = "block";
                return false;
            }
        }
    </script> -->
</body>
</html>
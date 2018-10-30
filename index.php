<?php
    session_start();
    if(isset($_SESSION['email'])){
        header('location:accueil.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title>Connexion/Inscription</title>
</head>
<body>
    <main class="container">
        <div id="top">
            <button class="btn btn-default btnSign" data-content="#signIn" data-hide="#signUp">Connexion</button>
            <button class="btn btn-default btnSign" data-content="#signUp" data-hide="#signIn">Inscription</button>
        </div>
        <div>
        <p id="userMsg" class="text-info"></p>
        </div>
        <div id="signIn">
            <h3 class="text-info">Connexion</h3>
            <form data-url="bdd/sign_in.php">
                <div class="form-group">
                    <input type="email" name="email" class="form-control col-4" placeholder="Saisir votre email">
                </div>

                <div class="form-group">
                    <input type="password" name="mdp" class="form-control col-4" placeholder="Saisir votre mot de passe">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success col-2" value="connexion" data-action="0">
                </div>
            </form>
        </div>

        <div id="signUp">
            <h3 class="text-info">Inscription</h3>
            <form data-url="bdd/sign_up.php">
                <div class="form-group">
                    <input type="text" name="lastName" class="form-control col-4" placeholder="Saisir votre nom">
                </div>

                <div class="form-group">
                    <input type="text" name="firstName" class="form-control col-4" placeholder="Saisir votre prénom">
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control col-4" placeholder="Saisir votre email">
                </div>

                <div class="form-group">
                    <input type="number" name="old" step="1" min="10" class="form-control col-4" placeholder="Saisir votre age">
                </div>

                 <div class="form-group">
                    <input type="password" name="mdp" class="form-control col-4" placeholder="Saisir votre mot de passe">
                </div>

                <div class="form-group">
                    <input type="password" name="mdpConfirm" class="form-control col-4" placeholder="Confirmer votre mot de passe">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-info col-2" value="Inscription"  data-action="1">
                </div>
            </form>
        </div>
        <div>
            <p class="text-primary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae obcaecati esse quo molestias tempore itaque distinctio non, maiores dignissimos blanditiis ut assumenda, ea aut architecto aperiam est voluptatem error exercitationem.
            </p>
            <p class="text-info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae obcaecati esse quo molestias tempore itaque distinctio non, maiores dignissimos blanditiis ut assumenda, ea aut architecto aperiam est voluptatem error exercitationem.
            </p>
            <p class="text-success">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae obcaecati esse quo molestias tempore itaque distinctio non, maiores dignissimos blanditiis ut assumenda, ea aut architecto aperiam est voluptatem error exercitationem.
            </p>
            <p class="text-warning">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae obcaecati esse quo molestias tempore itaque distinctio non, maiores dignissimos blanditiis ut assumenda, ea aut architecto aperiam est voluptatem error exercitationem.
            </p>
            <p class="text-danger">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae obcaecati esse quo molestias tempore itaque distinctio non, maiores dignissimos blanditiis ut assumenda, ea aut architecto aperiam est voluptatem error exercitationem.
            </p>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>
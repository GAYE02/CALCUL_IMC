<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudfare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>inscription</title>
</head>
<body>
        <div class="login-form">
            <?php
                                if (isset($_GET['reg_err'])) 
                                {
                                    $err = htmlspecialchars($_GET['reg_err']);
        
                                switch($err)
                                {
                                    case 'success':
                                        ?>
                                        <div class="alert alert-success">
                                            <strong>Succès</strong> Inscription Réussie!
                                        </div>
                                            <?php
                                            break;
                                            case 'password':
                                                ?>
                                                <div class="alert alert-danger">
                                                    <strong>Erreur</strong>Mots de passes différents!
                                                </div>
                                                <?php
                                        break;
                                        case 'email':
                                            ?>
                                            <div class="alert alert-danger">
                                                <strong>Erreur</strong>email non valide!
                                            </div>
                                                <?php
                                                break;
                                                case 'email_length':
                                                    ?>
                                                    <div class="alert alert-danger">
                                                        <strong>Erreur</strong>email trop long!
                                                    </div>
                                                    <?php
                                                    break;
                                                    case 'prenom_length':
                                                        ?>
                                                        <div class="alert alert-danger">
                                                            <strong>Erreur</strong>prenom trop long!
                                                        </div>
                                                        <?php
                                                        break;
                                                        case 'already':
                                                            ?>
                                                            <div class="alert alert-danger">
                                                                <strong>Erreur</strong>Compte deja existant!
                                                            </div>
                                <?php
                                                        }
                                
                            }
                    ?>
            <form action="inscription_traitement.php" method="POST">
                <h2 class="text-center">Inscription</h2>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de Passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Retapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>
                
            </form>
            <p class="text-center" >Vous avez deja un compte ? <a href="index.php">Se Connecter</a></p>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./main.js "></script>
</body>
</html>
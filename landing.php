<?php 
    session_start();
    if (!isset($_SESSION['user']))
    header('Location:index.php');
?>

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
    <title>Bienvenue</title>
</head>
<body>
    <h1 class="text-center">Bonjour <?php echo $_SESSION['user']; ?></h1>
    <h2 class="text-center">Bienvenue dans votre site de calcul de l'IMC</h2>
        <div class="login-form">
            <Form action="traitement.php" method="POST">
            <h2 class="text-center">IMC</h2>
                <div class="form-group">
                    <input type="integer" name="poids" class="form-control" placeholder="Poids en KG" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="integer" name="taille" class="form-control" placeholder="Taille en CM" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Calcul</button>
                </div>
            </Form>
        </div>
   <a href="deconnexion.php" class="btn btn-danger">Deconnexion</a></button>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./main.js "></script>
</body>
</html>
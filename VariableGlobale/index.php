
<?php
session_start();
$_SESSION["name"]="David";
$_SESSION["prenom"]="Wuiquot";
$_SESSION["age"]=41;
if(isset($_POST["envoie"])){
    setcookie("Login", $_POST["login"]);
    setcookie("Password", $_POST["password"]);
}






?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP</title>
</head>

<body class="bg-light">
    
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-8">
            <form action="index.php" method="POST">
                    
                <div class="form-group">
                        
                    <label for="exampleInputEmail1">Login</label>
                    <input type="text" class="form-control" name="login" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Entrer Login">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Entrer votre mot de passe">
                </div>
                <div class="row justify-content-center">
                <button type="submit" name="envoie"class="btn btn-primary mr-1">Envoyer</button>
                <button class="btn btn-secondary ml-1  mr-1"><a href="info.php" class="text-decoration-none text-reset">Cookies</a></button>
                <button class="btn btn-warning ml-1"><a href="data.php" class="text-decoration-none text-reset">Données</a></button>
                </div>
            </form>
            
        </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>


</html>

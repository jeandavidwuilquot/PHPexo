<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Calculatrice</title>
</head>

<body>

    <!-- Calculatrice 1 -->

    <div class="container-fluid">
        <div class="row d-flex justify-content-center mt-5">
        
            <form method="POST" action="#">
                <input type="text" name="n1">
                <select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                </select>
                <input type="text" name="n2">
                <input type="submit" name="b1" value="Calculer">
        </div>
    </div>
    </form>
    <?php

    


	$n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $op=$_POST['op'];

	if ($n1 != "" && $n2 != "" && isset($n1) && isset($n2)){
        
        echo("Resultat du calcul ".$n1.$op.$n2." = ");
        if($op =="/" AND $n2== 0){
            echo "On ne peut pas diviser par zéro!!!";
        }elseif ($op=="+") {
            echo $n1+$n2;
        } elseif ($op=="-") {
            echo $n1-$n2;
        } elseif ($op=="*") {
            echo $n1*$n2;
        } elseif ($op=="/"){
            echo $n1/$n2;
        }
        else{
            echo $n1%$n2;
        }
    }else{
        echo "Erreur";
    }
?>
    </div>


    <!-- Calculatrice 2 -->
    <form action="index.php" method="POST" id="form">
        <div class="container d-flex justify-content-center mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-4 mb-1">
                    <input type="text" class="form-control" name="nombre1" id="input1" placeholder="">
                </div>
                <div class="col-4 mb-1">
                    <input input="text" class="form-control" name="nombre2" id="input2" placeholder="">
                </div>
                <div class="container d-flex justify-content-center mt-5" name="operation">
                    <button type="submit" value="plus" name="operation" class="btn btn-outline-primary mr-3"
                        data-toggle="modal" data-target="#reponse">Addition +</button>
                    <button type="submit" value="moins" name="operation"
                        class="btn btn-outline-secondary mr-3" data-toggle="modal" data-target="#reponse">Soustraction -</button>
                    <button type="submit" value="mul" name="operation"
                        class="btn btn-outline-success mr-3" data-toggle="modal" data-target="#reponse">Multiplication *</button>
                    <button type="submit" value="div" name="operation" class="btn btn-outline-danger mr-3" data-toggle="modal" data-target="#reponse">Division
                        /</button>
                    <button type="submit" value="mod" name="operation" class="btn btn-outline-warning mr-3" data-toggle="modal" data-target="#reponse">Modulus
                        %</button>
                    <button type="reset" value="plus" name="operation" class="btn btn-outline-primary mr-3"
                        id="clear">Clear</button>


                </div>
            </div>
        </div>
    </form>
    <!-- Modal -->

    <div class="modal" tabindex="-1" role="dialog" id="reponse">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <?php


$nombre1 = (int) $_POST['nombre1'];
$nombre2 = (int) $_POST['nombre2'];
$op=$_POST['operation'];
// extract($_POST);

switch($op){
 case 'plus' :
  $reponse = $nombre1 + $nombre2;
  break;
 case 'moins' :
  $reponse = $nombre1 - $nombre2;
  break;
 case 'mul' :
  $reponse = $nombre1 * $nombre2;
  break;
 case 'div' :
  $reponse = $nombre1 / $nombre2;
  break;
  case 'mod':
  $reponse = $nombre1 % $nombre2;
}
echo $reponse;
?>

   

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
    <script src="script.js"></script>
</body>

</html>


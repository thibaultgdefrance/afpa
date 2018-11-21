<?php
session_start(); 

$dsn = 'mysql:dbname=shop;host=10.115.145.5';
$user = 'root';
$password = 'root';

try {
    $bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

        // if(($_POST['username'] == $row['name']) && ($_POST['psswd'] == $row['password'])){

        // }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panier</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>

	<div>
		<?php
		$sql="SELECT * FROM panier WHERE 1";

		?>
	</div>
	<div class="container"></div>
    <div class="card">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Votre Panier
                <a href="./index.html" class="btn btn-outline-info btn-sm pull-right">Retour au site</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
            	<?php
				foreach ($bdd->query($sql) as $row):
					$sql2 =("SELECT * FROM products WHERE idproducts = ".$row['products_idproducts']);
					foreach ($bdd->query($sql2) as $row2):
						?>
		                <div class="row">
		                    <div class="col-xs-2 col-md-2">
		                        <img class="img-responsive" src="./media/<?php echo $row2['url']; ?>" alt="<?php echo $row2['url']; ?>">
		                    </div>
		                    <div class="col-xs-4 col-md-6">
		                        <h4 class="product-name"><strong><?php echo $row2['name']; ?></strong></h4><h4><small><?php echo $row2['description']; ?></small></h4>
		                    </div>
		                    <div class="col-xs-6 col-md-4 row">
		                        <div class="col-xs-6 col-md-6 text-right" style="padding-top: 5px">
		                            <h6><strong><?php echo $row2['prix']; ?> <span class="text-muted">x</span></strong></h6>
		                        </div>
		                        <div class="col-xs-4 col-md-4">
		                            <input type="text" class="form-control input-sm" value="1">
		                        </div>
		                        <div class="col-xs-2 col-md-2">
		                            <button type="button" class="btn btn-outline-danger btn-xs">
		                                <i class="fa fa-trash" aria-hidden="true"></i>
		                            </button>
		                        </div>
		                    </div>
		                </div>
		                <hr>
	            	<?php ENDFOREACH; ?>
	            <?php ENDFOREACH; ?>

                <hr>
            </div>
            <div class="card-footer">
                <a href="./panier.php?action=Validate" class="btn btn-success pull-right">Valider mon panier</a>
                <div class="pull-right" style="margin: 5px">
                    Prix total: <b>prix total</b>
                </div>
            </div>
        </div>
</body>
</html>
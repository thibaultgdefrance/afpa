<?php

$dsn = 'mysql:dbname=shop;host=10.115.145.5';
$user = 'root';
$password = 'root';

try {
    $bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$sql="SELECT * FROM products WHERE 1";

foreach ($bdd->query($sql) as $row):
?>
<div class="col-sm-12 col-md-6 col-lg-3 mb-5">
	<div class="card rounded border border-secondary">
	  	<div class="card-img-top rounded text-center">
	  		<img class="rounded" src="./media/<?php echo $row['url']; ?> " alt="<?php echo $row['url']; ?> ">
	  	</div>
	  	<div class="card-body text-center">
	    	<h5 class="card-title"><?php echo $row['name']; ?> </h5>
	    	<p class="card-text"><?php echo $row['description']; ?> </p>
	    	<button class="btn btn-primary btnCardProduct" id="<?php echo $row['idproducts']; ?>">Ajout dans le panier2</button>
	  	</div>
	</div>
</div>
<?php ENDFOREACH; ?>



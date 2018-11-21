    <?php 
    session_start(); 
    include('./header.html'); 
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
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <img src="media/COLO.png">
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Facture #456</p>
                            <p class="text-muted">Date: 20 Novembre, 2018</p>
                            <p class="font-weight-bold">Id client 56</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Information sur le Client</p>
                            <p class="mb-1">Monsieur Dupont Paul</p>
                            <p>8 route de la liberte</p>
                            <p class="mb-1">France, Paris</p>
                            <p class="mb-1">Code postal 75000</p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Paiement</p>
                            <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                            <p class="mb-1"><span class="text-muted">Type: </span> Carte bleue</p>
                            <p class="mb-1"><span class="text-muted">Nom du client: </span> Dupont Paul</p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Article</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantites</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Prix unité</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Veste</td>
                                        <td>Couleur unie</td>
                                        <td>2</td>
                                        <td>12.53€ TTC</td>
                                        <td>25.06€ TTC</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Montre</td>
                                        <td>Couleur noir</td>
                                        <td>1</td>
                                        <td>12.53€ TTC</td>
                                        <td>12.53€ TTC</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sac a Main</td>
                                        <td>Couleur unie</td>
                                        <td>1</td>
                                        <td>12.53€ TTC</td>
                                        <td>12.53€ TTC</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Prix Total</div>
                            <div class="h2 font-weight-light">50.12€ TTC</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
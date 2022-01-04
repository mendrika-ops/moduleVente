<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Resultat</title>
    <link href="<?php echo (base_url()); ?>assets/css/bootstrap.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo (base_url()) ?>">Home</a>
        <a class="navbar-brand" href="<?php echo (base_url()) ?>AfficherResultat">All product</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Tous les produits</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Nom du produit</th>
                        <th scope="col">Prix unitaire</th>
                        <th scope="col">Description du produit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($id); $i++) { ?>
                        <tr>
                            <form method="GET" action="<?php echo (base_url()) ?>AjoutProduit">
                                <th><input class="form-control" type="text" name="idProduit" id="idProduit" value="<?php echo ($id[$i]) ?>" style="border:none;background:transparent" readonly /></th>
                                <td><input class="form-control" type="text" name="labelProduit" id="labelProduit" value="<?php echo ($label[$i]) ?>" style="border:none;background:transparent" readonly /></td>
                                <td><input class="form-control" type="text" name="prixUnitaireProduit" id="prixUnitaireProduit" value="<?php echo ($prixUnitaire[$i]) ?>" style="border:none;background:transparent" readonly /></td>
                                <td><input class="form-control" type="text" name="descriptionProduit" id="descriptionProduit" value="<?php echo ($description[$i]) ?>" style="border:none;background:transparent" readonly /></td>
                                <td><input class="form-control" type="number" name="quantiteProduit" id="quantiteProduit" style="width:100px" required/></td>
                                <td><button type="submit" class="btn btn-dark">Ajouter</button></td>
                        </tr>
                        </form>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
</body>

</html>
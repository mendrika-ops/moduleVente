<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"  rel="stylesheet" meadia="all">
    <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" meadia="all">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Formulaire de recherche</h2>
            <div class="col-md-12">
            <form action="<?php echo base_url('RechercheController/recherche');?>" method="GET">
            <div class="row">
                <div class="col">
                <label class="form-check-label" for="labelProduit">Label Produit:</label>
                <input type="text" class="form-control" placeholder="First name" id="labelProduit"  name="label" required>
                </div>
                <div class="col">
                <label class="form-check-label" for="IdFabriquant">Fabriquant:</label>
                <input type="number" min="0" class="form-control" placeholder="IdFabriquant" id="IdFabriquant" name="fabriq" required>
                </div>
                <div class="col">
                <label class="form-check-label" for="PrixMin">Prix minimum:</label>
                <input type="text" class="form-control" placeholder="Prix minimum" id="PrixMin" name="Pmin" required>
                </div>
                <div class="col">
                <label class="form-check-label" for="prixMax">Prix maximum:</label>
                <input type="text" class="form-control" placeholder="Prix maximum" id="prixMax" name="Pmax" required>
                </div>
            </div>
            <div class="row align-center">
                <div class="col">
                <input type="submit" value="valider" class="btn btn-primary">
                </div>
            </div>
        </form>
                
            </div>
        </div>
    </div>
    <?php if(isset($results)) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <table class="table">
        <thead>
            <tr>
            <th scope="col">idProduit</th>
            <th scope="col">Nom produit</th>
            <th scope="col">Fabriquant</th>
            <th scope="col">Prix</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($results); $i++) {?>
            <tr>
                <th scope="row"><?php echo $results[$i]['id'] ?></th>
                <td><?php echo $results[$i]['label'] ?></td>
                <td><?php echo $results[$i]['idFabricant'] ?></td>
                <td><?php echo $results[$i]['prixUnitaire'] ?></td>
             </tr>
             <?php  } ?>
        </tbody>
        </table>
                    </div>
                </div>
            </div>
            <?php } ?>

</body>
</html>
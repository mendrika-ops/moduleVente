<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body style="background-color: whitesmoke">
    <div class="container centered col-8" >
        <h3>Formulaire de vente</h3>
        <form action="Traitform/insert" method="get">
            <div class="mb-3">
                <label>Label Vente</label>
                <input class="form-control" type="text" name="labelvente">             
            </div>
            <div class="mb-3">
                <label>Reference Bon de Commande</label>
                <input type="text" class="form-control" name="Ref">          
            </div>
            <div class="mb-3">
                <label>Reference Proformat</label>
                <select class="form-control" name="RefProform">
                    <?php for($i=0;$i<count($proformat);$i++) {?>
                        <option value="<?php echo $proformat[$i]['id'] ?>"><?php echo $proformat[$i]['label'] ?></option>
                    <?php }?>
                </select>
            </div>
            <div class="mb-3">
                <label >Date de Saisie</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="mb-3">
                <label >NIF stat</label>
                <input type="text" class="form-control" name="nif">
            </div>
            <div class="mb-3">
                <label >Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <input type="submit" class="btn btn-primary" value="valider">                
        </form>
    </div>
</body>
</html>

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
    <div class="container centered col-8" style="background-color: #aaaaaa">
        <h3>Formulaire de vente</h3>
        <?php echo form_open(site_url('Traitform/insert'),['class'=>'col-10','method'=>'get']) ?>
        <div class="mb-3">
            <?php echo form_label('Label Vente','label Vente',['class'=>'form-label']) ?>
            <?php echo form_input(['class'=>'form-control','name'=>'labelvente']) ?>
        </div>
        <div class="mb-3">
            <?php echo form_label('Reference bon de commande','Reference bon de commande',['class'=>'form-label']) ?>
            <select name="Ref" id="">
                <?php for($i=0;$i<count($Ref);$i++) {?>
                    <option value="<?php echo $Ref[$i]['idBonDeCommande'] ?>"><?php echo $Ref[$i]['label'] ?></option>
                <?php }?>
            </select>
        </div>

        <div class="mb-3">
            <?php echo form_label('Reference Proformat','Reference Proformat',['class'=>'form-label']) ?>
            <?php echo form_input(['type'=>'text','class'=>'form-control','name'=>'RefProform']) ?>
        </div>

        <div class="mb-3">
            <?php echo form_label('Date de Saisie','Date de Saisie',['class'=>'form-label']) ?>
            <?php echo form_input(['type'=>'date','class'=>'form-control','name'=>'date']) ?>
        </div>
        <div class="mb-3">
            <?php echo form_label('nif','nif',['class'=>'form-label']) ?>
            <?php echo form_input(['type'=>'text','class'=>'form-control','name'=>'nif']) ?>
        </div>
        <div class="mb-3">
            <?php echo form_label('Description','Description',['class'=>'form-label']) ?>
            <?php echo form_textarea(['type'=>'text','class'=>'form-control','name'=>'description']) ?>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
        <?php echo form_close() ?>
    </div>

</body>
</html>

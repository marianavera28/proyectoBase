<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
<a href="<?= Url::toRoute("site/upload") ?>">Cargar un nuevo Archivo</a>
 <br>

 <?= $msg #Yii::$app->session->getFlash('errordownload'); ?>

<h3>Lista de archivos a descargar</h3>
<table class="table table-bordered">
    <tr>
        <th>Nombre del Archivo</th>
        <th></th>
    </tr>
   <?php 

   foreach($model as $row): ?>
    <tr>
        <td><?= $row->nombre ?></td>
        <td><a href="<?= Url::toRoute(["site/download", "file" => $row->nombre.'.'.$row->extension]) ?>">Descargar archivo</a></td>
    </tr>
    <?php endforeach ?>
</table>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sumber */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sumber-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sekolah')->textInput() ?>

    <?= $form->field($model, 'id_bulan_aktif')->textInput() ?>

    <?= $form->field($model, 'sumber')->textInput() ?>

    <?= $form->field($model, 'pengeluaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pengeluaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengeluaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sekolah')->textInput() ?>

    <?= $form->field($model, 'id_bulan_aktif')->textInput() ?>

    <?= $form->field($model, 'tekor')->textInput() ?>

    <?= $form->field($model, 'dll')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

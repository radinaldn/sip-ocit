<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BulanAktif */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bulan-aktif-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bulan')->dropDownList([ 'Januari' => 'Januari', 'Februari' => 'Februari', 'Maret' => 'Maret', 'April' => 'April', 'Mei' => 'Mei', 'Juni' => 'Juni', 'Juli' => 'Juli', 'Agustus' => 'Agustus', 'September' => 'September', 'Oktober' => 'Oktober', 'November' => 'November', 'Desember' => 'Desember', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

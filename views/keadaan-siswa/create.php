<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KeadaanSiswa */

$this->title = 'Create Keadaan Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Keadaan Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keadaan-siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

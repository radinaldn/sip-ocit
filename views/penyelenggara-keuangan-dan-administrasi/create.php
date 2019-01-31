<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PenyelenggaraKeuanganDanAdministrasi */

$this->title = 'Create Penyelenggara Keuangan Dan Administrasi';
$this->params['breadcrumbs'][] = ['label' => 'Penyelenggara Keuangan Dan Administrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyelenggara-keuangan-dan-administrasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

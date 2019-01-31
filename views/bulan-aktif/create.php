<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BulanAktif */

$this->title = 'Create Bulan Aktif';
$this->params['breadcrumbs'][] = ['label' => 'Bulan Aktifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bulan-aktif-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

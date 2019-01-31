<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TanahBangunan */

$this->title = 'Create Tanah Bangunan';
$this->params['breadcrumbs'][] = ['label' => 'Tanah Bangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanah-bangunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

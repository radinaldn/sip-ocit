<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sumber */

$this->title = 'Create Sumber';
$this->params['breadcrumbs'][] = ['label' => 'Sumbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sumber-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

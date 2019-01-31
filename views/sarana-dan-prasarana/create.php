<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SaranaDanPrasarana */

$this->title = 'Create Sarana Dan Prasarana';
$this->params['breadcrumbs'][] = ['label' => 'Sarana Dan Prasaranas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sarana-dan-prasarana-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

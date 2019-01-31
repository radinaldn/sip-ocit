<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mobiler */

$this->title = 'Create Mobiler';
$this->params['breadcrumbs'][] = ['label' => 'Mobilers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobiler-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

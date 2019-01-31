<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerlengkapanPembelajaran */

$this->title = 'Create Perlengkapan Pembelajaran';
$this->params['breadcrumbs'][] = ['label' => 'Perlengkapan Pembelajarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perlengkapan-pembelajaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataDesaKelurahan */

$this->title = 'Tambah Desa Kelurahan';
$this->params['breadcrumbs'][] = ['label' => 'Desa Kelurahan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desa-kelurahan-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>

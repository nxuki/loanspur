<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
<?
// default with label
echo Progress::widget([
    'percent' => 60,
    'label' => 'test',
]);

// styled
echo Progress::widget([
    'percent' => 65,
    'barOptions' => ['class' => 'progress-bar-danger']
]);

// striped
echo Progress::widget([
    'percent' => 70,
    'barOptions' => ['class' => 'progress-bar-warning'],
    'options' => ['class' => 'progress-striped']
]);

// striped animated
echo Progress::widget([
    'percent' => 70,
    'barOptions' => ['class' => 'progress-bar-success'],
    'options' => ['class' => 'active progress-striped']
]);

// stacked bars
echo Progress::widget([
    'bars' => [
        ['percent' => 30, 'options' => ['class' => 'progress-bar-danger']],
        ['percent' => 30, 'label' => 'test', 'options' => ['class' => 'progress-bar-success']],
        ['percent' => 35, 'options' => ['class' => 'progress-bar-warning']],
    ]
]);

    <code><?= __FILE__ ?></code>
</div>

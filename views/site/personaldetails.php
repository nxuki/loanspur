<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
<?= $form->field($model, 'Firstname') ?>
<?= $form->field($model, 'Lastname') ?>
<?= $form->field($model, 'Idnumber') ?>
<?= $form->field($model, 'Email') ?>
<?= $form->field($model, 'PhoneNumber') ?>
<?= $form->field($model, 'PostalAdress') ?>
<?= $form->field($model, 'PostalCode') ?>
<?= $form->field($model, 'City') ?>
<?= $form->field($model, 'Region') ?>
<?= $form->field($model, 'Country') ?>
<div class="form-group">
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
</div>
<?php ActiveForm::end(); ?>
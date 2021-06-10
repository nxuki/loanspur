<?php

/* @var $this yii\web\View */
use yii\bootstrap\Tabs;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
$this->title = 'Sign-Up Form';
?>

<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
<?= Html::img('@web/images/1.jpg', [

'alt' => 'pic not found',

'width' => '100px',

'height' => '60px'
]); ?>  
<div class="row" >

<h2><b> Umoja Magharibi SIgn-Up Form</h2></b> <br>
   <div class="col-lg-5">

<?= Tabs::widget([ 
        'items' => [
            [
                'label' => 'PERSONAL DETAILS',
                'content' => $this->render('personaldetails', ['model' => $model, 'form' => $form]),
                'active' => true
            ],
            [
                'label' => 'PRODUCT TYPE',
                'content' => $this->render('personaldetails', ['model' => $model, 'form' => $form]),
            ],
            [
                'label' => 'BANK DETAILS',
                'content' => $this->render('personaldetails', ['model' => $model, 'form' => $form]),
            ],
            
        ]]);
 ?>
  
    </div>
    </div>
        </div>
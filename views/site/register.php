<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = Yii::t('app','Sign Up');
#$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<p><?= Yii::t('app','Please register yourself') ?></p>

<?php $registerFrom = ActiveForm::begin([
    'id' => 'register-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]); ?>
<?= $registerFrom->errorSummary($newUser); ?>
<?= $registerFrom->field($newUser, 'username')->textInput(['autofocus' => true]) ?>
<?= $registerFrom->field($newUser, 'email')->textInput() ?>

<?= $registerFrom->field($newUser, 'password')->passwordInput(['value'=>'']) ?>


<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>

<?php


use yii\helpers\Url;
use yii\helpers\Html;
$activationUrl=Url::to(['/site/activate/','user'=>$user->id,'token'=>$user->uid],true);
echo Yii::t('app','Please click on the {link}',[
    'link'=>Html::a('activation_link',$activationUrl)
]);
 echo $user->id;
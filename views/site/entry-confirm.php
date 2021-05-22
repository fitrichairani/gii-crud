<?php
use yii\helpers\Html;
?>
<p>Terimakasih sudah menginputkan pada form :</p>
<ul>
	<li><label>Name</label>: <?=Html::encode($model->name) ?></li>
	<li><label>Email</label>: <?=Html::encode($model->email) ?></li>
</ul>
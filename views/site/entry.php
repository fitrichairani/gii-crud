<?php
use yii\helpers\Html;
use yii\widgets\ActionForm; ?>
<?php $form = ActiveForm::begin(); ?>
	<?= %form->field($model, 'name') ?>
	<?= %form->field($model, 'email') ?>
<div class="form-group">
	<?= Html::submitButton('Submit', ['class'=> 'btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>
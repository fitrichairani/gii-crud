<?php  
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Data Prodi</h1>
<table class="table table-hover">
	<tr>
		<td>id</td>
		<td>Prodi</td>
		<td>Keterangan</td>
	</tr>
	<?php foreach ($data_prodi as $prodi):?>
		<tr>
			<td><?= Html::encode($prodi->id) ?></td>
			<td><?= Html::encode($prodi->prodi) ?></td>
			<td><?= Html::encode($prodi->keterangan) ?></td>
		</tr>
	<?php endforeach ?>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
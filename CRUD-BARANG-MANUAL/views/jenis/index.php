<?php  
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Data Jenis</h1>
<table class="table table-hover">
	<tr>
		<td>ID</td>
		<td>Nama Jenis</td>
		<td>Keterangan</td>
	</tr>
	<?php foreach ($data_jenis as $jenis):?>
		<tr>
			<td><?= Html::encode($jenis->id_jenis) ?></td>
			<td><?= Html::encode($jenis->nama_jenis) ?></td>
			<td><?= Html::encode($jenis->keterangan) ?></td>
		</tr>
	<?php endforeach ?>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
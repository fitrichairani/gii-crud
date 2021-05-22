<?php  
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Data Barang</h1>
<p>
	<?= Html::a('Create Barang', ['create'], ['class' => 'btn btn-success']) ?>
</p>
<table class="table table-hover">
	<tr>
		<td>ID</td>
		<td>Kode Barang</td>
		<td>Nama Barang</td>
		<td>Satuan</td>
		<td>ID Jenis</td>
		<td>ID Supplier</td>
		<td>Harga</td>
		<td>Stok</td>
		<td>Aksi</td>
	</tr>
	<?php foreach ($data_barang as $barang): ?>
		<tr>
			<td><?= Html::encode($barang->id)?></td>
			<td><?= Html::encode($barang->kode_barang)?></td>
			<td><?= Html::encode($barang->nama_barang)?></td>
			<td><?= Html::encode($barang->satuan)?></td>
			<td><?= Html::encode($barang->id_jenis)?></td>
			<td><?= Html::encode($barang->id_supplier)?></td>
			<td><?= Html::encode($barang->harga)?></td>
			<td><?= Html::encode($barang->stok)?></td>
			<td>
				<?= Html::a('Edit', ['barang/update','id'=>$barang->id])?> |
				<?= Html::a('Hapus', ['barang/delete','id'=>$barang->id],
				['onclick'=>'return(confirm("Yakin Menghapus data ?"))'])?>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<?= LinkPager::widget(['pagination' => $pagination])?>
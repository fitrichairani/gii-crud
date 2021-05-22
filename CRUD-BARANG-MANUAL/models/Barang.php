<?php  
namespace app\models;

use yii\db\ActiveRecord;

/**
 * 
 */
class Barang extends ActiveRecord
{
	
	public static function tableName()
	{
		# code...
		return 'barang';
	}

	public function rules()
	{
		# code...
		return[
			[['kode_barang','nama_barang','satuan','id_jenis','id_supplier','harga','stok'], 'required'],
			[['kode_barang','nama_barang','satuan'], 'string'],
			[['harga'], 'double'],
			[['id_jenis','id_supplier','stok'], 'integer']
		];
	}
}

?>
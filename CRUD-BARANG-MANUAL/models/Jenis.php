<?php  

namespace app\models;

use yii\db\ActiveRecord;

/**
 * 
 */
class Jenis extends ActiveRecord
{
	
	public static function tableName()
	{
		# code...
		return 'jenis';
	}
}

?>
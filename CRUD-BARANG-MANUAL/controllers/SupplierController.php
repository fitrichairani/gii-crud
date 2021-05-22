<?php  
namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\supplier;

/**
 * 
 */
class SupplierController extends Controller
{
	
	public function actionIndex()
	{
		# code...
		$query = Supplier::find();
		$pagination = new Pagination(['defaultPageSize' => 10, 
			'totalCount' => $query->count()]);
		$data_supplier = $query->orderBy('id_supplier')
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		return $this->render('index', ['data_supplier' => $data_supplier, 'pagination' => $pagination,]);
	}
}

?>
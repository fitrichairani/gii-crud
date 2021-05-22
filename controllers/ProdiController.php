<?php  
namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Prodi;

/**
 * 
 */
class ProdiController extends Controller
{
	
	public function actionIndex()
	{
		# code...
		$query = Prodi::find();
		$pagination = new Pagination(['defaultPageSize' => 10, 
			'totalCount' => $query->count()]);
		$data_prodi = $query->orderBy('id')
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		return $this->render('index', ['data_prodi' => $data_prodi, 'pagination' => $pagination,]);
	}
}

?>
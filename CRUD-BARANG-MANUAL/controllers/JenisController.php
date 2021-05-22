<?php  
namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\jenis;

/**
 * 
 */
class JenisController extends Controller
{
	
	public function actionIndex()
	{
		# code...
		$query = Jenis::find();
		$pagination = new Pagination(['defaultPageSize' => 10, 
			'totalCount' => $query->count()]);
		$data_jenis = $query->orderBy('id_jenis')
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		return $this->render('index', ['data_jenis' => $data_jenis, 'pagination' => $pagination,]);
	}
}

?>
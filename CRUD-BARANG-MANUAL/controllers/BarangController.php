<?php  
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Barang;

/**
 * 
 */
class BarangController extends Controller
{
	
	public function actionIndex()
	{
		# code...
		$query = Barang::find();
		$pagination = new Pagination(['defaultPageSize' => 10,
			'totalCount' => $query->count()]);
		$data_barang = $query->orderBy('id')
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		return $this->render('index',
			['data_barang' => $data_barang,
			'pagination' => $pagination,]);
	}

	public function actionCreate()
	{
		# code...
		$model = new Barang();

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			# code...
			Yii::$app->session->setFlash('success','Data Berhasil disimpan');
			return $this->refresh();
		}

		return $this->render('create', ['model' => $model,]);
	}

	public function actionUpdate($id)
	{
		# code...
		$model = Barang::findOne($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			# code...
			Yii::$app->session->setFlash('success','Data Berhasil diubah');
			return $this->refresh();
		}
		return $this->render('update',['model' => $model,]);
	}

	public function actionDelete($id)
	{
		# code...
		$model = Barang::findOne($id);
		$model->delete();
		return $this->redirect(['index']);
	}
}
?>
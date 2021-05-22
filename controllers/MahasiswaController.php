<?php  
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Mahasiswa;

/**
 * 
 */
class MahasiswaController extends Controller
{
	
	public function actionIndex()
	{
		# code...
		$query = Mahasiswa::find();
		$pagination = new Pagination(['defaultPageSize' => 10,
			'totalCount' => $query->count()]);
		$data_mahasiswa = $query->orderBy('id')
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		return $this->render('index',
			['data_mahasiswa' => $data_mahasiswa,
			'pagination' => $pagination,]);
	}

	public function actionCreate()
	{
		# code...
		$model = new Mahasiswa();

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
		$model = Mahasiswa::findOne($id);

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
		$model = Mahasiswa::findOne($id);
		$model->delete();
		return $this->redirect(['index']);
	}
}
?>
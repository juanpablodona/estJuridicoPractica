<?php

namespace app\controllers;

use app\models\ClienteSearch;
use app\models\Expediente;
use app\models\ExpedienteSearch;
use app\models\ProfesionalSearch;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ExpedienteController implements the CRUD actions for Expediente model.
 */
class ExpedienteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Expediente models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ExpedienteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Expediente model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Expediente model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $cliId=array();
        $proId=array();
        $cliN=array();
        $proN=array();
        $model = new Expediente();
        $clientes= ClienteSearch::listarClientes();
        $profesionales= ProfesionalSearch::listarProfesionales();
        
        
        foreach ($clientes as $cliente) {
            array_push($cliId, $cliente->idcliente);
            array_push($cliN, $cliente->nombre . ', '. $cliente->apellido);
        }
        
        foreach ($profesionales as $profesional) {
            array_push($proId, $profesional->idprofesional);
            array_push($proN, $profesional->nombre . ', '. $profesional->apellido);
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idexpediente]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'cliId'=>$cliId,
                'proId'=> $proId,
                'cliN'=>$cliN,
                'proN'=> $proN,
            ]);
        }
    }

    /**
     * Updates an existing Expediente model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idexpediente]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Expediente model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Expediente model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Expediente the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Expediente::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

<?php
  namespace app\controllers;

  class HelloController extends \yii\web\Controller
  {

    public function actionIndex()
    {
    return $this->render('index');
    }
    public function actionProfile()
    {
      return $this->render('profile');
    }
    public function actionTest()
    {
      return $this->render('index');
    }

  }


?>

<?php
  namespace app\controllers;

  class HelloController extends \yii\web\Controller
  {

    public function actionIndex()
    {
    $first = 'Rohimee';
    $last = 'Dueramae';
    $weigth = 54;

    return $this->render('index',[
      'firstname'=>$first,
      'lastname'=>$last,
      'weigth'=>$weigth
    ]);
    }
    public function actionProfile()
    {
      return $this->render('profile');
    }
    public function actionTest()
    {
      return $this->render('index');
    }
    public function actionProduct($id,$brand=null)
    {
      return $this->render('product',[
        'id'=>$id,
        'brand'=>$brand
    ]);
    }

  }


?>

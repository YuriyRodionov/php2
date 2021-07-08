<?php


namespace app\controllers;


use app\engine\App;
use app\engine\Request;
use app\engine\Session;
use app\models\entities\Order;
use app\models\repositories\OrderRepository;

class OrderController extends Controller {
    public function actionNew() {
        $name = App::call()->request->getParams()['name'];
        $phone = App::call()->request->getParams()['phone'];
        $session_id = session_id();
        $order = new Order($name, $phone, $session_id);
        App::call()->orderRepository->save($order);
        header("Location: /");
        App::call()->session->regenerate();
        die();
    }
}
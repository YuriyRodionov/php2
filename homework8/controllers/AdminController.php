<?php


namespace app\controllers;


use app\engine\App;

use app\models\repositories\OrderRepository;
use app\models\repositories\UsersRepository;
use app\models\entities\Order;

class AdminController extends Controller
{

    public function actionIndex() {
        
        if(!(App::call()->usersRepository->isAdmin())) {
            echo 'Доступ запрещен';
            Die();
        }

        $orders = App::call()->orderRepository->getAll();

        

        echo $this->render('admin', [
            'orders' => $orders
        ]);
    }

    public function actionView() {
        $sessionId = App::call()->request->getParams()['session_id'];
        $total = App::call()->orderRepository->getOrderSum($sessionId);

        $order = App::call()->orderRepository->getOrder($sessionId);

        echo $this->render('order', [
            'order' => $order,
            'total' => $total['sum']
        ]);
    }

    public function actionChange() {
        $status = App::call()->request->getParams()['stat'];
        // Как правильнее тут прокинуть id заказа?
        $order = App::call()->orderRepository->getOne();
        App::call()->orderRepository->save($order);
        header("Location: /admin/view");
    }
}
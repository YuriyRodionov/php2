<h2>Админка</h2>


<?php foreach($orders as $order):?>
	<div class="table" style="display:flex">
	<span>Заказ номер <?=$order['id']?> Имя покупателя: <?=$order['name']?> Телефон: <?=$order['phone']?> Статус заказа: <?=$order['status']?></span>
    <form action="/admin/view" method="post">
        <input type="text" name="session_id" hidden value="<?=$order['session_id']?>">
        <button>Посмотреть заказ</button> 
    </form>
	</div>
<?endforeach;?>
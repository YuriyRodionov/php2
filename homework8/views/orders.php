<h2>Админка</h2>
<?php foreach($orders as $order):?>
	<div class="table" style="display:flex">
	<span>Заказ номер <?=$order['id']?> Имя покупателя: <?=$order['name']?> Телефон: <?=$order['phone']?> Статус заказа: <?=$order['status']?></span><a href="/order.php?id=<?=$order['id']?>">Посмотреть заказ</a>
	</div>
<?endforeach;?>
<h2>Информация о заказе</h2>


<?php foreach($order as $item):?>
    <p>Код Товара: <?=$item['catalog_id']?> Название товара: <?=$item['name']?> Цена товара: <?=$item['price']?></p>
<?endforeach;?>

<p>Общая сумма заказа: <?=$total?></p>
<p>Статус заказа: <form action="/admin/change" method="POST">
                    <select name="stat">
                        <option value="accepted" selected>accepted</option>
                        <option value="decline">decline</option>
                        <option value="shipment">shipment</option>
                    </select>
                    <button>Подтвердить</button>
                   
    
                    </form> </p>
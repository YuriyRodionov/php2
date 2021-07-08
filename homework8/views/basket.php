<h2>Корзина</h2>

<?php if (!empty($basket)): ?>
    <?php foreach ($basket as $item): ?>
        <div id="<?= $item['cart_id'] ?>">
            <h2><?= $item['name'] ?></h2>
            <p>Описание: <?= $item['description'] ?></p>
            <p>Цена:<?= $item['price'] ?></p>

            <button data-id="<?= $item['cart_id'] ?>" class="delete">Удалить</button>
        </div>
    <? endforeach; ?>
    <br>
    
        
         
            <form action="/order/new/" method="post">
                <input type="text" name="name" placeholder="Имя">
                <input type="text" name="phone" placeholder="Телефон">
                <input type="submit" value="Оформить заказ">
            </form>
   
<?php else: ?>
    Корзина пуста
<?php endif; ?>

<script>
    let buttons = document.querySelectorAll('.delete');
    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch('/basket/delete', {
                        method: 'POST',
                        headers: {'Content-Type': 'application/json;charset=utf-8'},
                        body: JSON.stringify({
                            id: id
                        })
                    });
                    const answer = await response.json();
                    document.getElementById('count').innerText = answer.count;
                    document.getElementById(id).remove();
                }
            )();
        })
    });
</script>

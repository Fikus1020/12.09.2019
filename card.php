<?php
echo('
<div class="item card">
<div class="info">
    <img class="photo" src="jeep1.img">
    <p class="price">Cena: <span class="price-value">217$</span></p>
    <span class="promo">Promocja</span>
    <div class="size">Kolor:
        <ul class="list">
            <li class="size-item">Szybki</li>
            <li class="size-item">Szybszy</li>
            <li class="size-item">Wolniejszy</li>
        </ul>
        <form action="delete.php method="POST">
        <input type="submit" name="usun" value="usuwanie">
        </form>
    </div>
</div>
</div>');
?>

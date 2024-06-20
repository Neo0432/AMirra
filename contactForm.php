<?
$title = $args['title'];
$text = $args['text'];
$img = $args['img'];
?>

<div class="contactUs-content">
    <img alt="" src=<?= $img ?>>
    <div class="contactUs-content-leftGroup">
        <div class="contactUs-content-leftGroup-textArea">
            <p><?= $title ?></p>
            <p><?= $text ?></p>
        </div>
        <form action="post">
            <p>Для связи с нами заполните форму</p>
            <div class="contactUs-content-leftGroup-form-textInputs">
                <input type="text" placeholder="Ваше имя">
                <input type="tel" placeholder="+7 (ХХХ) ХХХ ХХ ХХ">
            </div>
            <div class="contactUs-content-leftGroup-form-checkbox">
                <input type="checkbox" id="confpolicy_id">
                <label class="checkbox-class checkbox-class-checkbox" for="confpolicy_id">
                    Подтверждаю своё согласие<br><a href="#">с политикой конфиденциальности</a>
                </label>
            </div>
            <button class="buttonAnimation" type="submit">Записаться</button>
        </form>
    </div>
</div>

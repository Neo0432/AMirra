<footer class="footer">
    <div class="footer-content">
        <div class="footer-content-gruops">
            <div class="footer-content-groups-contacts">
                <div class="footer-content-groups-contacts-text">
                    <p><?= get_field('phone_one', 'option'); ?></p>
                    <p><?= get_field('phone_two', 'option'); ?></p>
                    <p><?= get_field('location', 'option'); ?></p>
                </div>
                <div class="footer-content-groups-contacts-map">
                    <iframe 
                        src="https://yandex.ru/map-widget/v1/?from=mapframe&ll=73.353309%2C54.998318&mode=search&oid=170698736376&ol=biz&z=16" 
                        allowfullscreen="true" 
                        style="position:relative;">
                    </iframe>   
                </div>
            </div>
            <div class="footer-content-groups-form">
                <div class="footer-content-groups-form-textArea">
                    <p>Здесь решаются проблемы</p>
                    <p>
                        Не откладывайте своё благополучие на потом. 
                        Оставьте контактные данные на нашем сайте, 
                        и мы свяжемся с вами в ближайшее время
                    </p>
                </div>
                <div class="footer-content-groups-form-formArea">
                    <form action="">
                        <div class="footer-contetn-gpoups-form-formArea-textInputs">
                            <input type="text" placeholder="Ваше имя">
                            <input type="text" placeholder="+7 (ХХХ) ХХХ ХХ ХХ">
                        </div>
                        <div class="footer-contetn-gpoups-form-formArea-checkbox">
                            <input type="checkbox" id="confpolicy_id_footer">
                            <label for="confpolicy_id_footer">
                                Подтверждаю своё согласие<br><a href="#">с политикой конфиденциальности</a>
                            </label>
                        </div>
                        <button class="buttonAnimation" type="submit">Записаться</button>
                    </form>
                    <img src= <?= get_template_directory_uri() . "/assets/images/footer/FormHero.svg?1"?> alt="">
                </div>
            </div>
        </div>
        <div class="footer-content-about">
            <div class="footer-content-about-links">
                <?php
                    $links = get_field('links', 'option');
                    foreach ($links as $link){
                        echo '<a href=' . $link['link_url'] . '>' . $link['link'] . '</a>';
                    }
                ?>
            </div>
            <div class="footer-content-about-visibility">
                <a href="">
                    <img src = <?= get_template_directory_uri() . "/assets/images/footer/visibility.svg"?> alt="">
                    <p>версия для слабовидящих</p>
                </a>
            </div>
            <div class="footer-content-about-docs">
                <a href="">политика конфиденциальности</a>
                <a href="">договор оферты</a>
                <p>сайт создан в <a href="">IT company ASMART</a></p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
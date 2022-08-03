<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package euromedia
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer-item footer-contacts">
            <p class="footer-contacts__license">© 2018 Robinson Club. Официальный сайт</p>
            <div class="footer-contacts__body">
                <p class="footer-contacts__body-title">Hotel & Call Center</p>
                <a href="#" class="footer-contacts__body-link">+375 44 502 13 33</a>
                <a href="#" class="footer-contacts__body-link">reception@mail.ru</a>
            </div>
        </div>
        <div class="footer-item footer-main">
            <p class="footer-main__txt">
                ООО «Табак-инвест»<br>
                (Юр. адрес) Беларусь, 220073, г. Минск, ул. Гусовского, 22<br>
                Филиал «Робинсон клуб»<br>
                223035, Минская обл., Минский р-н, п/о Ратомка, Ждановичский с/с, 16/1<br>
                УНП 601070700
            </p>
            <div class="footer-main__body">
                <div class="footer-main__body-item">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/footer_1.png" alt="">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/footer_2.png" alt="">
                </div>
                <div class="footer-main__body-item">
                    <span>Как к нам добраться</span>
                </div>
                <div class="footer-main__body-item">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/footer_payment.png" alt="">
                </div>
            </div>
        </div>
        <div class="footer-item footer-ui">
            <ul class="footer-social">
                <li class="footer-social__item">
                    <a href="#" class="footer-social__link">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li class="footer-social__item">
                    <a href="#" class="footer-social__link">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li class="footer-social__item">
                    <a href="#" class="footer-social__link">
                        <i class="fa-brands fa-vk"></i>
                    </a>
                </li>
                <li class="footer-social__item">
                    <a href="#" class="footer-social__link">
                        <i class="fa-brands fa-telegram"></i>
                    </a>
                </li>
                <li class="footer-social__item">
                    <a href="#" class="footer-social__link">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="cb-block">
        <button class="cb-btn" type="button">
            <svg class="cb-btn__open-icon" role="presentation" class="t651__icon" style="fill:#ffffff;"
                 xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 19.3 20.1">
                <path d="M4.6 7.6l-.5-.9 2-1.2L4.6 3l-2 1.3-.6-.9 2.9-1.7 2.6 4.1"></path>
                <path d="M9.9 20.1c-.9 0-1.9-.3-2.9-.9-1.7-1-3.4-2.7-4.7-4.8-3-4.7-3.1-9.2-.3-11l.5.9C.2 5.7.4 9.7 3 13.9c1.2 2 2.8 3.6 4.3 4.5 1.1.6 2.7 1.1 4.1.3l1.9-1.2L12 15l-2 1.2c-1.2.7-2.8.3-3.5-.8l-3.2-5.2c-.7-1.2-.4-2.7.8-3.5l.5.9c-.7.4-.9 1.3-.5 2l3.2 5.2c.4.7 1.5.9 2.2.5l2.8-1.7 2.6 4.1-2.8 1.7c-.7.5-1.4.7-2.2.7zM13.7 11.3l-.9-.3c.4-1.1.2-2.2-.4-3.1-.6-1-1.7-1.6-2.8-1.7l.1-1c1.5.1 2.8.9 3.6 2.1.7 1.2.9 2.7.4 4z"></path>
                <path d="M16.5 11.9l-1-.3c.5-1.8.2-3.7-.8-5.3-1-1.6-2.7-2.6-4.7-2.9l.1-1c2.2.3 4.2 1.5 5.4 3.3 1.2 1.9 1.6 4.1 1 6.2z"></path>
                <path d="M18.9 12.5l-1-.3c.7-2.5.2-5.1-1.1-7.2-1.4-2.2-3.7-3.6-6.3-4l.1-1c2.9.4 5.4 2 7 4.4 1.6 2.4 2.1 5.3 1.3 8.1z"></path>
            </svg>
            <svg class="cb-btn__close-icon" width="16px" height="16px" viewBox="0 0 23 23" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="#000" fill-rule="evenodd">
                    <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                          x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                    <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                          x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                </g>
            </svg>
        </button>
        <div class="cb-popup">
            <div class="cb-form__header">
                <h3 class="cb-form__title">Форма обратной связи</h3>
            </div>
            <div class="cb-form__body">
                <?= do_shortcode( '[contact-form-7 id="509" html_class="cb-form" title="Заказать звонок"]') ?>
                <!-- <form class="cb-form" action="">
                    <input type="text" placeholder="Номер телефона">
                    <button class="cb-form__submit">жду звонка</button>
                </form> -->
            </div>
        </div>
    </div>
</footer>
<div class="loader">
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="dark-bg"></div>
</div>

<?php wp_footer(); ?>

</body>
</html>

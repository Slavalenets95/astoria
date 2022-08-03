<?php $cartEmpty = !WC()->cart->get_cart_contents_total() && !WC()->cart->get_cart_contents_count(); ?>
<div class="custom-cart <?= $cartEmpty ? '' : 'custom-cart--not-empty' ?> woocommerce">
    <div class="custom-cart-info">
        <div class="custom-cart-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.559 7l4.701-4.702c.198-.198.459-.298.72-.298.613 0 1.02.505 1.02 1.029 0 .25-.092.504-.299.711l-3.26 3.26h-2.882zm12 0h2.883l-4.702-4.702c-.198-.198-.459-.298-.72-.298-.613 0-1.02.505-1.02 1.029 0 .25.092.504.299.711l3.26 3.26zm3.703 4l-.016.041-3.598 8.959h-9.296l-3.597-8.961-.016-.039h16.523zm3.738-2h-24v2h.643c.535 0 1.021.304 1.256.784l4.101 10.216h12l4.102-10.214c.234-.481.722-.786 1.256-.786h.642v-2zm-14 5c0-.552-.447-1-1-1s-1 .448-1 1v3c0 .552.447 1 1 1s1-.448 1-1v-3zm3 0c0-.552-.447-1-1-1s-1 .448-1 1v3c0 .552.447 1 1 1s1-.448 1-1v-3zm3 0c0-.552-.447-1-1-1s-1 .448-1 1v3c0 .552.447 1 1 1s1-.448 1-1v-3z"/></svg>
        </div>
        <div class="custom-cart-info__content">
            <?php if($cartEmpty) : ?>
                <span class="custom-cart-info__txt">Ваша корзина пуста</span>
            <?php else : ?>
                <div class="custom-cart-info__content-summ">
                    <span>Ваш заказ</span>
                    <div>
                        <span class="custom-cart-info__count"><?= WC()->cart->get_cart_contents_count() ?> блюд</span>
                        <span class="custom-cart-info__amount"><?= WC()->cart->get_cart_contents_total() ?> BYN</span>
                        <div class="custom-cart-info__content-icon">
                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.001 13.022h-3.251c-.412 0-.75.335-.75.752 0 .188.071.375.206.518 1.685 1.775 4.692 4.945 6.069 6.396.189.2.452.312.725.312.274 0 .536-.112.725-.312 1.377-1.451 4.385-4.621 6.068-6.396.136-.143.207-.33.207-.518 0-.417-.337-.752-.75-.752h-3.251v-9.02c0-.531-.47-1.002-1-1.002h-3.998c-.53 0-1 .471-1 1.002z" fill-rule="nonzero"/></svg>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
    <div class="custom-cart__hidden <?= $args['cartActive'] == 'true' ? 'active' : '' ?>">
        <div class="custom-cart-body">
            <?php
            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                $product = $cart_item['data'];
                $product_id = $cart_item['product_id'];
                $quantity = $cart_item['quantity'];
                $price = WC()->cart->get_product_price( $product );
                $subtotal = WC()->cart->get_product_subtotal( $product, $cart_item['quantity'] );
                $link = $product->get_permalink( $cart_item );
                ?>
                <div class="cart-products">
                    <div class="cart-product">
                        <div class="cart-product__img">
                            <?= $product->get_image('thumbnail'); ?>
                        </div>
                        <div class="cart-product__info">
                            <div>
                                <p class="cart-product__info-title"><?= $product->get_title() ?></p>
                                <p class="cart-product__info-descr"><?= $product->get_short_description() ?></p>
                            </div>
                            <div>
                                <span class="cart-product__info-amount"><?= $subtotal ?></span>
                            </div>
                        </div>
                        <div class="cart-product__ui">
                            <button data-product_id="<?= $product_id ?>" class="cart-product__ui-add" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 9h-9v-9h-6v9h-9v6h9v9h6v-9h9z"/></svg></button>
                            <span class="cart-product__ui-count"><?= $quantity ?></span>
                            <button data-product_id="<?= $product_id ?>" class="cart-product__ui-remove" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 10h24v4h-24z"/></svg></button>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <div class="custom-cart-footer">
                <?php if(!$cartEmpty) : ?>
                    <p class="custom-cart-footer__title">Оплата</p>
                    <div class="custom-cart-footer__total">
                        <span>Итог</span>
                        <span><?= WC()->cart->get_cart_contents_total() ?> BYN</span>
                    </div>
                    <p><a href="<?= wc_get_checkout_url() ?>">Оформить заказ</a></p>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
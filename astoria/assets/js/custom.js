jQuery(document).ready(function ($) {
    /**
     * CB FORM
     */

    if ($('.cb-block').length) {
        const cbBtn = $('.cb-btn')
        const cbPopup = $('.cb-popup')

        cbBtn.on('click', function () {
            cbBtn.toggleClass('active')
            cbPopup.toggleClass('active')
        })
    }

    /**
     * HOME SLIDER
     */

    if ($('.home-slider').length) {
        const homeSlider = $('.home-slider')

        homeSlider.slick({
            dots: true,
            infinite: true,
            nextArrow: '<button class="home-slider__btn home-slider__btn-next"><svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline> </svg></button>',
            prevArrow: '<button class="home-slider__btn home-slider__btn-prev"><svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline> </svg></button>',
        })
    }

    /**
     * ROOM POST SLIDER
     */

    if ($('.room-post__slider').length) {
        const roomSlider = $('.room-post__slider')

        roomSlider.slick({
            nextArrow: '<button class="room-post-slider__btn room-post-slider__btn-next"><i class="fa fa-chevron-right next" aria-hidden="true"></i></button>',
            prevArrow: '<button class="room-post-slider__btn room-post-slider__btn-prev"><i class="fa fa-chevron-right next" aria-hidden="true"></i></button>',
        })
    }

    /**
     * GAZEBOS SLIDER
     */

    if ($('.gazebos-item__slider').length) {
        const gazebosSlider = $('.gazebos-item__slider')

        gazebosSlider.slick({
            dots: true,
        })
    }

    /**
     * PHOTO REPORT SLIDER
     */

    if ($('.photo-report .item-slider').length) {
        $('.photo-report .item-slider').slick({
            slidesToShow: 3,
            nextArrow: '<button class="room-post-slider__btn room-post-slider__btn-next"><i class="fa fa-chevron-right next" aria-hidden="true"></i></button>',
            prevArrow: '<button class="room-post-slider__btn room-post-slider__btn-prev"><i class="fa fa-chevron-right next" aria-hidden="true"></i></button>',
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 750,
                    settings: {
                        slidesToShow: 1
                    }
                },
            ]
        })
    }

    /**
     * LOADER
     */
    function setActiveLoader() {
        $('.loader').addClass('active')
    }

    function setDisableLoader() {
        $('.loader').removeClass('active')
    }

    /**
     * AJAX CART WOO
     */
    function addToCart(e) {
        e.preventDefault()
        var id = $(this).attr('data-product_id')
        var cartActive = false
        if ($('.custom-cart__hidden').hasClass('active')) {
            cartActive = true
        }
        $.ajax({
            url: ajaxurl,
            method: 'post',
            data: {
                id: id,
                cartActive: cartActive,
                action: 'add_my_custom_product_to_cart_action'
            },
            beforeSend: function () {
                setActiveLoader()
            },
            success: function (response) {
                $('.custom-cart').replaceWith(response.data.output)
                reloadCartEvents()
            },
            error: function () {
                alert('Похоже произошла ошибка');
            }
        }).always(function () {
            setDisableLoader()
        });
    }

    function removeFromCart(e) {
        e.preventDefault()
        var id = $(this).attr('data-product_id')

        var cartActive = false
        if ($('.custom-cart__hidden').hasClass('active')) {
            cartActive = true
        }
        $.ajax({
            url: ajaxurl,
            method: 'post',
            data: {
                id: id,
                cartActive: cartActive,
                action: 'remove_cart_item_action'
            },
            beforeSend: function () {
                setActiveLoader()
            },
            success: function (response) {
                $('.custom-cart').replaceWith(response.data.output)
                reloadCartEvents()
            },
            error: function () {
                alert('Add to cart error');
            },
        }).always(function () {
            setDisableLoader()
        });
    }

    function reloadCartEvents() {
        $('.cart-product__ui-add').on('click', addToCart)
        //$('.add_to_cart_button').on('click', addToCart);
        $('.custom-cart-info').on('click', toggleCart)
        $('.cart-product__ui-remove').on('click', removeFromCart)
    }

    function toggleCart() {
        $('.custom-cart__hidden').toggleClass('active')
    }

    if ($('.add_to_cart_button').length) {

        $('.cart-product__ui-add').on('click', addToCart)
        $('.add_to_cart_button').on('click', addToCart);
        $('.custom-cart-info').on('click', toggleCart)
        $('.cart-product__ui-remove').on('click', removeFromCart)
    }

    /***
     * STOCK CARDS SLIDER
     */

    if (screen.availWidth < 1000) {
        $('.stock-cards').slick({
            slidesToShow: 2,
            nextArrow: '<button class="home-slider__btn home-slider__btn-next"><svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline> </svg></button>',
            prevArrow: '<button class="home-slider__btn home-slider__btn-prev"><svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polyline fill="none" stroke="#000000" stroke-linejoin="butt" stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5"></polyline> </svg></button>',
            responsive: [
                {
                    breakpoint: 750,
                    settings: {
                        slidesToShow: 1
                    }
                },
            ]
        })
    }

    /***
     * MOBILE MENU
     */
    const overlay = $('.dark-bg')

    function addActive(node)
    {
        node.addClass('active-el')
        overlay.addClass('active-el')
    }
    const hamburgerBtn = $('.header-bottom__menu-btn')
    const menu = $('.mobile-menu')
    hamburgerBtn.on('click', function() {
        addActive(menu)
    })


    const menuWrapper = $('.mobile-menu');
    hamburgerBtn.on('click', function() {
        menuWrapper.addClass('active');
        overlay.addClass('active');
    })

    $('.menu-item-has-children').on('click', function(e) {
        $(e.currentTarget).children('.sub-menu').addClass('active')
        $('.mobile-menu__back-btn').addClass('active')
    })

    $('.mobile-menu__back-btn').on('click', function() {
        if($('.sub-menu.active .sub-menu.active').length) {
            $('.sub-menu.active .sub-menu.active').removeClass('active')
        } else {
            $('.menu-item-has-children > .sub-menu').removeClass('active')
            $('.mobile-menu__back-btn').removeClass('active')
        }
    })

    $('.mobile-menu__close-svg').on('click', function() {
        $('.active-el').removeClass('active-el');
        $('.active').removeClass('active')
        overlay.removeClass('active-el')
    })

    overlay.on('click', function() {
        $('.active-el').removeClass('active-el');
        $('.active').removeClass('active')
        overlay.removeClass('active-el')
    })

})

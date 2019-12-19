/*
 * Application
 */

$(document).tooltip({
    selector: "[data-toggle=tooltip]"
})

/*
 * Auto hide navbar
 */
jQuery(document).ready(function($){
    var $header = $('.navbar-autohide'),
        scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150

    $(window).on('scroll', function(){
        if (!scrolling) {
            scrolling = true

            if (!window.requestAnimationFrame) {
                setTimeout(autoHideHeader, 250)
            }
            else {
                requestAnimationFrame(autoHideHeader)
            }
        }
    })

    function autoHideHeader() {
        var currentTop = $(window).scrollTop()

        // Scrolling up
        if (previousTop - currentTop > scrollDelta) {
            $header.removeClass('is-hidden')
        }
        else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            // Scrolling down
            $header.addClass('is-hidden')
        }

        previousTop = currentTop
        scrolling = false
    }
});

// SIDEBAR DROPDOWN

$('.list-item.dropdown').each(function(index,element) {
    $(element).click(function() {
        $(this).toggleClass('active');
        var cc = $(this).parent().find('.child-categories');
        var countC = $(cc).children().length;
        var height = (45*countC);
        if($(cc).css('display') === 'none'){
            $(cc).toggle();
            $(cc).animate({height:`${height}px`},300);
        }else {
            $(cc).animate({height:"0px"},300, function() {
                $(cc).toggle();
            });
        }
    })
})

$('.addtocart').each(function(index,element) {
    $(element).click(function() {
        var offerid = $(element).data('offer');
        var prodid = $(element).data('id');

        var adddata = {
            'cart': [
                {'offer_id': offerid, 'quantity': 1}
            ]
        }

        // console.log(adddata);
        $(this).request('onAdd', {
            data: adddata,
            update: {'shop/header-cart': $('#cartwrap')}
        }).then(function() {
            $.oc.flashMsg({
                type: 'success',
                interval: 3,
                text: 'Termék sikeresen a kosárhoz adva!'
            })
        })

    })
})

$('.galleryobject').each(function (index,element) {
    $(element).click(function () {
        var src = $(this).find('img').attr('src');
        $(this).parent().parent().find('.hero').css('background-image',`url(${src})`)
    })
})

$('#amountLower').click(function () {
    var curval = $(this).parent().parent().find("#itemAmount").val()
    if(curval != 1){
        $(this).parent().parent().find("#itemAmount").val((+curval - 1 ));
    }
});

$('#amountRaise').click(function () {
    var curval = $(this).parent().parent().find("#itemAmount").val()
    $(this).parent().parent().find("#itemAmount").val((+curval + 1 ));
});

$('#amountCart').click(function () {
    var offerid = $(this).data('id');
    var maxq = $(this).data('maxq');
    var operation = $(this).data('operation');
    var quantity = $("#itemAmount").val();

    if(quantity > maxq){
        $.oc.flashMsg({
            type: 'error',
            interval: 3,
            text: 'Nincs ennyi termék raktáron!'
        })
        return;
    }

    $(this).request('onGetCartData', {
        success: result => {
            var current_quantity = 0;
            console.log(result.data.position);
            var positions = result.data.position;
            if(positions !== null){
                for(key in positions){
                    var cartobj = positions[key];
                    if(cartobj.item_id === offerid){
                        current_quantity = cartobj.quantity;
                        break;
                    }
                }
            }

            quantity = +quantity + current_quantity;

            var adddata = {
                'cart': [
                    {'offer_id': offerid, 'quantity': quantity}
                ]
            }
            
            if(operation === 'update'){                
                $(this).request('onUpdate', {
                    data: adddata,
                    update: {'shop/header-cart': $('#cartwrap')}
                }).then(function() {
                    $.oc.flashMsg({
                        type: 'success',
                        interval: 3,
                        text: 'Termékszám növelve a kosárban!'
                    })
                })
            }else {
                $(this).request('onAdd', {
                    data: adddata,
                    update: {'shop/header-cart': $('#cartwrap')}
                }).then(function() {
                    $.oc.flashMsg({
                        type: 'success',
                        interval: 3,
                        text: 'Termék sikeresen a kosárhoz adva!'
                    })
                })
            }
        }
    })
})

$("#shopping_cart").ready(function () {
    if(!$("#shopping_cart").length){
        return;
    }

    $(this).request('Cart::onSetShippingType', {
        'data': {'shipping_type_id': 2},
        success: function(response) {
            $('#ship_cost_nr').text(response.data.shipping_price.price);
            $("#ship_cost_label").show();
        }
    });
});

$('#clearCart').click(function () {
    $(this).request('onClear', {
        update: {'shop/header-cart': $('#cartwrap')}
    }).then(function() {
        $.oc.flashMsg({
            type: 'success',
            interval: 3,
            text: 'Kosár sikeresen kiürítve!'
        });

        setTimeout(function (){
            location.reload();
        },1000);
        
    })
})

function updateCart(response) {
    console.log(response);
}
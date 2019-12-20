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


            if(quantity > (maxq-current_quantity)){
                $.oc.flashMsg({
                    type: 'error',
                    interval: 3,
                    text: 'Nincs ennyi termék raktáron!'
                })
                return;
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

$(window).scroll(function (e) {
    var eh = $('.data').height();
    var offset = $(document).scrollTop();
    var offsetbot = $(document).height() - offset;
    // console.log(offset);
    // console.log((offset+eh),offsetbot,eh);
    if(offset > 300 && offsetbot > (offset + eh)){
        $('.data').css('top',(+offset-250));
    }
})

function removeOffer(offerid,elem) {
    var removedata = {
        'cart': [offerid]
    }

    $(this).request('onRemove', {
        data: removedata,
        update: {'shop/header-cart': $('#cartwrap'), 'shop/cartfoot': $("#cartfootwrap")}
    }).then(function () {
        $.oc.flashMsg({
            type: 'success',
            interval: 3,
            text: 'A terméket sikeresen eltávolítottuk kosarából!'
        });

        $(elem).parent().parent().remove();
        var leftover = $("#shopping_cart").find('.cartbox').length;
        console.log(leftover)
        if(leftover === 0){
            location.reload();
        }
    })
}

function updateCart(response) {
    console.log(response);
}


$('.servicepage .prices .pricebox').each(function(index,element) {
    $(element).click(function() {
        $(this).toggleClass('active');
        var cc = $(this).parent().find('.dropdown');

        if($(cc).css('display') === 'none'){
            $(cc).toggle();
            $(cc).animate({maxHeight:`2000px`},300);
        }else {
            $(cc).animate({maxHeight:"0px"},300, function() {
                $(cc).toggle();
            });
        }
    })
})

$('#contactForm').submit(function (e) {
    e.preventDefault();

    $(this).request('onContactMailSend', {
        success: data => {
            $.oc.flashMsg({
                text: "Üzenetét sikeresen megkaptuk!",
                type: "success",
                interval: 3
            })
        }
    })
    $(this).find("input[type=text], input[type=email], textarea").val("");
})

$('#orderForm').submit(function (e) {
    e.preventDefault();
    var $inputs = $('#orderForm :input[type=text], #orderForm :input[type=email],#orderForm :input[type=radio]:checked, #orderForm :input[type=number]');

    var values = {};
    $inputs.each(function () {
        // console.log($(this));
        if(values[this.name] && $(this).is(':checked')){
            values[this.name] = $(this).val();            
        }else {
            values[this.name] = $(this).val();
        }
    });

    console.log(values);

    var data = {
        'order': {
            'payment_method_id': values['payment'],
            'shipping_type_id': 2,
            'shipping_price': 1700,            
        },
        'user': {
            'email': values['email'],
            'name': values['fullname']
        },
        'billing_address': {
            'country': "Magyarország",
            'state': values['state'],
            'postcode': values['postcode'],
            'street': values['street'],
            'house': values['housenumber'],
            'city': values['city']
        },
        'shipping_address': {
            'country': "Magyarország",
            'state': values['state'],
            'postcode': values['postcode'],
            'street': values['street'],
            'house': values['housenumber'],
            'city': values['city']
        }
    }

    $.request('MakeOrder::onCreate', {
        data: data,
        success: result => {
            $.oc.flashMsg({
                interval:3,
                type: 'success',
                text: "Rendelését sikeresen fogadtuk!"
            });
            location.reload();            
        }
    });
})

$(window).on('ajaxErrorMessage', function(event, message){

    // This can be any custom JavaScript you want
    $.oc.flashMsg({
        text: message,
        type: 'error',
        interval: 5
    });

    // This will stop the default alert() message
    event.preventDefault();

})
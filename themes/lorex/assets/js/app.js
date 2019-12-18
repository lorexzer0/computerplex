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

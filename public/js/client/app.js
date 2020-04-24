$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('click', '.add-to-cart', function () {
    let id = $(this).data('id');
    let quantity = $(this).data('quantity');
    addToCart(id, quantity);
});

$(document).on('click', '.add-items-cart', function () {
    let id = $(this).data('id');
    let quantity = $('.quantity-items').val();
    addToCart(id, quantity);
});

$('.change-items-cart').on('click', '.delete-cart', function() {
    let id = $(this).data('id');
    $.ajax({
        type: 'get',
        url: 'cart/delete-cart-product/' + id,

    }).done( function(response) {
        renderCart(response);
        alertify.success('Delete products successfully!');
    });
});

$(document).on('click', '.delete-list-cart', function () {
    let id = $(this).data('id');
    $.ajax({
        type: 'get',
        url: 'cart/delete-list-cart/' + id,

    }).done( function(response) {
        renderListCart(response);
        alertify.success('Delete products successfully!');
    });
});

function addToCart(id, quantity) {
    $.ajax({
        type: 'get',
        url: 'cart/add-cart/' + id,
        data: {
            quantity: quantity,
        },
    }).done( function(response) {
        renderMiniCart(response);
        alertify.success('Add to Cart successfully!');
    });
}

function renderMiniCart(response) {
    $('.change-items-cart').empty();
    $('.change-items-cart').html(response);
    $('#cart-quantity').text($('#new-cart-quantity').val());
}

function renderListCart(response) {
    $('.body-cart').empty();
    $('.body-cart').html(response);
    $('#cart-quantity').text($('#new-cart-quantity').val());
}

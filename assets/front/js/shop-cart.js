function addToCart(good_id) {
    $('#buyButton'+good_id).html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Adding to Cart...').addClass('disabled');

    $.ajax({
        type: "post",
        url: "http://localhost:8888/ci-shop/cart/add_good",
        data: { good_id:good_id },
        cache: false,
        success: function (html) {
            console.log(html);
            console.log('good #' + good_id + ' was added to cart');
            $('#buyButton' + good_id).html('Added!');
            $("#cart-refresh").load(location.href + " #cart-refresh");
            setTimeout(function () {
                $('#buyButton' + good_id).html('Buy Now').removeClass('disabled');
            }, 3000);
        }
    });
}


function removeFromCart(rowid, count) {
    $.ajax({
        type: "post",
        url: "http://localhost:8888/ci-shop/cart/remove_good",
        data: { rowid:rowid, count:count },
        cache: false,
        success: function (html) {
            console.log(html);
            $("#cart-refresh").load(location.href + " #cart-refresh");
        }
    });
}

function addThisSame(rowid, count) {
    $.ajax({
        type: "post",
        url: "http://localhost:8888/ci-shop/cart/add_thisSame",
        data: { rowid: rowid, count: count },
        cache: false,
        success: function (html) {
            console.log(html);
            $("#cart-refresh").load(location.href + " #cart-refresh");
        }
    });
}

function cartClass() {
    $(".cart-shop").toggleClass('rotate-cart-shop');
    $(".cart-list").toggleClass('show-cart-list');
}
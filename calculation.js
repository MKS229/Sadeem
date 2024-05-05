document.addEventListener('DOMContentLoaded', ready);

function ready() {
    // Clear Cart
    document.querySelector('#clear-cart').addEventListener('click', clearCart);

    // Calculate Total
    document.querySelector('.btn-calculate').addEventListener('click', updateCartTotal);

    // Event listeners for quantity changes and removing items
    var quantityInputs = document.querySelectorAll('.cart-quantity-input');
    quantityInputs.forEach(input => input.addEventListener('change', quantityChanged));

    var removeButtons = document.querySelectorAll('.btn-danger');
    removeButtons.forEach(button => button.addEventListener('click', removeCartItem));

    // add cart item

}
function elmentFromHTML(html){
    const template = document.createElement("template");
    template.innerHTML = html.trim();
    return template.content.firstElementChild;
}
function newCartItem(ItmName,imgSrc , price ){
    const newItem = elmentFromHTML(`
    <tr class="cart-row">
        <td>${ItmName}</td>
        <td><img src="${imgSrc}" class="Image" alt="Product Image"></td>
        <td class="cart-price">${price} OMR</td>
        <td><input class="cart-quantity-input" type="number" value="1" min="1"></td>
        <td><button type="button" class="btn btn-danger">Remove</button></td>
    </tr>
    `)
    document.getElementById("cart").append(newItem);
    updateCartTotal();
}
function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateCartTotal();
}

function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
}

function clearCart() {
    alert("Are you sure you want to clear the cart?");
    var cartItems = document.querySelector('.cart-items');
    while (cartItems.firstChild) {
        cartItems.removeChild(cartItems.firstChild);
    }
    updateCartTotal();
}

function updateCartTotal() {
    var cartRows = document.querySelectorAll('.cart-row');
    var total = 0;

    cartRows.forEach(row => {
        var priceElement = row.querySelector('.cart-price');
        var quantityElement = row.querySelector('.cart-quantity-input');
        var price = parseFloat(priceElement.innerText.replace('OMR', '').trim());
        var quantity = parseInt(quantityElement.value, 10);
        total += price * quantity;
    });

    var tax = (total * 0.05).toFixed(2);
    var discount = applyDiscount(total, document.querySelector('#DiscountCode').value);

    var finalTotal = (total + parseFloat(tax) - parseFloat(discount)).toFixed(2);

    document.querySelector('#cart-tax').innerText = tax;
    document.querySelector('#cart-discount').innerText = discount;
    document.querySelector('#cart-total').innerText = finalTotal;
}

function applyDiscount(total, code) {
    var validCodes = ['M01', 'mm29', '24l', 'age60'];
    var discount = 0;

    if (validCodes.includes(code)) {
        discount = (total * 0.10).toFixed(2);
    }

    return discount;
}

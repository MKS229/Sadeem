// check if all is ready
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    // check the quntity changing for all items in cart
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    // check the quntity changing for all items in cart
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }
    // adding elemnt to the cart 
    var addToCartButtons = document.getElementsByClassName('btn btn-sm btn-outline-secondary')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
    // clear cart items
    document.getElementById('clear-cart')[0].addEventListener('click', clearCart)
}
// update quantity to eccapt just positiv numbers
function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}
// removing item from the cart
function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}
var totalprice
let listOfItem = []
// Add to cart function
function addToCartClicked(event) {
    var button = event.target;
    var shopItem = button.parentElement.parentElement;
    var title = shopItem.querySelector('.card-title').innerText;
    var price = shopItem.querySelector('.card-price').innerText;
    var imageSrc = shopItem.querySelector('.card-img-top').src;
    addItemToCart(title, price, imageSrc);
    updateCartTotal();
}

function addItemToCart(title, price, imageSrc) {
    var cartItemContainer = document.querySelector('.cart-items'); //new item elemnt
    var cartRowContents = `
    <tr class="cart-row">
        <td><img class="Image" src="${imageSrc}"></td>
        <td class="cart-item-title">${title}</td>
        <td class="cart-price">${price}</td>
        <td><input class="cart-quantity-input" type="number" value="1" min="1"></td>
        <td><button type="button" class="btn btn-danger">Remove</button></td>
    </tr>
    `;
    cartItemContainer.insertAdjacentHTML('beforeend', cartRowContents);
    var removeCartItemButtons = document.querySelectorAll('.btn-danger');
    var lastButton = removeCartItemButtons[removeCartItemButtons.length - 1];
    lastButton.addEventListener('click', removeCartItem);
    var lastQuantityInput = document.querySelectorAll('.cart-quantity-input');
    lastQuantityInput[lastQuantityInput.length - 1].addEventListener('change', quantityChanged);
}

// clear cart function
function clearCart(){
    alert('You are Up to Clear the cart !');
    var cartItems = document.querySelector('.cart-items');
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild);
    }
    updateCartTotal();
}
// get the total price
function updateCartTotal() {
    var cartItemContainer = document.querySelector('.cart-items');
    var cartRows = cartItemContainer.querySelectorAll('.cart-row');
    var total = 0;
    var Tax = 0;
    var discount = 0;
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.querySelector('.cart-price');
        var quantityElement = cartRow.querySelector('.cart-quantity-input');
        var price = parseFloat(priceElement.innerText.replace('$', ''));
        var quantity = quantityElement.value;
        total += price * quantity;
    }
    Tax = (total * 5) / 100;
    Tax = Math.round(Tax * 1000) / 1000; //round up to 3 decimal plase
    document.getElementById('cart-tax').innerText = Tax.toFixed(2);
    var code = document.getElementById('DiscountCode').value;
    discount = discount(total, code);
    total += Tax - discount;
    total = Math.round(total * 1000) / 1000;
    document.querySelector('.cart-total').innerText = total.toFixed(2);
}

// discount function
function discount(total, code){
    var discount = 0;
    var codeList = ['M01','mm29','24l','age60'];
    for(var i = 0; i < codeList.length; i++){
        if(codeList[i] === code){
            discount = total * 0.10;
            discount = Math.round(discount * 1000) / 1000;
            document.getElementById('cart-discount').innerText = discount.toFixed(2);
            return discount;
        }
    }
    document.getElementById('cart-discount').innerText = discount.toFixed(2);
    return discount;
}

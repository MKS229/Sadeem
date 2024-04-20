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
    /*var addToCartButtons = document.getElementsByClassName('btn btn-sm btn-outline-secondary')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }*/
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
/*function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('card-title')[0].innerText
    var price = shopItem.getElementsByClassName('card-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('card-img-top')[0].src
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}
*/
function addItemToCart(title, price, imageSrc) {
    let itemtable = document.getElementsByTagName('tbody')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    // the new item in cart
    var cartRowContents = `
    <tr class="cart-row">
        <td><img class="Image" src="${imageSrc}"></td>
        <td class="cart-item-title">${title}</td>
        <td>${price}</td>
        <td><input class="cart-quantity-input" type="number" value="1" min="1"></td>
        <td><button type="button" class="btn btn-danger">Remove</button></td>
    </tr>
`;
    itemtable.innerHTML += cartRowContents
   // cartItems.appendChild(cartRow)
   // cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
   // cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

// clear cart function
function clearCart(){
    alert('You are Up to Clear the cart !')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    //cartItems.hasAttribute
    while (cartItems.hasAttribute()) {
        cartItems.removeAttribute(cartItems.firstChild)
    }
    updateCartTotal()
}
// get the total price
function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    var Tax = 0
    var discount = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText)
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    // add tax 5%
    Tax = (total*5)/100 
    Tax = Math.round(Tax*1000)/1000 //round up to 3 dec point
    document.getElementById('cart-tax').innerText =  Tax // update
    // discount
    var code = document.getElementById('DiscountCode').value
    discount = discount (total,code)
    // total
    total += Tax - discount
    total = Math.round(total * 1000) / 1000 //round up to 3 dec point
    document.getElementsByClassName('cart-total')[0].innerText = total// update
}
// discount function
function discount(total,code){
 var discount = 0
 var codeList = ['M01','mm29','24l','age60']
 for(var i = 0;i<codeList.length; i++){
    if(codeList[i]==code){
        discount = total * 0.10 // 10% discont for correct code
        discount = Math.round(discount * 1000) / 1000
        return discount
    }
 document.getElementById('cart-discount').innerText = discount // update
}}
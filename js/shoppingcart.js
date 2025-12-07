// ADD TO CART FUNCTION GENERATED WITH AI
// REST IS NATURAL CODE 

function addToCart(productId, productName, productPrice) {
    // Retrieve existing cart from local storage or initialize an empty array
    let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];

    let quantity = parseInt(document.getElementById('qty').value);
    if (isNaN(quantity) || quantity <= 0) {
        alert('Please enter a valid quantity.');
        return;
    }

    let existingItem = cart.find(item => item.productId === productId);

    if (existingItem) {
        existingItem.quantity += quantity;
    } else {
        cart.push({ 
            productId: productId, 
            productName: productName, 
            productPrice: (parseFloat(productPrice) * quantity).toFixed(2), 
            quantity: quantity 
        });
    }

    localStorage.setItem('shoppingCart', JSON.stringify(cart));
    alert('Product added to cart!');
}

function getCart() {
    return JSON.parse(localStorage.getItem('shoppingCart')) || [];
}

function clearCart() {
    localStorage.removeItem('shoppingCart');
}

function caluclateCartTotal() {
    let cart = getCart();
    let total = 0;
    cart.forEach(item => {
        total += parseFloat(item.productPrice);
    });
    return total.toFixed(2);
}

function displayCartItems() {
    let cart = getCart();
    let cartList = document.getElementById('shoppingcart-list');
    cartList.innerHTML = '';

    if(cart.length === 0) {
        document.getElementById('shoppingcart-total').innerHTML = '';
        cartList.innerHTML = '<p>Your cart is empty.</p><a class="continue-shopping" href="storefront.php">Continue Shopping</a>';
        return; 
    }

    cart.forEach(item => {
        let listItem = document.createElement('li');
        listItem.classList.add('shoppingcart-item');
        let name = document.createElement('h1');
        name.textContent = item.productName;
        let quantity = document.createElement('p');
        quantity.textContent = `Quantity: ${item.quantity}`;
        let price = document.createElement('p');
        price.textContent = `Price: $${item.productPrice}`;
        let removeBtn = document.createElement('button');
        removeBtn.classList.add('remove-item-button');
        removeBtn.innerHTML = '<i class="fa fa-trash"></i>';
        removeBtn.addEventListener('click', () => {
            removeFromCart(item.productId);
            displayCartItems();
        });
        listItem.appendChild(name);
        listItem.appendChild(quantity);
        listItem.appendChild(price);
        listItem.appendChild(removeBtn);
        cartList.appendChild(listItem);
    });

    document.getElementById('shoppingcart-total-amount').innerHTML = `${caluclateCartTotal()}`;
}

document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('shoppingcart-list')) {
        displayCartItems();
    }
});

function removeFromCart(productId) {
    let cart = getCart();
    cart = cart.filter(item => item.productId !== productId);
    localStorage.setItem('shoppingCart', JSON.stringify(cart));
}

function proceedToCheckout() {
    window.location.href = 'checkout.php';
}
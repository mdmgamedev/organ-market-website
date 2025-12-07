// TODO add shopping cart 
function addToCart(productId, quantity) {
    // Retrieve existing cart from local storage or initialize an empty array
    let cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];

    let existingItem = cart.find(item => item.productId === productId);
    if (existingItem) {
        existingItem.quantity += quantity;
    } else {
        cart.push({ productId: productId, quantity: quantity });
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

function displayCartItems() {
    let cart = getCart();
    let cartList = document.getElementById('shoppingcart-list');
    cartList.innerHTML = '';

    cart.forEach(item => {
        // Create LI
        let listItem = document.createElement('li');
        listItem.classList.add('shoppingcart-item');

        // Product name
        let name = document.createElement('h1');
        name.textContent = item.name;

        // Quantity
        let quantity = document.createElement('p');
        quantity.textContent = `Quantity: ${item.quantity}`;

        // Price
        let price = document.createElement('p');
        price.textContent = `Price: $${item.price.toFixed(2)}`;

        // Remove button
        let removeBtn = document.createElement('button');
        removeBtn.classList.add('remove-item-button');
        removeBtn.innerHTML = '<i class="fa fa-trash"></i>';
        removeBtn.addEventListener('click', () => {
            removeFromCart(item.productId);
            displayCartItems();
        });

        // Build the item
        listItem.appendChild(name);
        listItem.appendChild(quantity);
        listItem.appendChild(price);
        listItem.appendChild(removeBtn);

        // Add to list
        cartList.appendChild(listItem);
    });

    if(cart.length === 0) {
        cartList.innerHTML = '<p>Your cart is empty.</p><a class="continue-shopping" href="storefront.php">Continue Shopping</a>';
    }
}


// Call displayCartItems on page load if the cart list element exists
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('shoppingcart-list')) {
        displayCartItems();
    }
});
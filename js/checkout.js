let shoppingcart = JSON.parse(localStorage.getItem('shoppingCart'));

let checkoutItem = {
    id: 0,
    name: "",
    price: 0.0,
    quantity: 0
};

let checkoutQueue = [];

function addCartToCheckout() {
    shoppingcart.forEach(element => {
        let item = Object.create(checkoutItem);
        item.id = element.productId;
        item.name = element.productName;
        item.price = element.productPrice;
        item.quantity = element.quantity;
        checkoutQueue.push(item);
    });
    displayCheckoutItems();
}

function calculateCheckoutTotal() {
    let total = 0;
    checkoutQueue.forEach(item => {
        total += parseFloat(item.price);
    });
    return total.toFixed(2);
}

function displayCheckoutItems() {
    let checkoutContainer = document.getElementById('checkout-items-list');
    checkoutQueue.forEach(item => {
        let itemDiv = document.createElement('div');
        itemDiv.className = 'checkout-item';
        itemDiv.innerHTML = `<h3>${item.name}</h3><p>Price: $${item.price}</p><p>Quantity: ${item.quantity}</p>`;
        checkoutContainer.appendChild(itemDiv);
    });
    document.getElementById('checkout-total-amount').innerHTML = `${calculateCheckoutTotal()}`;
}


let domContentLoaded = document.addEventListener('DOMContentLoaded', function() {
    addCartToCheckout();
});

function sendCheckoutToPayment() {
    const queryString = encodeURIComponent(JSON.stringify(checkoutQueue));
    window.location.href = `payment.php?checkout=${queryString}`;
}

document.getElementById('confirm-purchase-button').addEventListener('click', sendCheckoutToPayment);
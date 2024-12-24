// script.js

// Add to Cart function: Store product in localStorage
function addToCart(product) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push(product);
    localStorage.setItem('cart', JSON.stringify(cart));
    window.location.href = 'cart.html';  // Redirect to cart page
  }
  
  // Display cart items on the cart page
  window.onload = function() {
    if (window.location.href.indexOf('cart.html') !== -1) {
      const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
      const cartContainer = document.getElementById('cart-items');
      if (cartItems.length === 0) {
        cartContainer.innerHTML = '<p>Your cart is empty.</p>';
      } else {
        cartItems.forEach(item => {
          const itemDiv = document.createElement('div');
          itemDiv.classList.add('cart-item');
          itemDiv.innerHTML = `<p>${item}</p>`;
          cartContainer.appendChild(itemDiv);
        });
      }
    }
  }
  
  // Checkout function (just a placeholder for now)
  function checkout() {
    alert('Proceeding to checkout...');
    // Logic to proceed to checkout (e.g., payment integration)
  }
  
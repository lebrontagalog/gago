<?php
session_start();
include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['checkout'])) {
    $tableNumber = $_POST['tableNumber'];

    // Assuming you have the order details available
    $price = 0.00; // Update with the actual total price
    $items = ''; // Update with the actual items

    $sql = "INSERT INTO orders (table_number, price, items) VALUES ('$tableNumber', '$price', '$items')";
    $conn->query($sql);
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Dad's Burger: House of Unlimited</title>
</head>
<body>
    
    <input type="checkbox" id="cart">
    <label for="cart" class="label-cart"><span class="fas fa-shopping-cart"></span></label>

    <div class="user-profile">
    <a href="admin.php">
        <i class="fas fa-user"></i>
    </a>
</div>

    <h3 class="logo"> DADS BURGER</h3>

    <div class="logo-container">
      <img src="images/logo.png" alt="Logo">
    </div>

    <div class="dashboard">
        <div class="dashboard-banner">
            <img src="images/images-banner.jpg">
            <div class="banner-promo">
                <h1><span>50% OFF Cravings</span><br>
                Big Flavors, <br> Small Prices!</h1>
            </div>
        </div>

        <h3 class="dashboard-title">Recommend Food For You</h3>
        <div class="dashboard-menu">
          <a href="#unlimited-section">Unlimited</a>
          <a href="#burger-section">Burger</a>
          <a href="#burgerfries-section">Burger & Fries</a>
          <a href="#drinks-section">Drinks</a>
        </div>

        <h2 id="unlimited-section">Unlimited<hr></h2>
        <div class="dashboard-content">
          
            <div class="dashboard-card">
              
                <img class="card-image" src="images/samg.jpg">
                <div class="card-detail">
                    <h4>Unli Samgyupsal<span>PHP 199.00</span></h4>
                    <p>Eat as much grilled pork belly as you want, Korean BBQ-style.</p>
                    <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="images/wings.jpg">
                <div class="card-detail">
                    <h4>Unli Wings<span>PHP 260.00</span></h4>
                    <p>Enjoy endless chicken wings with different tasty sauces.</p>
                    <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="images/porkwings.jpg">
                <div class="card-detail">
                    <h4>Unli Pork & Wings<span>PHP 379.00</span></h4>
                    <p>Get unlimited servings of both pork and chicken wings.</p>
                    <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="images/porkbeef.jpg">
                <div class="card-detail">
                    <h4>Unli Pork & Beef<span>PHP 389.00</span></h4>
                    <p>Feast on all-you-can-eat pork and beef for a BBQ treat.</p>
                    <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
                </div>
            </div>
            <div class="dashboard-card">
                <img class="card-image" src="images/burgers.jpg">
                <div class="card-detail">
                    <h4>Unli Burger<span>PHP 299.00</span></h4>
                    <p>Indulge in unlimited burgers with various toppings.</p>
                    <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
                </div>
            </div>
        </div>
        
        <h2 id="burger-section">Burger Ala Carte<hr></h2>
            <div class="dashboard-content">
            
            <div class="dashboard-card">
                <img class="card-image" src="images/small.jpg">
                <div class="card-detail">
                    <h4>Happy Dad<span>PHP 60.00</span></h4>
                    <p>A small-sized burger to make you happy with its tasty ingredients.</p>
                    <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
                </div>
            </div>
            <div class="dashboard-card">
              <img class="card-image" src="images/medium.jpg">
              <div class="card-detail">
                  <h4>Cool Dad<span>PHP 90.00</span></h4>
                  <p>A medium-sized, trendy burger for a cool dining experience.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>
            <div class="dashboard-card">
              <img class="card-image" src="images/large.jpg">
              <div class="card-detail">
                  <h4>Strong Dad<span>PHP 85.00</span></h4>
                  <p>A big, hearty burger for those with a big appetite.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>
            <div class="dashboard-card">
              <img class="card-image" src="images/extra.jpg">
              <div class="card-detail">
                  <h4>Generous Dad<span>PHP 120.00</span></h4>
                  <p>An extra big burger with generous portions for a satisfying meal.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>
          </div>

          <h2 id="burgerfries-section">Burger & Fries<hr></h2>
          <div class="dashboard-content">
          
            <div class="dashboard-card">
              <img class="card-image" src="images/small1.jpg">
              <div class="card-detail">
                  <h4>Happy Dad & Fries<span>PHP 80.00</span></h4>
                  <p>A joyful combo of a small but tasty burger and crispy fries.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>
          <div class="dashboard-card">
              <img class="card-image" src="images/medium1.jpg">
              <div class="card-detail">
                  <h4>Cool Dad & Fries<span>PHP 80.00</span></h4>
                  <p>A joyful combo of a small but tasty burger and crispy fries.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>
          <div class="dashboard-card">
              <img class="card-image" src="images/large1.jpg">
              <div class="card-detail">
                  <h4>Strong Dad & Fries<span>PHP 80.00</span></h4>
                  <p>A joyful combo of a small but tasty burger and crispy fries.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>
          <div class="dashboard-card">
              <img class="card-image" src="images/extra1.jpg">
              <div class="card-detail">
                  <h4>Generous Dad & Fries<span>PHP 80.00</span></h4>
                  <p>A joyful combo of a small but tasty burger and crispy fries.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>
        </div>

        <h2 id="drinks-section">Drinks<hr></h2>
          <div class="dashboard-content">
          
            <div class="dashboard-card">
              <img class="card-image" src="images/coke.png">
              <div class="card-detail">
                  <h4>Coke<span>PHP 20.00</span></h4>
                  <p>Classic cola with a bubbly taste in a 300ml serving.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>
          <div class="dashboard-card">
              <img class="card-image" src="images/sprite.png">
              <div class="card-detail">
                  <h4>Sprite<span>PHP 20.00</span></h4>
                  <p>300ml of lemon-lime soda for a refreshing kick.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>
          <div class="dashboard-card">
              <img class="card-image" src="images/rootbeer.jpg">
              <div class="card-detail">
                  <h4>Root Beer<span>PHP 20.00</span></h4>
                  <p> A 300ml serving of sweet and aromatic root beer.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>
          <div class="dashboard-card">
              <img class="card-image" src="images/icedtea.jpg">
              <div class="card-detail">
                  <h4>Iced Tea<span>PHP 15.00</span></h4>
                  <p>Chill out with a 300ml serving of refreshing iced tea.</p>
                  <button class="add-to-cart-btn"><span class="fas fa-shopping-cart"></span> Add to Cart</button>
              </div>
          </div>

      </div>
    </div>

    <div class="dashboard-order">
      <label for="cart" class="close-icon"><span class="fas fa-times"></span></label>
        <h3>Order Menu</h3>
        <div class="order-wrapper"></div>
        <div class="table-selection">
            <label for="tableNumber">Input your table number:</label>
            <select id="tableNumber" required>
              <option value="" disabled selected>Select Table</option>
              <!-- You can adjust the number of tables as needed -->
              <option value="1">Table 1</option>
              <option value="2">Table 2</option>
              <option value="3">Table 3</option>
              <option value="3">Table 4</option>
              <option value="3">Table 5</option>
              <option value="3">Table 6</option>
              <option value="3">Table 7</option>
              <option value="3">Table 8</option>
              <option value="3">Table 9</option>
              <option value="3">Table 10</option>
              <option value="3">Table 11</option>
              <option value="3">Table 12</option>
              <option value="3">Table 13</option>
              <option value="3">Table 14</option>
              <option value="3">Table 15</option>
            </select>
          </div>
        <div class="order-total">
          Total: <span>PHP 0.00</span>
      </div>
      <button class="btn" onclick="checkout()">Checkout</button>

        <div class="popup" id="popup">
            <img src="images/check.png">
            <h2>Thank You!</h2>
            <p>Your order has been submitted.</p>
            <button type="button" onclick="closePopup()">OK</button>
        </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
                const orderWrapper = document.querySelector('.order-wrapper');
                const orderTotal = document.querySelector('.order-total span');
                const cartLabel = document.querySelector('.label-cart');
        
                addToCartButtons.forEach((button, index) => {
                    button.addEventListener('click', function () {
                        const cardDetail = this.parentElement;
                        const productImage = cardDetail.previousElementSibling.src;
                        const productName = cardDetail.querySelector('h4').innerText;
                        const productPrice = parseFloat(cardDetail.querySelector('span').innerText.replace('PHP', '')); // Use 'PHP' instead of a currency symbol
                        const productQuantity = 1;
        
                        if (isProductInOrder(productName)) {
                            updateProductInOrder(productName, productPrice, productQuantity);
                        } else {
                            addToOrder(productImage, productName, productPrice, productQuantity);
                        }
        
                        updateSubtotal();
                        updateCartLabel();
                    });
                });
        
                function addToOrder(image, name, price, quantity) {
                    const orderItem = document.createElement('div');
                    orderItem.classList.add('order-card');
                    orderItem.dataset.price = price;
                    orderItem.dataset.quantity = quantity;
                    orderItem.dataset.name = name;
                    orderItem.innerHTML = `
                        <img class="order-image" src="${image}">
                        <div class="order-detail">
                            <h4>${name}</h4>
                            <p>Price: PHP <span class="order-price">${price.toFixed(2)}</span></p> <!-- Use 'PHP' instead of a currency symbol -->
                            <p>Quantity: <span class="order-quantity">${quantity}</span></p>
                        </div>
                        <div class="order-actions">
                            <button class="order-action add"><i class="fa fa-plus"></i></button>
                            <button class="order-action subtract"><i class="fa fa-minus"></i></button>
                            <button class="remove-from-order"><i class="fa fa-trash"></i></button>
                        </div>
                    `;
        
                    orderWrapper.appendChild(orderItem);
        
                    // Add event listeners for quantity control buttons
                    const addAction = orderItem.querySelector('.add');
                    const subtractAction = orderItem.querySelector('.subtract');
                    const removeButton = orderItem.querySelector('.remove-from-order');
        
                    addAction.addEventListener('click', function () {
                        updateProductInOrder(name, price, 1);
                        updateSubtotal();
                    });
        
                    subtractAction.addEventListener('click', function () {
                        updateProductInOrder(name, price, -1);
                        updateSubtotal();
                    });
        
                    removeButton.addEventListener('click', function () {
                        orderWrapper.removeChild(orderItem);
                        updateSubtotal();
                        updateCartLabel();
                    });
                }
        
                function isProductInOrder(productName) {
                    const orderCards = document.querySelectorAll('.order-card');
                    return Array.from(orderCards).some(card => card.dataset.name === productName);
                }
        
                function updateProductInOrder(productName, price, quantity) {
                    const orderCards = document.querySelectorAll('.order-card');
                    orderCards.forEach(card => {
                        if (card.dataset.name === productName) {
                            const currentQuantity = parseInt(card.dataset.quantity);
                            const newQuantity = Math.max(currentQuantity + quantity, 1);
                            const newPrice = price * newQuantity;
                            card.dataset.price = newPrice;
                            card.dataset.quantity = newQuantity;
                            card.querySelector('.order-quantity').innerText = newQuantity;
                            card.querySelector('.order-price').innerText = newPrice.toFixed(2);
                        }
                    });
                }
        
                function updateSubtotal() {
                    const orderCards = document.querySelectorAll('.order-card');
                    let subtotal = 0;
        
                    orderCards.forEach(card => {
                        const price = parseFloat(card.dataset.price);
                        subtotal += price;
                    });
        
                    orderTotal.innerText = `PHP ${subtotal.toFixed(2)}`;
                }
        
                function updateCartLabel() {
                    const orderCards = document.querySelectorAll('.order-card');
                    const itemCount = orderCards.length;
                    cartLabel.setAttribute('data-count', itemCount);
                }
            });


            function checkout() {
                const tableNumber = document.getElementById("tableNumber").value;

                if (tableNumber === "") {
                    alert("Please choose your table number.");
                } else {
                    // Prepare order data
                    const orderItems = [];
                    const orderCards = document.querySelectorAll('.order-card');

                    orderCards.forEach(card => {
                        const name = card.dataset.name;
                        const price = parseFloat(card.dataset.price);
                        const quantity = parseInt(card.dataset.quantity);

                        orderItems.push({
                            name: name,
                            price: price,
                            quantity: quantity
                        });
                    });

                    const orderData = {
                        tableNumber: tableNumber,
                        items: [
                          { name: 'Burger', price: 10.99, quantity: parseInt(document.getElementById('burgerQuantity').value) || 1 },
                         // Add other items as needed
                              ],
                         };

                    // Send order data to server using AJAX
                    const xhr = new XMLHttpRequest();
                    xhr.open("POST", "dashboard.php", true);
                    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            // Redirect to dashboard.php after successful submission
                            openPopup();
                        }
                    };

                    xhr.send(JSON.stringify(orderData));
                }
            }

            let popup = document.getElementById("popup");
      
          function openPopup() {
          popup.classList.add("open-popup");
      }
      
          function closePopup() {
          popup.classList.remove("open-popup");
      }
      
      
      </script>

    
    </body>
</html>

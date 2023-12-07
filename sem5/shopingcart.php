<?php
// Start or resume the session
session_start();

// Initialize the cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to add a product to the cart
function addToCart($productId, $productName, $quantity, $price) {
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$productId] = ['productName' => $productName, 'quantity' => $quantity, 'price' => $price];
    }
}

// Add some products to the cart
addToCart(1, 'Product A', 2, 15.99);
addToCart(2, 'Product B', 1, 9.99);
addToCart(3, 'Product C', 3, 12.50);

// Function to display the cart contents
function displayCart() {
    if (empty($_SESSION['cart'])) {
        echo 'Your shopping cart is empty.';
    } else {
        echo 'Shopping Cart:';
        foreach ($_SESSION['cart'] as $productId => $product) {
            echo "\n- " . $product['quantity'] . " x " . $product['productName'] . " ($" . $product['price'] . " each)";
        }
    }
}

// Display the cart contents
displayCart();
?>

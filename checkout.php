<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
  <title>Citcon's Coffee Roasters Shopping Cart</title>
  
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="img/manifest.json">
<link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  

<div id="logo-header">
	<a href="http://www.citcon-inc.com/"><img src="img/header-logo.png" alt="http://www.citcon-inc.com"></a>
</div>

<h1>Citcon's Coffee Roasters Shopping Cart</h1>
<div class="shopping-cart">
	
  
	
	
	  <div class="column-labels">
		<label class="product-image">Image</label>
		<label class="product-details">Product</label>
		<label class="product-price">Price</label>
		<label class="product-quantity">Quantity</label>
		<label class="product-removal">Remove</label>
		<label class="product-line-price">Total</label>
	  </div>

	  <div class="product">
		<div class="product-image">
                  <img src="img/mug.jpg">
                </div>
                <div class="product-details">
                  <div class="product-title">Coffee Mug</div>
                  <p class="product-description">11 oz white stoneware mug with C-Handle is are the perfect cup for any beverage. Simple enough for everyday use by coffee and tea drinkers alike, but elegant enough to stand out.</p>
                </div>
                <div class="product-price">10.00</div>
                <div class="product-quantity">
                  <input type="number" value="1" min="1">
                </div>
                <div class="product-removal">
                  <button class="remove-product">
                        Remove
                  </button>
                </div>
                <div class="product-line-price">10.00</div>
          </div>

          <div class="product">
                <div class="product-image">
                  <img src="img/coffee.png">
                </div>
                <div class="product-details">
                  <div class="product-title">Citcon Coffee</div>
                  <p class="product-description">Citcon's Espresso Roast Rich and Caramelly Dark Coffee 12 oz. Package</p>
                </div>
                <div class="product-price">19.99</div>
                <div class="product-quantity">
                  <input type="number" value="1" min="1">
                </div>
                <div class="product-removal">
                  <button class="remove-product">
                        Remove
                  </button>
                </div>
                <div class="product-line-price">19.99</div>
	  
	</div>

	  <div class="totals">
		<div class="totals-item">
		  <label>Subtotal</label>
		  <div class="totals-value" id="cart-subtotal">29.99</div>
		</div>
		<div class="totals-item">
		  <label>Tax (5%)</label>
		  <div class="totals-value" id="cart-tax">1.50</div>
		</div>
		<div class="totals-item">
		  <label>Shipping</label>
		  <div class="totals-value" id="cart-shipping">15.00</div>
		</div>
		<div class="totals-item totals-item-total">
		  <label>Grand Total</label>
		  <div class="totals-value" id="cart-total">46.49</div>
		</div>
	  </div>
	  <button class="checkoutWechat"></button>
	  <button class="checkoutAlipay"></button>
	  <button class="checkoutCC"></button>
	  <div class="paywith"><h1>Pay With</h1></div>
	  
	
</div>

<form action="pay.php" method="POST" id="payform">
	<input type="hidden" name="transaction_id" value="test1234"/>
	<input type="hidden" name="payment_method" id="payment_method"/>
	<input type="hidden" name="amount" id="amount"/>
</form>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</body>
</html>

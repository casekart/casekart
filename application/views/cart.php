<!DOCTYPE html>

<html >

<head>

  <meta charset="UTF-8">

  <title>Shopping Cart</title>

  <link rel="stylesheet" href="../assets/css/cart/normalize.css">

  <link rel="stylesheet" href="../assets/css/cart/style.css">

  <link rel="stylesheet" href="../assets/css/fontawesome/css/font-awesome.min.css">

</head>

<body>



  <div class="co_top">

  <h1 class="shopping_cart">Shopping Cart</h1>

    <button class="tp_checkout">Checkout</button>

  <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>

  <!-- <div class="cart_count"><span><?php echo $num_rows = mysql_num_rows($image_path);?></span></div> -->

  </div>
<div class="alert alert-danger hide">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  
</div>
  <div class="shopping-cart">
<?php if (!empty($image_path)) {?>
    <div class="column-labels">

      <label class="product-image">Image</label>

      <label class="product-details">Model</label>

      <label class="product-price">Design Price</label>

      <label class="product-price">Model Price</label>

      <label class="product-quantity">Quantity</label>

      <label class="product-removal">Remove</label>

      <label class="product-line-price">Total</label>

    </div>

  

    <?php foreach ($image_path as $key => $value) {
    ?>
<?php echo form_open('checkout'); ?>
    <div class="product">

      <div class="product-image">
        <img src="../<?php echo $value->img_path; ?>">

    </div>

    <div class="product-details">
      <p><?php echo $value->model_name; ?></p>

 </div>

 <div class="product-price"><?php echo $value->img_price;?></div>
 <div class="model-price"><?php echo $value->price;?></div>

     <div class="product-quantity">

      <input type="number" name='qty[]' value="1" min="1">

    </div>    

    <div class="product-removal">
<input type="hidden" id="img_id" name="image_id[]" value="<?php echo $value->image_id;?>">
<input type="hidden" id="model_id" name="model_id[]" value="<?php echo $value->model_id;?>">
      <button class="remove-product">

        Remove

      </button>

    </div>

    <div class="product-line-price"><?php echo number_format($value->img_price+$value->price,2);?></div>

</div>

<?php }?>


    <div class="totals">

      <div class="totals-item">

        <label>Subtotal</label>

        <div class="totals-value" id="cart-subtotal">71.97</div>

      </div>

<!--       <div class="totals-item">

        <label>Tax (5%)</label>

        <div class="totals-value" id="cart-tax">3.60</div>

      </div> 

      <div class="totals-item">

        <label>Shipping</label>

        <div class="totals-value" id="cart-shipping">15.00</div>

      </div>-->

      <div class="totals-item totals-item-total">

        <label>Grand Total</label>

        <div class="totals-value" id="cart-total">90.57</div>

      </div>

    </div>

    <input type="submit" class="checkout" value="Checkout">
<?php echo form_close(); 
 }else{
echo "Your shopping cart is empty.<br /> <a href='".base_url()."'>Click here</a> to continue shopping.";
}?>
  </div>

  <script type="text/javascript" src="../assets/js/jquery-1.12.4.min.js"></script>

  <script src="../assets/js/cart/index.js"></script>

</body>

</html>

<script type="text/javascript">

// var stickySidebar = $('.co_top').offset().top;



// $(window).scroll(function() {  

//     if ($(window).scrollTop() > stickySidebar) {

//         $('.co_top').addClass('affix');

//     }

//     else {

//         $('.co_top').removeClass('affix');

//     }  

// });

</script>
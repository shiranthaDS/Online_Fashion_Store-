<?php 
    include "connection.php";
    session_start();
    
    include "cart.class.php";
    $cart = new Cart();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/IWT/CSS/cartStyle.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
    <div class="container1">
        <img src="images/cart.webp" alt="cart" class="image"><h1 class="imgtext">Shopping Cart</h1>
        <!--<h1 class="imgtext">Shopping Cart</h1>-->
    </div>
        <?php include "navbar.php"; ?>
        <div class="bgBodyColor"><div class='container mt-3'>
            <div class='row'>
                <div class='col-md-12'>
				<h1 class='text-muted mb-4 text-center font-weight-bold'>Cart Items</h1>
                    <?php if($cart->get_cart_total() > 0): ?>
                        <div class="bgTableColor"><table class='table table-striped table-bordered'>
                            <thead>
                                <tr>
                                    <th colspan='2' class='text-center'>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $items = $cart->get_all_items(); ?>
                                <?php foreach($items as $item): ?>
                                    <tr>
                                        <td><img src='images/<?php echo $item["img"];?>' style='height:80px;' ></td>
                                        <td><?php echo $item["name"];?></td>
                                        <td>&#8360; <?php echo $item["price"];?></td>
                                        <td><input type='number' value='<?php echo $item["qty"];?>' class='qty' pid='<?php echo $item["id"]; ?>' min='1'></td>
                                        <td>&#8360; <span class='row_total'><?php echo $item["total"];?></span></td>
                                        <td><a href='remove.php?id=<?php echo $item["id"];?>' onclick="return confirm('Are you sure?')">Remove</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan='3'><a href='index.php' class="btn btn-success">Continue Shopping</a></td>
                                    <th>Total</th>
                                    <th>&#8360; <span id='total'><?php echo $cart->get_cart_total();?></span></th>
                                    <td><a href='billing.php' class='btn btn-info'>Checkout</a></td>
                                </tr>
                            </tfoot>
                        </table></div>
                    <?php else: ?>
                        <div class='alert alert-warning alert-dismissible fade show' role="alert">
                            Cart is empty...
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div></div>
        
        <!-- JavaScript and jQuery -->
        <script>
            $(document).ready(function() {
                // Event handlers for quantity input changes
                $(".qty").on('change keyup', function() {
                    update_cart($(this));
                });

                function update_cart(cls) {
                    var pid = $(cls).attr("pid");
                    var q = $(cls).val();
                    
                    $.ajax({
                        url: "ajax_update_cart.php",
                        type: "post",
                        data: {id: pid, qty: q},
                        success: function(res) {
                            var a = JSON.parse(res);
                            $("#total").text(a.total);
                            $(cls).closest("tr").find(".row_total").text(a.row_total);
                        }
                    });
                }
                
                // Auto-hide the alert after 5 seconds (5000 milliseconds)
                setTimeout(function() {
                    $('.alert-warning').alert('close');
                }, 5000); // Time in milliseconds (5 seconds)
            });
        </script>
    </body>
</html>

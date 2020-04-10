<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bob's Auto Parts - Order Results</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Customer Orders</h2>
        <?
        //Short var file root access
        $document_root = $_SERVER['DOCUMENT_ROOT'];
        //Count orders
        $orders = file("$document_root/php_Examples/bobs_auto/orders/orders.txt");

        $number_of_orders = count($orders);
            if($number_of_orders == 0) {
                echo "<p><strong>No orders pending.<br />
                Please try again later.</strong></p>";
            }
        //Print orders
        for ($i=0; $i<$number_of_orders; $i++) {
            echo $orders[$i]."<br />";
        }
        ?>
            
        
        
        <script src="" async defer></script>
    </body>
</html>
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
        <?php
            @$fp = fopen("orders/orders.txt", 'rb');
            flock($fp, LOCK_SH); //Lock file for reading

        //Control flow for file opening or.... not... opening
        if(!$fp) {
            echo "<p><strong>No orders pending.<br />
                  Please try again later.</strong></p>";
                  exit;
            }

        while (!feof($fp)) {
            $order = fgets($fp);
            echo htmlspecialchars($order)."<br />";
            }

        flock($fp, LOCK_UN); //relase read lock
            fclose($fp);
            ?>
        
        <script src="" async defer></script>
    </body>
</html>
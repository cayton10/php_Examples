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
        <h2>Order Results</h2>
        <!-- PHP CONSTANT DECLARATIONS -->

        <?
            define('TIREPRICE', 100);
            define('OILPRICE', 10);
            define('SPARKPRICE', 4);
        ?>

        <?php
            //Create short var names
            $tireqty = $_POST['tireqty'];
            $oilqty = $_POST['oilqty'];
            $sparkqty = $_POST['sparkqty'];
            //Count item quantities
            $totalqty = $tireqty + $sparkqty + $oilqty;
            //Control Flow if qty is empty
            if ($totalqty == 0) {
                echo "<p style ='color:red'>";
                echo "You didn't place any orders yet. <br />";
                echo "</p>";
                exit;
            }
            //Order date and time information
            echo '<p>Order processed at '.date('h:i, jS F Y')."</p><br />";
            echo '<p>Your order is as follows: </p>';
            //use htmlspecialchars() function for security purposes.
            echo htmlspecialchars($tireqty).' tires at $ <br />';
            echo htmlspecialchars($oilqty).' bottles of oil<br />';
            echo htmlspecialchars($sparkqty).' spark plugs<br />';

/* ----------------------- WORKING OUT THE FORM TOTAL ----------------------- */
            //Set var
            $totalqty = 0;
            $totalamount = 0.00;
            $taxrate = 0.06; //WV Sales tax is 6%
            //Do math
           
            $totalamount = ($tireqty * TIREPRICE) +
                           ($oilqty * OILPRICE) +
                           ($sparkqty * SPARKPRICE);
            

            echo "<h3>Items ordered: ".$totalqty."</h3><br />";
            echo "<h4>Subtotal: $".$totalamount."</h4><br />";

            $totalamount *= (1 + $taxrate);
            echo "<p>Total with tax included: $".number_format($totalamount,2)."</p>";


        ?>
        
        <script src="" async defer></script>
    </body>
</html>
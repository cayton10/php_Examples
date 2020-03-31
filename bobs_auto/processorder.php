<?php 
    // create short var names
    $tireqty = (int) $_POST['tireqty'];
    $oilqty = (int) $_POST['oilqty'];
    $sparkqty = (int) $_POST['sparkqty'];
    $address = preg_replace('/\t|\R/',' ',$_POST['address']);
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    $date = date('g:i, jS F Y');
    ?>

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
            //Order date and time information
            echo "<p>Order processed at $date</p>";
            echo '<p>Your order is as follows: </p>';

            /* ----------------------- WORKING OUT THE FORM TOTAL ----------------------- */
            //Set var
            $totalqty = 0;
            $totalamount = 0.00;
            $taxrate = 0.06; //WV Sales tax is 6%
            //Define constants
            define('TIREPRICE', 100);
            define('OILPRICE', 10);
            define('SPARKPRICE', 4);
        ?>

        <?php
            //Count item quantities
            $totalqty = $tireqty + $sparkqty + $oilqty;
            //use htmlspecialchars() function for security purposes.
            echo "<h4>Items ordered: $totalqty</h4>";
            //Control Flow if qty is empty
            if ($totalqty == 0) {
                echo "<p style ='color:red'>";
                echo "You didn't place any orders yet. <br />";
                echo "</p>";
                
            }   else {
                if ($tireqty > 0) {
                    echo htmlspecialchars($tireqty).' tires<br />';
                }
                if ($oilqty > 0) {
                    echo htmlspecialchars($oilqty).' bottles of oil<br />';
                }
                if ($sparkqty > 0) {
                    echo htmlspecialchars($sparkqty).' spark plugs<br />';
                }
            }
            
            //Do math
           
            $totalamount = ($tireqty * TIREPRICE) +
                           ($oilqty * OILPRICE) +
                           ($sparkqty * SPARKPRICE);
            
            echo "<p>Subtotal: $".$totalamount."<p>";

            $totalamount *= (1 + $taxrate);
            echo "<p>Total with tax included: $".number_format($totalamount,2)."</p>";
            echo "<p>Address to ship to is: ".htmlspecialchars($address)."</p>";

            //Output string to file
            $outputstring = $date."\t".$tireqty." tires \t" . $oilqty ." oil\t"
                            . $sparkqty ." spark plugs\t $" . $totalamount . "\t" . $address . "\n";

        //OPEN FILE FOR ORDERS FROM ORDERS DIR
        //Opens file in "APPEND" and "BINARY" modes so orders are not overwritten
        //Use '@' to suppress error handling
        @$fp = fopen("$document_root/php_Examples/bobs_auto/orders/orders.txt", 'ab'); 
        //Control flow error handling
        if(!$fp) {
            echo "<p><strong> Your order could not be processed at this time. 
                Please try again later.</strong></p>";
            exit;
        }   
        
            //Lock file with 'file lock' flock
            flock($fp, LOCK_EX);
            //Write to $fp file variable with above defined output string.
                fwrite($fp, $outputstring, strlen($outputstring));
                //Unlock file
                flock($fp, LOCK_UN);
                //Close file
                fclose($fp);
            echo "<p>Order written.</p>";
            echo $document_root;
        ?>
        <!-- Link to view customer orders -->
        <a href="vieworders.php">View Orders</a>
        
        <script src="" async defer></script>
    </body>
</html>
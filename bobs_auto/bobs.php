<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bob's Auto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php echo '<p>Hello World</p>'; ?>
<?php
/*---------------------------- Order form setup ---------------------------- */
?>
<? echo '<h1>Hello World!</h1>'; ?>
        <form action="processorder.php" method="post">
            <table style="border: 0px;">
                <tr style="background: #cccccc;">
                    <td style="width: 150px; text-align: center;">Item</td>
                    <td style="width: 15px; text-align: center;">Quantity</td>
                </tr>
                <tr>
                    <td>Tires</td>
                    <td><input type="text" name="tireqty" size="3" maxlength="3"/></td>
                </tr>
                <tr>
                    <td>Oil</td>
                    <td><input type="text" name="oilqty" size="3" maxlength="3"/></td>
                </tr>
                <tr>
                    <td>Spark Plugs</td>
                    <td><input type="text" name="sparkqty" size="3" maxlength="3"/></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="submit" value="Submit Order" /></td>
                </tr>
            </table>
        </form>

        
        <script src="" async defer></script>
    </body>
</html>
<?
    //$mvar = "MY VARIABLE";

    // require, require_once, include, and include_once
    require_once("functions/arrayFunctions.php");
    
?>

<style>
    table {border: 1px solid red;}
    td {border: 1px solid green;}
    th {background-color: black; color: white; border: 1px solid purple;}
</style>

<?
    //echo $mvar;
    $dogBreeds[] = array("Name"=>"Border Collie", "Hair Length"=>"long", "Size"=>"Small/Medium", "Shedding"=>"medium");
    $dogBreeds[] = array("Name"=>"Chocolate Lab", "Hair Length"=>"short", "Size"=>"Large", "Shedding"=>"minimal");
    $dogBreeds[] = array("Name"=>"Great Dane", "Hair Length"=>"short", "Size"=>"Mamoth", "Shedding"=>"somewhat");
    $dogBreeds[] = array("Name"=>"Mini Goldendoodle", "Hair Length"=>"long", "Size"=>"Medium", "Shedding"=>"this dog looks like he leaves a form of himself in the house daily.");
    // output your array from the function above
    echo arrayToTable($dogBreeds, "Table of Dogs and their Characteristics");

    //echo $mvar;
?>


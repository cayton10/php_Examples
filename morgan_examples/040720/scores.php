<?
    // require, require_once, include, and include_once
    require_once("functions/arrayFunctions.php");
?>

<style>
    table {border: 1px solid red;}
    td {border: 1px solid green;}
    th {background-color: black; color: white; border: 1px solid purple;}
</style>

<?

    $baseballgame[] = array("Visitors"=>"Reds", "Home"=>"Cubs", "Vis Score"=>0, "Home Score"=>13);
    $baseballgame[] = array("Visitors"=>"Yankees", "Home"=>"Red Sox", "Vis Score"=>-100, "Home Score"=>100);
    $baseballgame[] = array("Visitors"=>"Nationals", "Home"=>"Mets", "Vis Score"=>3, "Home Score"=>4);

    // output your array from the function above
    echo arrayToTable($baseballgame);

    // convert a php array to json
    echo json_encode($baseballgame);
?>


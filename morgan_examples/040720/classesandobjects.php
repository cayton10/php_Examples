<?
    require_once("config.php");

    //outputmyTax();

    // instantiate an object of type person
    $amber = new person();

    // examples of calling functions (public) of a class on an object (setters)
    $amber->setFirstName("AMBER");
    $amber->setLastName("EAST");

    // example of calling a getter function on the object that returns a string
    echo "Hi " . $amber->getName() . ", how are you?";

    // ILLEGAL becuase fName is a private member of the class 
    //echo $amber->fName;

    // instantiate an object of type paycheck
    //$amberspaycheck = new paycheck();
    $amberspaycheck = new paycheck(35, 10.13);

    echo $amber->getName() . "'s weekly pay is $" . $amberspaycheck->getWeeklyPay() . "<br />";

    // if the magic function __toString exists, it can be used to generate standard output for the object
    echo $amberspaycheck;

    // what do I drive?
    $brianscar = new car("Yukon");
    echo $brianscar;
?>


<?
    class person
    {
        // class variables (properties)
        // private variables are only available to functions within the class itself
        // public variables can be accessed outside of the class (not a good practice)
        private $fName;
        private $lName;

        // constructor
        function __construct()
        {
            // setting up initial variable values for the class
            // handling inheritance if present, etc.
        }

        // setter to set the private member of the class to the person's first name
        function setFirstName($fn)
        {
            $this->fName = $fn;
        }

        // setter to set the private member of the class to the person's last name
        function setLastName($ln)
        {
            $this->lName = $ln;
        }

        // return a person's name from the object as L, F
        function getName()
        {
            return $this->lName . ", " . $this->fName;
        }
    }
?>
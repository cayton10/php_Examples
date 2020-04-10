<?
    class paycheck
    {
        private $hours;
        private $payPerHour;

        // constructor, with default parameters
        // this allows you to create an object of paycheck with 0, 1 or 2 parameters
        function __construct($h = null, $p = null)
        {
            $this->hours = ($h ? $h : 0);
            $this->payPerHour = ($p ? $p : 0);
        }

        // public function that returns our weekly pay based on our hours and pay per hour
        public function getWeeklyPay()
        {
            $weekspay = $this->hours * $this->payPerHour;
            return $weekspay;
        }

        public function __toString()
        {
           // return "YOU TRIED TO OUTPUT AN OBJECT OF TYPE PAYCHECK.  NOT LEGAL.";
           return (string)$this->getWeeklyPay();
        }
    }
?>
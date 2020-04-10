<?
    class car
    {
        private $make;

        function __construct($make = null)
        {
            $this->make = $make;
        }

        function __toString()
        {
            return "You drive a " . $this->make;
        }
    }
?>
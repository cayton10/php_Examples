<?
    
    function outputmyTax()
    {
        // special case showing TRUE global variables through define() command
        echo OH_TAX_RATE;
    }

    function arrayToTable($array, $caption=NULL)
    {

        // get our headers by using array_keys on first element in $array
        $headers = array_keys($array[0]);

        // start our table output
        $output = "<table><thead><tr>";

        // loop through our headers and output them as th elements, concatenating to output
        foreach ($headers as $key=>$value)
            $output .= "<th>" . $value . "</th>";
        
        // finish our thead and start our tbody
        $output .= "</tr></thead><tbody>";

        // output each row of data from our $array into the table
        foreach($array as $key=>$dataValue)
        {
            // start our table row for this row of array data 
            $output .= "<tr>";

            // loop for each of our columns that are present by name
            // set up our variables as $columnName to pull from our row, which will be $dataValue
            foreach ($headers as $columnName)
                $output .= "<td>" . $dataValue[$columnName] . "</td>";

            // end our table row
            $output .= "</tr>";
        }

        // end our table
        $output .= "</tbody></table>";

        if ($caption)
            $output .= "<caption>" . $caption. "</caption>";

        // return our HTML table
        return $output;

    }
?>
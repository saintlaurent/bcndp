<?php
/**
 * User: Catherine
 * Date: 1/7/2017
 */

// import functions
require "functions.php";

?>


    <?php
    // read from "input.json" and return as an array
    $input_array = load_input_file_into_php_array();
    // convert array to match structure in "correct-output.json"
    $output_array = convert_array_to_output_format($input_array); var_dump($output_array);
    // save the array to file named "my-output.json"
    save_php_array_to_output_file($output_array);

    // print done
    print "Done.\n";
    ?>





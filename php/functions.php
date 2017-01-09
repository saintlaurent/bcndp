<?php
/**
 * User: Catherine
 * Date: 1/8/2017
 */


// read from "input.json" and return as an array
function load_input_file_into_php_array(){
    $data_string = file_get_contents('input.json');
    $data_array = json_decode($data_string, true);
    return $data_array;
}

// convert array to match structure in "correct-output.json"
function convert_array_to_output_format($input_array){
    $output_array = array();
    $counter = 0;
    foreach ($input_array['birds'] as $bird){
        foreach($bird as $data_point){
            $output_array[$counter] = array(
                'name' => $data_point['EnglishName'],
                'latin' => $data_point['Species'],
                'lifespan' => $data_point['Lifespan']
            );
        }
        $counter++;
    }
    $output_json = json_encode($output_array, JSON_PRETTY_PRINT);
    return $output_json;
}

// save the array to file named "my-output.json"
function save_php_array_to_output_file($output_array){
    file_put_contents('my-output.json', $output_array);
}
<?php

function h($string=""){
    return htmlspecialchars($string);
}

function escape($string){
    return htmlentities($string, ENT_QUOTES);
}

function check_empty_fields($required_fields){
    $form_errors = array();
    foreach($required_fields as $name_of_field){
        if(!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL){
            $form_errors[] = $name_of_field."is a required field";
        }
    }
    return $form_errors;
}
<?php

/**
 * A collection of JSON functions.
 * 
 * Functions to send JSON data using JSend specification
 * File Name: json-utilities.php
 * Date: 07 Jul 19
 * 
 * @author Jaymes Young-Liebgott
 */


/**
 * JSON success function.
 * 
 * The function doesn't return data or a messsage. Echos JSON encoded response.
 * 
 * @return void
 **/
function json_success()
{
    $arr_response = [
        'status' => 'success',
        'data' => null
    ];

    echo json_encode($arr_response);
    exit();
}

/**
 * JSON success function with message included. 
 * 
 * The function inserts a string message and echos JSON encoded response.
 * 
 * @param string $message A simple string message
 * 
 * @return void
 **/
function json_success_message($message)
{
    $arr_response = [
        'status' => 'success',
        'data' => [
            'message' => $message
        ]
    ];

    echo json_encode($arr_response);
    exit();
}

/**
 * JSON success function with data included.
 * 
 * The function inserts an arrray of data and echos JSON encoded response.
 * 
 * @param array $data An array of data
 * 
 * @return void
 **/
function json_success_data($data)
{
    $arr_response = [
        'status' => 'success',
        'data' => $data,
    ];

    echo json_encode($arr_response);
    exit();
}

/**
 * Fail with message
 * 
 * @return void
 **/
function json_fail($messageObj)
{
    $arr_response = [
        'status' => 'fail',
        'data' => $messageObj
    ];

    echo json_encode($arr_response);
    exit();
}


/**
 * Error with message
 * 
 * @return void
 **/
function json_error($message)
{
    $arr_response = [
        'status' => 'error',
        'message' => $message
    ];

    echo json_encode($arr_response);
    exit();
}



/**
 * Database error
 * 
 * @return void
 **/
function json_error_database($message)
{
    $arr_response = [
        'status' => 'fail',
        'data' => [
            'message' => $message
        ]
    ];

    echo json_encode($arr_response);
    exit();
}


/**
 * Parameter error
 * 
 * @return void
 **/
function json_error_parameter()
{
    $arr_response = [
        'status' => 'fail',
        'data' => [
            'message' => 'missing parameter'
        ]
    ];

    echo json_encode($arr_response);
    exit();
}

/**
 * Duplicate error
 * 
 * @return void
 **/
function json_error_duplicate()
{
    $arr_response = [
        'status' => 'fail',
        'data' => [
            'message' => 'duplicate item'
        ]
    ];

    echo json_encode($arr_response);
    exit();
}

/**
 * Part of speech error
 * 
 * @return void
 **/
function json_error_pos()
{
    $arr_response = [
        'status' => 'fail',
        'data' => [
            'message' => 'No part of speech was supplied'
        ]
    ];

    echo json_encode($arr_response);
    exit();
}

/**
 * Encode and send data
 * 
 * @param array $arr 
 * 
 * @return void
 */
function send_data($arr)
{
    $json = json_encode($arr);
    echo $json;
    exit();
}

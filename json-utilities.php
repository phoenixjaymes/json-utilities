<?php

namespace Phoenixjaymes\JsonUtilities;

/**
 * A collection of JSON functions.
 * 
 * Functions to send JSON data using JSend specification
 * File Name: json-utilities.php
 * Date: 07 Jul 19
 * 
 * @author Jaymes Young-Liebgott
 */


class JsonUtility
{
    /**
     * JSON success function.
     * 
     * The function doesn't return data or a messsage. Echos JSON encoded response.
     * 
     * @return void
     **/
    public static function success()
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
    public static function success_message($message)
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
    public static function success_data($data)
    {
        $arr_response = [
            'status' => 'success',
            'data' => $data,
        ];

        echo json_encode($arr_response);
        exit();
    }

    /**
     * JSON fail function with message included. 
     * 
     * The function inserts a string message and echos JSON encoded response.
     * 
     * @param array $messageArr An array of failures
     * 
     * @return void
     **/
    public static function fail($messageArr)
    {
        $arr_response = [
            'status' => 'fail',
            'data' => $messageArr
        ];

        echo json_encode($arr_response);
        exit();
    }


    /**
     * JSON error function with message included. 
     * 
     * The function inserts a string message and echos JSON encoded response.
     * 
     * @param string $message A simple string message
     * 
     * @return void
     **/
    public static function error($message)
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
    public static function error_database($message)
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
    public static function error_parameter()
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
    public static function error_duplicate()
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
    public static function error_pos()
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
     * The function encodes data and echos JSON response.
     * 
     * @param array $arr 
     * 
     * @return void
     */
    public static function send_data($arr)
    {
        $json = json_encode($arr);
        echo $json;
        exit();
    }
}

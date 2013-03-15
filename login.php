<?php

function login()    
{
    $response = array();
    $response['success'] = NULL;
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    if($user == NULL || $pass == NULL)
    {
        $response['success'] = FALSE;
    }
    else
    {
        $response['success'] = TRUE;
    }
    echo json_encode($response);
}

?>
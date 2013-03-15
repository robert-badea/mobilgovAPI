<?php
    
function sign()
{
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    $petitionId = $_GET['petitionId'];
    if($user == NULL || $pass == NULL || $petitionId == NULL)
    {
        dumpError('Invalid arguments supplied.');
        return;
    }
    $response = array();
    $response['success'] = TRUE;
    echo json_encode($response);
}

?>
<?php
    
//Always echo JSON
header('Content-type: application/json');

include 'Petition.php';
include 'getUrl.php';
include 'dumpPetitionList.php';
include 'login.php';
include 'error.php';
include 'utility.php';
include 'sign.php';
    
$action = $_GET['action'];

switch($action)
{
    case "petitionList":
    {
        dumpPetitionList();
        break;
    }
    case "login":
    {
        login();
        break;
    }
    case "sign":
    {
        sign();
        break;        
    }
    case NULL:
    {
        dumpError('No action supplied.');
        break;
    }
    default:
    {
        dumpError('Invalid action was supplied.');
        break;
    }
}
?>
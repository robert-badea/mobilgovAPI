<?php
function dumpPetitionList()
{
    $limit = notNullValue($_GET['limit'], 10);
    $page = notNullValue($_GET['page'], 1);
    $list = $_GET['list'];
    $category = $_GET['category'];
    $id = $_GET['id'];
    $list = $_GET['list'];

    if($list == NULL && $id == NULL)
    {
        dumpError("No list argument supplied.");
        return;
    }

    $url = getUrl($category, $id);
    $jsonResponse = file_get_contents($url);
    $jsonResponse = json_decode($jsonResponse);

    $petitions = array();

    $min = min($limit, sizeof($petitions));

    foreach($jsonResponse->{'d'} as $jsonPet)
    {
        $pet = new Petition($jsonPet);
        array_push($petitions, $pet);
        if(sizeof($petitions) == $limit)
        {
            break;
        }
    }

    if($list != NULL && $id == NULL)
    {
        //to do sort
    }

    echo json_encode($petitions);
}
?>
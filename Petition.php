<?php
class Petition
{
    public $title;
    public $id;
    public $votes;
    public $category;
    public $author;
    public $date;
    public $description;
    public $signed;
    function __construct($json)
    {
        $this->title = NULL;
        $this->id = NULL;
        $this->votes = NULL;
        $this->category = NULL;
        $this->author = 'Gheorghe';
        $this->date = NULL;

        $this->title = $json->titlu;
        $this->id = (int)$json->id;
        $this->votes = (int)$json->nrvoturi;
        $this->category = $json->categorie;        
        //$this->author;
        $this->date = date_format(new DateTime($json->d),'d.m.Y');
        $this->description = $json->textpetitie;
        $this->signed = FALSE;
    }

}

?>
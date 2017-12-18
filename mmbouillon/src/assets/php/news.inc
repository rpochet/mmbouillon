<?php 

class News
{
    public $title;
    
    public $author;
    
    public $images;
    
    public $description;
    
    public $datetime;
    
}

class NewsImage
{
    public $url;
    
    public $caption;
    
    function __construct($url)
    {
        $this->url = $url;
    }
}

?>
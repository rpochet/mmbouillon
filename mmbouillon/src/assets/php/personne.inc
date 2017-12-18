<?php 

class Personne
{
    public $type;
    
    public $firstName;
    
    public $lastName;
    
    public $title;
    
    public $email;
    
    public $tel;
    
    public $gsm;
    
    public $fax;
    
    public $horaires;
    
    public $description_courte;
    
    public $description;
    
    public $specialites;
    
    public $extra;
    
}

class Agenda
{
    public $type;
    
    function __construct($type)
    {
        $this->type = $type;
    }
}

class PeriodeAgenda extends Agenda
{
    public $jour_debut;
    
    public $jour_fin;
    
    function __construct($jour_debut, $jour_fin) 
    {
        parent::__construct($type);
        $this->jour_debut = $jour_debut;
        $this->jour_fin = $jour_fin;
    }
    
}

class JourAgenda extends Agenda
{
    public $jour;
    
    public $heure_debut;
    
    public $heure_fin;
    
    function __construct($type, $jour, $heure_debut, $heure_fin)
    {
        parent::__construct($type);
        $this->jour = $jour;
        $this->heure_debut = $heure_debut;
        $this->heure_fin = $heure_fin;
    }
    
}

?>
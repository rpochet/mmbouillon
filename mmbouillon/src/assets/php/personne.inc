<?php 

class Personne
{
    /**
     * @JsonProperty(name="type", type="string")
     */
    public $type;
    
    /**
     * @JsonProperty(name="title", type="string")
     */
    public $title;
    
    /**
     * @JsonProperty(name="bar", type="string")
     */
    public $firstName;
    
    /**
     * @JsonProperty(name="lastName", type="string")
     */
    public $lastName;
    
    /**
     * @JsonProperty(name="avatar", type="string")
     */
    public $avatar;
    
    /**
     * @JsonProperty(name="photo", type="string")
     */
    public $photo;
    
    /**
     * @JsonProperty(name="bar", type="string")
     */
    public $email;
    
    /**
     * @JsonProperty(name="tel", type="string")
     */
    public $tel;
    
    /**
     * @JsonProperty(name="gsm", type="string")
     */
    public $gsm;
    
    /**
     * @JsonProperty(name="fax", type="string")
     */
    public $fax;
    
    /**
     * @JsonProperty(name="facebook", type="string")
     */
    public $facebook;
    
    /**
     * @JsonProperty(name="horaires", type="array")
     */
    public $horaires;
    
    /**
     * @JsonProperty(name="bar", type="string")
     */
    public $description_courte;
    
    /**
     * @JsonProperty(name="bar", type="string")
     */
    public $description;
    
    /**
     * @JsonProperty(name="bar", type="array")
     */
    public $specialites;
    
    /**
     * @JsonProperty(name="bar", type="array")
     */
    public $extra;
    
}

class Agenda
{
    /**
     * @JsonProperty(name="type", type="string")
     */
    public $type;
    
    function __construct()
    {
    }
}

class PeriodeAgenda extends Agenda
{
    /**
     * @JsonProperty(name="jour_debut", type="string")
     */
    public $jour_debut;
    
    /**
     * @JsonProperty(name="jour_fin", type="string")
     */
    public $jour_fin;
    
    function __construct()
    {
        parent::__construct();
    }
    
    public static function newPeriodeAgenda($type, $jour_debut, $jour_fin)
    {
        $res = new PeriodeAgenda();
        $res->type = $type;
        $res->jour_debut = $jour_debut;
        $res->jour_fin = $jour_fin;
        return $res;
    }
    
}

class JourAgenda extends Agenda
{
    /**
     * @JsonProperty(name="jour", type="string")
     */
    public $jour;
    
    /**
     * @JsonProperty(name="heure_debut", type="string")
     */
    public $heure_debut;
    
    /**
     * @JsonProperty(name="heure_fin", type="string")
     */
    public $heure_fin;
    
    function __construct()
    {
        parent::__construct();
    }
    
    public static function newJourAgenda($type, $jour, $heure_debut, $heure_fin)
    {
        $res = new JourAgenda();
        $res->type = $type;
        $res->jour = $jour;
        $res->heure_debut = $heure_debut;
        $res->heure_fin = $heure_fin;
        return $res;
    }
    
}

?>
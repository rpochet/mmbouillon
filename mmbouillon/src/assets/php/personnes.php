<?php

include "personne.inc";

$url = __DIR__ . '/../../data/personnes.json';
$contents = file_get_contents($url);
$personnesObj = json_decode($contents);

$personnes = array();
foreach ($personnesObj as $userId => $personneObj) {
    $personne0 = new Personne();
    foreach(get_object_vars($personneObj) as $key => $values) {
        if (is_array($values)) {
            $personne0->$key = array();
            foreach($values as $value) {
                if(is_string($value)) {
                    $item0 = $value;
                } else if(is_object($value)) {
                    if(property_exists($value, 'jour')) {
                        $item0 = new JourAgenda();
                    } else if(property_exists($value, 'jour_debut')) {
                        $item0 = new PeriodeAgenda();
                    }
                    if($item0) {
                        foreach(get_object_vars($value) as $key2 => $value2) {
                            if (is_array($value2)) {
                                $item0->$key2 = array();
                            } else {
                                $item0->$key2 = $value->$key2;
                            }
                        }
                    }
                } else {
                    print_r($value);
                }
                if($item0) {
                    array_push($personne0->$key, $item0);
                }
            }
        } else if(is_object($values)) {
            $item0 = array();
            foreach(get_object_vars($values) as $key2 => $value2) {
                $item0->$key2 = $value2;
            }
            $personne0->$key = $item0;
        } else {
            $personne0->$key = $personneObj->$key;
        }
    }
    $personnes[$userId] = $personne0;
}

return $personnes;

?>

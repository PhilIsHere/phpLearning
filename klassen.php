<?php
class Person implements adressen {


//    private string $firstName;
//    private string $lastname;

    //Ein Konstruktor wird so eröffntet, dass man zunächst die Zugriffsrechte definiert (std: Protected) und __construct(){} schreibt
    //Die zwei Unterstriche sind sog. Magic Methods, die in allen Klassen bereits vordefiniert sind.
    public function __construct(protected string $firstName = '', protected string $lastname = '')
    {
        //Methodenaufruf über den -> Operator
//        $this->firstName = $firstName;
//        $this->lastname = $lastname;
    }

    public function getFirstName() : string {
        return $this->firstName;
    }

    public function getLastName() : string{
        return $this->lastname;
    }

    public function setFirstName(string $firstName) : self {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName(string $lastName) : self {
        $this->lastname = $lastName;
        return $this;
    }

    public function generateAdresse($strassenname, $hausnummer) {
        $this->$strassenname = $strassenname;
        $this->$hausnummer = $hausnummer;
        $adresse = $this->$strassenname .' '. $this->$hausnummer;
        return $adresse;
    }
}

class Kunde extends Person{

    //ToDo Philip: Klasse "kunde" Erstellen die "Person" extended. Eigenschaften: Kundennummer-->Base64 Hash aus Vor und Nachnamen
    public function generateKundennummer() : string {
        $name = $this->firstName . ' ' . $this->getLastName();
        $kundennummer = base64_encode($name);
        return (string)$kundennummer;
    }

    public function __toString() : string
    {
        return 'Vor- und Nachname: ' . $this->getFirstName() . ' ' . $this->getLastName().PHP_EOL . 'Kundennummer: '.$this->generateKundennummer().PHP_EOL.'Adresse: '.$this->generateAdresse('Sonnenweg', 1);
    }
}


$erstePerson = new Kunde();
$erstePerson->setFirstName('Philip')->setLastName('Nachname');


//Nutzt automatisch die toString Methode, da wir einen typecast auf "string" angeben/erwarten.
echo (string)$erstePerson . PHP_EOL;




//ToDO Inteface schreiben welches Person implementiert adresse im Interface definieren

interface adressen{
    public function generateAdresse($strassenname, $hausnummer);
}
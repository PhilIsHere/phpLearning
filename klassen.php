<?php
class Person implements adressen {


//    private string $firstName;
//    private string $lastname;

    //Ein Konstruktor wird so eröffnet, dass man zunächst die Zugriffsrechte definiert (std: Protected) und __construct(){} schreibt
    //Die zwei Unterstriche sind sog. Magic Methods, die in allen Klassen bereits vordefiniert sind.
    public function __construct(protected string $firstName = '', protected string $lastname = '') //Im Konstruktor kann man einige Variablen mit Zugriffsrechten angeben. Nicht zuviele
    {
        //Methodenaufruf über den -> Operator
//        $this->firstName = $firstName;
//        $this->lastname = $lastname;
    }

    public function getFirstName() : string {
        return $this->firstName;
    }
    public function setFirstName(string $firstName) : self {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName() : string{
        return $this->lastname;
    }
    public function setLastName(string $lastName) : self {
        $this->lastname = $lastName;
        return $this;
    }

    public function setAdresse(string $adresse){
        $this->adresse = $adresse;
        return $this;
    }
    //In der Praxis teilt man normalerweise Informationen möglichst atomar/kleinteilig. Heißt: Name getrennt vom Vornamen, PLZ getrennt von Straßennamen usw.
    public function getAdresse():string{
        return $this->adresse;
    }

    public function setPostleitzahl(string $postleitzahl){
        $this->postleitzahl = $postleitzahl;
        return $this;
    }

    public function getPostleitzahl():string{
        return $this->postleitzahl;
    }
    //Eine abstrakte Methode ist eine nicht implementierte Methode, sie muss aber in der vererbenden Klasse vorkommen und implementiert werden.
    abstract public function generateKundennummer():string;

//    public function generateAdresse() {
//        $this->strassenname = $strassenname; // Nicht best-practice. Besser: Ein Getter und Setter pro Variable, wenn man die Adresse im Objekt speichern möchte.
//        $this->hausnummer = $hausnummer;
//        return $this->strassenname .' '. $this->hausnummer;
//    }

}

class Kunde extends Person{
    //ToDo Philip: Klasse "Kunde" Erstellen die "Person" extended. Eigenschaften: Kundennummer-->Base64 Hash aus Vor und Nachnamen
    public function generateKundennummer() : string {
        return base64_encode($this->getFirstName() . ' ' . $this->getLastName()); //Verknüpfung reicht über return. Erst ab verarbeitung brauche ich Variablen.
    }

    public function __toString() : string
    {
        return 'Vor- und Nachname: ' . $this->getFirstName() . ' ' . $this->getLastName().PHP_EOL . 'Kundennummer: '.$this->generateKundennummer().PHP_EOL.'Adresse: '.$this->getAdresse() . ' '.$this->getPostleitzahl();
    }

}


$erstePerson = new Kunde();
$erstePerson->setFirstName('Philip')->setLastName('Nachname')->setAdresse('Sonnenweg 1')->setPostleitzahl('12345');


//Nutzt automatisch die toString Methode, da wir einen typecast auf "string" angeben/erwarten.
echo (string)$erstePerson . PHP_EOL;




//ToDO Inteface schreiben welches Person implementiert adresse im Interface definieren

interface adressen{
    public function generateAdresse($strassenname, $hausnummer);
}
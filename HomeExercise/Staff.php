<?php
class Staff extends Person
{
    private $vacancy;

    function __construct($fname,$lname,$yearOfBirth,$vacancy){
        parent::__construct($fname,$lname,$yearOfBirth);
        $this->vacancy = $vacancy;
       }

    public function allData(){
        print_r($this->getFname(). " ". $this->getLname(). "<br>"."Age: ".$this->getAge()."<br>".$this->getYear(). "<br>" . $this->vacancy);
        echo "<br><br>";

    }
    
    public function setVacancy($vacancy)
    {
        $this->vacancy = $vacancy;

    }


    public function getVacancy()
    {
        return $this->vacancy;
    }
}
?>
<?php
class Student extends Person
{
    
    private $selectedCourses =array();
    private $creditPoints;

    function __construct($fname,$lname,$yearOfBirth,$selectedCourses,$creditPoints){
        parent::__construct($fname,$lname,$yearOfBirth);
        array_push($this->selectedCourses,$selectedCourses);
        $this->creditPoints = $creditPoints;
       }
       
       
    public function allData(){
        print_r($this->getFname(). " ". $this->getLname(). "<br>"."Age: ".$this->getAge()."<br>".$this->getYear(). "<br>" ."Credit points: ". $this->creditPoints);
        echo "<br>";        
        print_r($this->selectedCourses);
        echo "<br><br>";    
    }

    public function setSelectedCourses($selectedCourses)
    {
        $this->selectedCourses = $selectedCourses;

    }

    public function setCreditPoints($creditPoints)
    {
        $this->creditPoints = $creditPoints;

    }
 
    public function getSelectedCourses()
    {
        return $this->selectedCourses;
    }
    

    public function getCreditPoints()
    {
        return $this->creditPoints;
    }
}
?>
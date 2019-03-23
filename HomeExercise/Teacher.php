<?php
class Teacher extends Person
{
    public $department;
    public $teachingSubjects = array();

     function __construct($fname,$lname,$yearOfBirth,$teachingSubjects,$department){
     parent::__construct($fname,$lname,$yearOfBirth);
     array_push($this->teachingSubjects,$teachingSubjects);
     $this->department = $department;
    }
    public function addSubject($value){
        array_push($this->teachingSubjects,$value);
    }
    
    public function allData(){
        print_r($this->getFname(). " ". $this->getLname(). "<br>"."Age: ".$this->getAge()."<br>".$this->getYear(). "<br>" . $this->department);
        echo "<br>";
        print_r($this->teachingSubjects);
        echo "<br><br>";
    
    }


    public function setDepartment($department)
    {
        $this->department = $department;
    }
    

    public function setTeachingSubjects($teachingSubjects)
    {
        $this->teachingSubjects = $teachingSubjects;

    }

    public function getDepartment()
    {
        return $this->department;
    }
 
    public function getTeachingSubjects()
    {
        return $this->teachingSubjects;
    }
}
?>
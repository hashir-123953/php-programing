

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //student //
    $student_name="Hashir nadeem";
    $student_age=26;
    $student_height=5.2;
    $is_active=TRUE;
    $student_friends=array("Hammad","Jazil","Fakir","Aysha");
    $student_attend=null;
   
    class Student {
    public $name;
    public $age;
    public $grade;
}

$student1 = new Student();

$student1->name = "Ali";
$student1->age = 20;
$student1->grade = "A";





    echo "<h1> Students Details:</h1><br>";
    echo"Student name: $student_name<br>";
    echo"Student age: $student_age<br>";
    echo"Student height: $student_height<br>";
    echo"Student status: $is_active<br>";
    echo" $student_friends[0]<br>";
    echo" $student_friends[1]<br>";
    echo" $student_friends[2]<br>";
    echo" $student_friends[3] <br>";
    var_dump( $student_attend);
    echo "<br>";
    var_dump($student1);


    
    


// employ

        $employ_id=100;
        $employ_name="Shahzaib";
        $employ_height=6.3;
        $married_status=false;
        $employ_do_jobs=array("Infotech","Codetech","Codinglover");

     echo "<h1> Employ Details:</h1><br>";
     echo"Employ name: $employ_id<br>";
    echo" Employage: $employ_name<br>";
    echo"Employ height: $employ_height<br>";
    echo"Married_status: $married_status<br>";
    echo" $employ_do_jobs[0]<br>";
    echo" $employ_do_jobs[1]<br>";
    echo" $employ_do_jobs[2]";
   



    
    ?>
</body>
</html>
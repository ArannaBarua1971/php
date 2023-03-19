<?php
    
    // uses of password_hash() and password_verify() method
    $password="arannabarua";
    $encryppass=password_hash($password,PASSWORD_BCRYPT);

    if(password_verify($password,$encryppass)){
        echo "your password is right <br>";
    }
    else {
        echo "your password is wrong <br>";
    }

    // uses of implode() and join() and array() method
    $student = array("aranna","lucky","tapash","sourav");
    $family = implode("+",$student);
    printf("salt = %s <br>",$family);
    $family = join(".",$student);
    printf("salt = %s <br>",$family);

    // uses of isset() ,unset() and empty() method

    $name=null;
    $roll=7;
    $dep="";
    var_dump(isset($name),isset($roll),isset($dep));
    echo "<br>";
    var_dump(empty($name),empty($roll),empty($dep));
    echo "<br>";
    unset($roll);
    var_dump(isset($roll),empty($roll));
    echo "<br>";

    // uses of
    // ** array()
    $student = array("aranna","lucky","tapash","sourav");

    // **array_reverse()(note: don't change the main array)
    $student = array("aranna","lucky","tapash","sourav");
    $rev=array_reverse($student);
    var_dump($student);
    echo "<br>";
    var_dump($rev);
    echo "<br>";

    // **array_pop();(note: can change the main array)
    $student = array("aranna","lucky","tapash","sourav");
    echo array_pop($student);
    echo "<br>";
    var_dump($student);
    echo "<br>";

    // **array_push();(note: can change the main array)
    $student = array("aranna","lucky","tapash","sourav");
    echo array_push($student,"kalpona");
    echo "<br>";
    var_dump($student);
    echo "<br>";

    // **array_shift();(note: can change the main array)
    $student = array("aranna","lucky","tapash","sourav");
    echo array_shift($student);
    echo "<br>";
    var_dump($student);
    echo "<br>";

    // **array_unshift();(note: can change the main array)
    $student = array("aranna","lucky","tapash","sourav");
    echo array_unshift($student,"kalpona");
    echo "<br>";
    var_dump($student);
    echo "<br>";

    // **array_rand();
    $student = array("aranna","lucky","tapash","sourav");
    $randName=array_rand($student);
    echo $student[$randName];
    echo "<br>";

    // **array_search();
    $student = array("aranna","lucky","tapash","sourav");
    var_dump(array_search("lucky",$student));
    echo "<br>";

    // **in_array();
    $student = array("aranna","lucky","tapash","sourav");
    var_dump(in_array("lcky",$student));
    echo "<br>";

    // **count();
    $student = array("aranna","lucky","tapash","sourav");
    $size=count($student);
    echo"the size of student array : ".$size;
    echo "<br>";

    // **sizeof();
    $student = [array()];
    $size=sizeof($student);
    echo"the size of student array : ".$size;
    echo "<br>";

    // **compact();
    $student1 = array("aranna","lucky","tapash","sourav");
    $student2 = array("sowmik","happy","niher","apurba");
    $newStudentArray=compact("student1","student2");
    echo "<pre>";
    var_dump($newStudentArray);
    echo "</pre>";
    echo $newStudentArray["student1"][0];
    echo "<br>";

    // **shuffle();(note: can change the main array)
    $student = array("aranna","lucky","tapash","sourav");
    var_dump($student);
    echo "<br>";
    var_dump(shuffle($student));
    echo "<br>";
    var_dump($student);
    echo "<br>";
    
    // **array_slice();(note: cannot change the main array)
    $student = array("aranna","lucky","tapash","sourav");
    $student1=array_slice($student,-2);
    var_dump($student1);
    echo "<br>";

    // **array_filter();
    $number=[1,2,3,4,5,6,7,8,9,10];
    $evenNum=array_filter($number,function($x){
        if($x%2==0) return $x;
    });
    $oddNum=array_filter($number,function($x){
        if($x%2!=0) return $x;
    });
    var_dump($evenNum);  
    echo "<br>";  
    var_dump($oddNum);    
    echo "<br>";

    // **array_diff();
    $student1 = array("aranna","lucky","tapash","sourav");
    $student2 = array("apurba","lucky","tapash","sourav");
    var_dump(array_diff($student1,$student2));

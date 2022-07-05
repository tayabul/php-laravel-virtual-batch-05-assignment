

<?php

      $vehicels = [
        "car" => ["BMW", "TOYOTA", "COROLA"],
        "bike" => ["Palser", "Apacee", "Discover","Yeamaha"]
    ];

    foreach($vehicels as $x=> $data){
        echo strtoupper($x).": ";
        $i = 1;
        foreach($data as $value){
            echo $i++.". ".$value.", ";
        }
        echo "<br>";
    }




echo '<br>';
echo '<br>';
echo '<br>';



    $school =[
        "all teachers" => [
            "head teacher" => "Anowarul islam",
            "Saiful", "Rofique", "Ruji", "Riyad"
        ],
        "students" => [
            ["Roll" => "1", "name" =>"Rimon", "grade"=> "A-"],
            ["Roll" => "2", "name" => "Sakib", "grade"=> "A"], 
            ["Roll" => "3","name" =>"Niloy", "grade"=> "B-" ]
        ]
    ];

    foreach($school as $all => $value){ 
        echo strtoupper($all)."<br>";
        // echo "Head Teacher : ".$value['head teacher'].",<br>";
        // print_r($value['0']);
        foreach($value as $x=>$name){
            echo $name;
            foreach($name as $y){
                echo $y;
            }
        }
    }

    // All Teacher:
    



  



?>
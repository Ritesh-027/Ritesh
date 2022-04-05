<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?PHP

#Storing the values in Array using the Foreach Loop/

// $ary = array("Ritesh"=>[R],"Shefali"=>[S],"Suraj"=>[SU],"Tejas"=>[TEJ]);

// foreach ($ary as $total) {
//     print_r($total);
// }


#FUNTION EXAMPLES!!!!!!!!

// $a = 15;
// $b = 25;
// function ritesh($a,$b){

// $c = $a+$b;
// echo $c;

// }

// echo ritesh(80,70);



#Functions = New Function; 

// function data(){

//      $name = "Ritesh";
//      $id = 117;
//      $mail = "ritesh@gmail.com";

//      echo $d ="Name: $name <br>"."My Id : $id <br>"."Mail ID : $mail <br><br>";

// }
// data();
// data();
// data();

#Funtion with the constant variable;


// function cons()
// {
//     define("Sweet", "Welcome to Interview Mania");
//     echo Sweet;
// }
// cons();

#Array with POP function,

// $cnt = array("Ind","USA","BRAZIL","RNG");

// array_pop($cnt);
// print_r($cnt);


#array with merge function;

// $ary= array("Ritesh"=>"Gaikwad");
// $ary1= array("hey"=>"done");

// print_r(array_merge($ary,$ary1));


#ARRAY FUNCTIONS - INTERSECT THIS FUNCTION WILL GIVE YOU SAME VALUE FROM THE BOTH ARRAY.

// $ar1 = array("A1","B1","C1","D1");
// $ar2 = array("A1","D1","C1");

// $ary3 = array_intersect($ar1,$ar2);
// print_r($ary3);

#ARRAY_SUM() - THIS FUNCTION WILL GIVE YOU A SUM OF INTEGERS ONLY.




#ARRAY_SPLICE - THIS FUNCTION WILL REMOVE ELEMENT WITHIN A SPECIFIED RANGE;

// $REMOVE = array("hey","hi","hello","zen","russel","rusk","higher");

// $r = array_splice ($REMOVE,6);

// print_r($r);


#Multi-Dimensional Arrays- Examples;

// $contacts = array(
//     array(
//         "name" => "Peter Parker",
//         "email" => "peterparker@mail.com",
//     ),
//     array(
//         "name" => "Clark Kent",
//         "email" => "clarkkent@mail.com",
//     ),
//     array(
//         "name" => "Harry Potter",
//         "email" => "harrypotter@mail.com",
//     )
// );
// // Access nested value
// echo "Name Is : " . $contacts[0]["name"]."<br>";
// echo "Email-id is: " . $contacts[0]["email"]."<br><br>";
// echo "Name Is : " . $contacts[1]["name"]."<br>";
// echo "Email-id is: " . $contacts[1]["email"]."<br><br>";
// echo "Name Is : " . $contacts[2]["name"]."<br>";
// echo "Email-id is: " . $contacts[2]["email"]."<br>";

# - Examlple -1 - Multi-Dimensional array;

// $data = array(

//     array(
//         "Name"=> "Ritesh",
//         "Mail"=> "riteshgaikwad@gmail.com",
//     ),
//     array(
//         "Name"=> "Surja",
//         "Mail"=> "riteshgaikwad@gmail.com",

//     ),
//     array(
//         "Name"=> "Te@jas",
//         "Mail"=> "riteshgaikwad@gmail.com",
        
//     )
// );

// echo "My Name Is :".$data[0]["Name"]."<br>";
// echo "My Mail ID Is :".$data[0]["Mail"]."<br>";

// echo "My Name Is :".$data[1]["Name"]."<br>";
// echo "My Mail ID Is :".$data[1]["Mail"]."<br>";

// echo "My Name Is :".$data[2]["Name"]."<br>";
// echo "My Mail ID Is :".$data[2]["Mail"]."<br>";




?>

</body>
</html>
<?php
$d_num = $_POST["S_num"];
$pattern = $_POST["pattern"];

function Trangle($d_num){
    
    for ($i=0; $i <$d_num; $i++) { 
        for ($j=0; $j <$i; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
}

function Diamand($d_num){
    // $d_num = $_POST["d_num"];
    // $pattern = $_POST["pattern"];

    for ($i=0; $i<=$d_num ; $i++) { 
        for ($j=0; $j <=($d_num-$i) - 1; $j++) { 
            echo "&nbsp;";
        }
    
        for ($j=0; $j <=$i; $j++) { 
            echo "*";
        }
    
        echo "<br>";
    }
    
    for ($i=$d_num; $i>=0 ; $i--){ 
        for ($j=($d_num-$i)-1; $j >=0 ; $j--) { 
            echo "&nbsp;";
        }
    
        for ($j=$i; $j >=0; $j--){ 
            echo "*";
        }
    
        echo "<br>";
    }
}

// switch ($pattern) {
//     case "Trangle":
//         Trangle($d_num);
//         break;
    
//     case "Diamand":
//         Diamand($d_num);
//         break;


//     default:
//         echo "Sorry This pattern Does Not Exist";
//         break;
// }

if($pattern == "Trangle"){
    Trangle($d_num);
}
else if($pattern == "Diamand"){
    Diamand($d_num);
}
else{
    echo "Sorry This Pattern does Not Exist";
}

?>
<br>
<br>

<marquee style = "background-color:red; color:black; "behavior="scroll" direction="right">Thanks For Visited Our Website</marquee>
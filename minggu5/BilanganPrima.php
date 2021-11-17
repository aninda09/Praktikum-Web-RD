<?php

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function hasil(){
        $nilai = 2;
        while($nilai < 50){
            $nilai1 = 2;
            if($nilai == 2 || $nilai == 3){
                echo $nilai."  ";
            }
            else if($nilai == 47){
                echo $nilai;
            }
            else{
                while($nilai1<=$nilai){
                    if($nilai1==$nilai){
                        echo $nilai."  ";
                    }
                    else if($nilai1<$nilai && $nilai%$nilai1 == 0){
                        break;
                    }  
                    $nilai1++;
                }
            }
            $nilai++;
        }    
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p><b>Hasil Bilangan Prima 1 sampai 50 adalah : <br></b></p>
    <input type="submit" value="Check">
</form>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        hasil();
    }
?>

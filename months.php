
<?php
$menesiuVardai = array (1=>'Sausis', 2=>'Vasaris', 3=>'Kovas', 4=>'Balandis', 5=>'Gegužė', 6=>'Birželis', 7=>'Liepa', 8=>'Rugpjutis', 9=>'Rugsėjis', 10=>'Spalis', 11=>'Lapkritis', 12=>'Gruodis');

$menesiuDienos = array (1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31);
$menesiai=[];
$count=0;
foreach ($menesiuDienos as $value){
    $count++;
    $menesiai[$menesiuVardai[$count]] =$value;
}
$m31a = "";
$m30a = "";
$m28a = "";
$days = 0;
$m31 = 0;
$m30 =0 ;
$m28 =0 ;
$term = 0;
$pirmi = [];
foreach($menesiai as $key => $val){
    $term++;
    if($val == 31){
        $m31a =' '.$m31a.$key.', ';

        $m31++;
    }elseif ($val == 30){
        $m30a =' '.$m30a.$key.', ';
        $m30++;
    }elseif ($val == 28){
        $m28a =' '.$m28a.$key.', ';
        $m28++;
    }

    $days+=$val;
    if($term < 4){
        $primi[]=$key.' yra '.$term.' menuo jis turi '.$val.' d.'."<br>";
    }
}


echo 'Metuose yra '.$m31.' mėnesiai turintys 31 dieną'.$m31a."<br>";
echo 'Metuose yra '.$m30.' mėnesiai turintys 30 dienų'.$m30a."<br>";
echo 'Metuose yra '.$m28.' mėnesuo turintys 28 dienas'.$m28a."<br>";

echo 'Metuose yra '.$days.' Dienos'."<br>";

for($y=0; $y< sizeof($primi); $y++){
    echo $primi[$y] ;
}

?>



<?php include "head.php" ?>






<?php include "footer.php" ?>




<?php
$allTemps=[];

    if(isset($_POST['temp'])) {
        $temp = $_POST['temp'];
        $allTemps= explode(",", $temp );


    }



       $combined = 0;
       $avarage = 0 ;


       $lowest=$allTemps;
       sort($lowest);

       $highest=$allTemps;
       rsort($highest);


       foreach ($allTemps as $value){

          $combined= $combined+ $value;


       };







   if($combined > 0 ){
$avarage = $combined/(sizeof($allTemps));
   }

?>

<?php include "head.php" ?>
 <div class="container text-center d-flex flex-column align-items-center">
     <h1 class="font-monospace mt-5 mb-5 col-md-6" >Temperatūros</h1>



     <form method="post" class="col-md-6">


     <div class="card  bg-dark-subtle text-center">
         <div class="card-header font-monospace">
             <h2>Iveskite skirtingas temperatūras<br> pvz: 15,16,21,33,25,16...</h2>
         </div>


         <div class="row">
         <div class="card-body col-6">
            <input class="form-control " type="text" name="temp">
             <button class="btn btn-success mt-5">Skaičiuoti</button>
         </div>
         <div class="card-body col-6 font-monospace">
             <h3>Rezultatas :</h3>
             <p>
             <?= ($avarage > 0)?'Temperatūrų vidurkis : '.$avarage:"" ?><br>
             <?= ($avarage > 0)?'Išviso ivestų temperatūrų : '.sizeof($allTemps):"" ?><br>
                 <?php echo ($lowest > 0)?'Dvi žemiausios temperatūros : '.$lowest[0].' ir '.$lowest[1].' Laipsnių':"" ?><br>
                 <?php echo ($highest > 0)?'Dvi aukščiausios temperatūros : '.$highest[0].' ir '.$highest[1].' Laipsnių':"" ?>
         </div>
         </div>




     </div>


     </form>
 </div>





<?php include "footer.php" ?>




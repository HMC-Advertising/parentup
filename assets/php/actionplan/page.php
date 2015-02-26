<?php
    error_reporting(E_ALL);
        ini_set('display_errors', '1');

    if(isset($_POST["one"])){$one = $_POST["one"];}else{$one = "no";}
    if(isset($_POST["two"])){$two = $_POST["two"];}else{$two = "no";}
    if(isset($_POST["three"])){$three = $_POST["three"];}else{$three = "no";}
    if(isset($_POST["four"])){$four = $_POST["four"];}else{$four = "no";}
    if(isset($_POST["five"])){$five = $_POST["five"];}else{$five = "no";}
    if(isset($_POST["six"])){$six = $_POST["six"];}else{$six = "no";}

    //first array is for the support section
    $aTrue =  array( );
    array_push($aTrue, $one, $two, $three, $four, $five, $six);
    //print_r($aTrue);

    for($i=1; $i < 6; $i++){
        $support[] = file_get_contents("files/support/".$i.".php");
    }

    $al = count($support);
    //print_r($support);

echo "<p>";
echo "<h1>Support</h1>";
    for($i = 0; $i<($al); $i++){
        if($aTrue[$i] == "yes"){
            echo $support[$i]. "<br><br>";
       }
    }

echo "</p>";


//Empowerment -------------------------------------------------------------------
    // 7 - 10

    if(isset($_POST["seven"])){$seven = $_POST["seven"];}else{$seven = "no";}
    if(isset($_POST["eight"])){$eight = $_POST["eight"];}else{$eight = "no";}
    if(isset($_POST["nine"])){$nine = $_POST["nine"];}else{$nine = "no";}
    if(isset($_POST["ten"])){$ten = $_POST["ten"];}else{$ten = "no";}

    //first array is for the support section
    $aemp =  array( );
    array_push($aemp, $seven, $eight, $nine, $ten);
    //print_r($aTrue);

    for($i=7; $i < 10; $i++){
        $emp[] = file_get_contents("files/emp/".$i.".php");
    }

    $al = count($emp);
    //print_r($emp);

echo "<p>";
echo "<h1>Empowerment</h1>";
    for($i = 0; $i<($al); $i++){
        if($aemp[$i] == "yes"){
            echo $emp[$i]. "<br><br>";
       }
    }

echo "</p>";

//boundaries --------------------------------------------------------------------
    // 11 - 16

 if(isset($_POST["eleven"])){$eleven = $_POST["eleven"];}else{$eleven = "no";}
    if(isset($_POST["twelve"])){$twelve = $_POST["twelve"];}else{$twelve = "no";}
    if(isset($_POST["threeteen"])){$threeteen = $_POST["threeteen"];}else{$threeteen = "no";}
    if(isset($_POST["fourteen"])){$fourteen = $_POST["fourteen"];}else{$fourteen = "no";}
    if(isset($_POST["fithteen"])){$fithteen = $_POST["fithteen"];}else{$fithteen = "no";}
    if(isset($_POST["sixteen"])){$sixteen = $_POST["sixteen"];}else{$sixteen = "no";}

    //first array is for the support section
    $ab =  array( );
    array_push($ab, $eleven, $twelve, $threeteen, $fourteen, $fithteen, $sixteen);
    //print_r($ab);

    for($i=11; $i < 16; $i++){
        $bound[] = file_get_contents("files/bound/".$i.".php");
    }
   // print_r($bound);

    $aw = count($bound);

echo "<p>";
echo "<h1>BOUNDARIES AND EXPECTATIONS</h1>";
    for($i = 0; $i<($aw); $i++){
        if($ab[$i] == "yes"){
            echo $i. "<br>".$bound[$i]. "<br><br>";
       }
    }

echo "</p>";

    //time --------------------------------------------------------------
    // 17 - 20

    if(isset($_POST["seventeen"])){$seventeen = $_POST["seventeen"];}else{$seventeen = "no";}
    if(isset($_POST["eightteen"])){$eightteen = $_POST["eightteen"];}else{$eightteen = "no";}
    if(isset($_POST["nineteen"])){$nineteen = $_POST["nineteen"];}else{$nineteen = "no";}
    if(isset($_POST["twenty"])){$twenty = $_POST["twenty"];}else{$twenty = "no";}


    //first array is for the support section
    $aq =  array( );
    array_push($aq, $seventeen, $eightteen, $nineteen, $twenty);
    //print_r($aTrue);

    for($i=17; $i < 20; $i++){
        $time[] = file_get_contents("files/time/".$i.".php");
    }

    $ad = count($time);


echo "<p>";
echo "<h1>CONSTRUCTIVE USE OF TIME</h1>";
    for($i = 0; $i<($ad); $i++){
        if($aq[$i] == "yes"){
            echo $time[$i]. "<br><br>";
       }
    }

echo "</p>";
    //learning --------------------------------------------------------------
    // 21 - 25


    if(isset($_POST["twentyone"])){$twentyone = $_POST["twentyone"];}else{$twentyone = "no";}
    if(isset($_POST["twentytwo"])){$twentytwo = $_POST["twentytwo"];}else{$twentytwo = "no";}
    if(isset($_POST["twentythree"])){$twentythree = $_POST["twentythree"];}else{$twentythree = "no";}
    if(isset($_POST["twentyfour"])){$twentyfour = $_POST["twentyfour"];}else{$twentyfour = "no";}
    if(isset($_POST["twentyfive"])){$twentyfive = $_POST["twentyfive"];}else{$twentyfive = "no";}


    //first array is for the support section
    $bb =  array( );
    array_push($bb, $twentyone, $twentytwo, $twentythree, $twentyfour, $twentyfive);
    //print_r($aTrue);

    for($i=21; $i < 25; $i++){
        $learning[] = file_get_contents("files/learn/".$i.".php");
    }

    $cc = count($support);


echo "<p>";
echo "<h1>COMMITMENT TO LEARNING</h1>";
    for($i = 0; $i<($cc); $i++){
        if($bb[$i] == "yes"){
            echo $learning[$i]. "<br><br>";
       }
    }

echo "</p>";

//values -----------------------------------------------------------------------
    // 26 - 31


    if(isset($_POST["twentysix"])){$twentysix = $_POST["twentysix"];}else{$twentysix = "no";}
    if(isset($_POST["twentyseven"])){$twentyseven = $_POST["twentyseven"];}else{$twentyseven = "no";}
    if(isset($_POST["twentyeight"])){$twentyeight = $_POST["twentyeight"];}else{$twentyeight = "no";}
    if(isset($_POST["twentynine"])){$twentynine = $_POST["twentynine"];}else{$twentynine = "no";}
    if(isset($_POST["thirty"])){$thirty = $_POST["thirty"];}else{$thirty = "no";}
    if(isset($_POST["thirtyone"])){$thirtyone = $_POST["thirtyone"];}else{$thirtyone = "no";}

    //first array is for the support section
    $az =  array( );
    array_push($az, $twentysix, $twentyseven, $twentyeight, $twentynine, $thirty, $thirtyone);
    //print_r($aTrue);

    for($i=26; $i < 31; $i++){
        $values[] = file_get_contents("files/value/".$i.".php");
    }

    $pp = count($values);

echo "<p>";
echo "<h1>POSITIVE VALUES</h1>";
    for($i = 0; $i<($pp); $i++){
        if($az[$i] == "yes"){
            echo $values[$i]. "<br><br>";
       }
    }

echo "</p>";
    ///competencies --------------------------------------------------------------
    // 32 - 36


    if(isset($_POST["thirtytwo"])){$thirtytwo = $_POST["thirtytwo"];}else{$thirtytwo = "no";}
    if(isset($_POST["thirtythree"])){$thirtythree = $_POST["thirtythree"];}else{$thirtythree = "no";}
    if(isset($_POST["thirtyfour"])){$thirtyfour = $_POST["thirtyfour"];}else{$thirtyfour = "no";}
    if(isset($_POST["thirtyfive"])){$thirtyfive = $_POST["thirtyfive"];}else{$thirtyfive = "no";}
    if(isset($_POST["thirtysix"])){$thirtysix = $_POST["thirtysix"];}else{$thirtysix = "no";}

    //first array is for the support section
    $rj =  array( );
    array_push($rj, $thirtytwo, $thirtythree, $thirtyfour, $thirtyfive, $thirtysix);
    //print_r($aTrue);

    for($i=32; $i < 36; $i++){
        $compt[] = file_get_contents("files/comp/".$i.".php");
    }

    $hh = count($compt);


echo "<p>";
echo "<h1>SOCIAL COMPETENCIES</h1>";
    for($i = 0; $i<($hh); $i++){
        if($rj[$i] == "yes"){
            echo $compt[$i]. "<br><br>";
       }
    }

echo "</p>";

    //identity --------------------------------------------------------------
    // 37 - 40



    if(isset($_POST["thirtyseven"])){$thirtyseven = $_POST["thirtyseven"];}else{$thirtyseven = "no";}
    if(isset($_POST["thirtyeight"])){$thirtyeight = $_POST["thirtyeight"];}else{$thirtyeight = "no";}
    if(isset($_POST["thirtynine"])){$thirtynine = $_POST["thirtynine"];}else{$thirtynine = "no";}
    if(isset($_POST["fourty"])){$fourty = $_POST["fourty"];}else{$fourty = "no";}

    //first array is for the support section
    $tg =  array( );
    array_push($tg, $thirtyseven, $thirtyeight, $thirtynine, $fourty);
    //print_r($aTrue);

    for($i=37; $i < 40; $i++){
        $id[] = file_get_contents("files/id/".$i.".php");
    }

    $vf = count($id);


echo "<p>";
echo "<h1>POSITIVE IDENTITY</h1>";
    for($i = 0; $i<($vf); $i++){
        if($tg[$i] == "yes"){
            echo $id[$i]. "<br><br>";
       }
    }

echo "</p>";


?>
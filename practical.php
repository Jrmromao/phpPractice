<?php

//=====================================================================================
//=====================================================================================
    echo "<p>PROBLEM ONE</p>";
    $random_Array = array();
    $counter = 0;
    for ($i = 0; $i < 100; $i++){

        array_push($random_Array,rand(0, 49));

    }
      $i = 0;
    foreach($random_Array as $row => $num) {
          if ($i == 12) {
              echo " <br>";
              $i = 0;
          }
          echo  $num. ", ";
          $i++;
    }
    echo " <br>";
    $smallest = $random_Array[count($random_Array)-1];

    for ($i = 0; $i < sizeof($random_Array); $i++) {
        if ($smallest < $random_Array[$i])
            $smallest = $random_Array[$i];
    }

    echo "THE SMALLEST VALUE IS: '$smallest' ";
//=====================================================================================
//=====================================================================================

    echo "<p>PROBLEM TWO</p>";

    $_array = array();

    for ($i = 0; $i < 50; $i++){
        array_push( $_array, rand(0, 50));
    }
    $_count = 0;
    $_AssoArr = array();
    for ($i = 0;$i < count($_array); $i++){

        if(($_array[$i] === $_array[$i]) && ( $_array[$i] >= 10) && ($_array[$i]<=20))
        {
            $_count++;
            echo $_array[$i].' '. $_count.": TIMES <br>";

        }
    }




//=====================================================================================
//=====================================================================================
    echo "<br>";
    echo "<br>PROBLEM THREE";
    echo "<br><br>";



    echo '<form action="_PHP_SELF " method="get"> ';
            echo '<input type="number" name="num"  placeholder="enter num"/> ';
            echo '<input type="submit">';
    echo'</form>';
$num = $_REQUEST['num'];


echo $num;















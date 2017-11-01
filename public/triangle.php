<?php



function calc($min, $max) {

    $sum=0;


    echo '<hr/>';

    for($i=$min; $i<=$max; $i++) {
        echo '<pre id="' . __FILE__ . '-' . __LINE__ . '" style="border: solid 1px rgb(255,0,0); background-color:rgb(255,255,0)">';
        echo '<div style="background-color:rgba(100,100,100,1); color: rgba(255,255,255,1)">' . __FILE__ . '@' . __LINE__ . '</div>';
        print_r($i);
        echo '</pre>';


        $sum +=1;

        //compter les combinaisons


        /*

        if($max*2<$i*2) {
            $sum+=($max-$i);
        }

        if($min*2>$i) {
            $sum+=($i-$min);
        }
        */
    }

    $sum+=1;


    return $sum;


}


$t=calc(1,2);
echo '<pre id="' . __FILE__ . '-' . __LINE__ . '" style="border: solid 1px rgb(255,0,0); background-color:rgb(255,255,255)">';
echo '<div style="background-color:rgba(100,100,100,1); color: rgba(255,255,255,1)">' . __FILE__ . '@' . __LINE__ . '</div>';
print_r($t);
echo '</pre>';


$t=calc(9, 10);
echo '<pre id="' . __FILE__ . '-' . __LINE__ . '" style="border: solid 1px rgb(255,0,0); background-color:rgb(255,255,255)">';
echo '<div style="background-color:rgba(100,100,100,1); color: rgba(255,255,255,1)">' . __FILE__ . '@' . __LINE__ . '</div>';
print_r($t);
echo '</pre>';


$t=calc(1,3);
echo '<pre id="' . __FILE__ . '-' . __LINE__ . '" style="border: solid 1px rgb(255,0,0); background-color:rgb(255,255,255)">';
echo '<div style="background-color:rgba(100,100,100,1); color: rgba(255,255,255,1)">' . __FILE__ . '@' . __LINE__ . '</div>';
print_r($t);
echo '</pre>';


$t=calc(2, 4);
echo '<pre id="' . __FILE__ . '-' . __LINE__ . '" style="border: solid 1px rgb(255,0,0); background-color:rgb(255,255,255)">';
echo '<div style="background-color:rgba(100,100,100,1); color: rgba(255,255,255,1)">' . __FILE__ . '@' . __LINE__ . '</div>';
print_r($t);
echo '</pre>';


$t=calc(19, 1000);
echo '<pre id="' . __FILE__ . '-' . __LINE__ . '" style="border: solid 1px rgb(255,0,0); background-color:rgb(255,255,255)">';
echo '<div style="background-color:rgba(100,100,100,1); color: rgba(255,255,255,1)">' . __FILE__ . '@' . __LINE__ . '</div>';
print_r($t);
echo '</pre>';




/*
$t=calc(19, 1000);
echo '<pre id="' . __FILE__ . '-' . __LINE__ . '" style="border: solid 1px rgb(255,0,0); background-color:rgb(255,255,255)">';
echo '<div style="background-color:rgba(100,100,100,1); color: rgba(255,255,255,1)">' . __FILE__ . '@' . __LINE__ . '</div>';
print_r($t);
echo '</pre>';
*/

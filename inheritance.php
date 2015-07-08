<?php
$nyanyi = function(){
echo 'lalalala';



};

function testSuara ($test, $callback){

echo $test;
$callback();
}
testSuara( 'ehm ehm',$nyanyi);



?>
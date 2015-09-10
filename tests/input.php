<?php 
include_once ("\phpGroupProject\Core\input.php");


echo '$_GET is empty <br / >';
var_dump(inputGet('page','int', 0 ) );
echo "<br > -------------------- <br / >";


$GET = ["page"=>1
];
echo 'has page in $_GET array and its int <br/ >';
echo inputGet ('page', 'int', 0 );
echo "<br> ------------------ <br / >";

$GET = ["page"=>'str'
];
echo 'has page in $_GET array and its int <br/ >';
var_dump(inputGet ('page', 'int', 0 )) ;
echo "<br> ------------------ <br / >";

$GET = ["selection"=>'home'
];
echo 'has page in $_GET array and its int <br/ >';
var_dump(inputGet ('selection', 'str', 404 )) ;
echo "<br> ------------------ <br / >";

$GET = ["selection"=>'1000'
];
echo 'has page in $_GET array and its int <br/ >';
var_dump(inputGet ('selection', 'str', 404 )) ;
echo "<br> ------------------ <br / >";
 ?>


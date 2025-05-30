<?php
     // 1. Local scope
// function myTest() {
//     $x = 25;
//     echo "it is a inside the function: $x";
// }
// myTest();
// echo "it is a outside the function: $x";
?>

<!-- // 2. Global scope -->

<?php
// $x = 25;
// function myTest() {
//     echo "it is a inside the function: $x";
// }
// myTest();
// echo "it is a outside the function: $x";
?>

<!-- // 2. Global keyword -->
<?php
// $x = 10;
// $y = 10;
// function myTest() {
//     global $x, $y;
//     $y = $x + $y;
// }
// myTest();
// echo "it is a outside the function: $y";
?>

<?php
// $x = 10;
// $y = 10;
// function myTest() {
//     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
// myTest();
// echo "it is a outside the function: $y";
?>
<?php

   // by static variable
// function myTest() {
//      static $x = 10;
//     echo "$x";
//     $x--;
// }
// myTest();
// echo "<br>";

// myTest();
// echo "<br>";

// myTest();
// echo "<br>";

// myTest();
// echo "<br>";

// myTest();
// echo "<br>";

// myTest();
// echo "<br>";
// myTest();
// echo "<br>";

// myTest();
// echo "<br>";

// myTest();
// echo "<br>";

// myTest();
// echo "<br>";
?>

  <!-- //by normal variable -->

<?php
function myTest() {
     static $x = 10;
    echo "$x";
    $x--;
}
myTest();
echo "<br>";

myTest();
echo "<br>";

myTest();
echo "<br>";

myTest();
echo "<br>";

myTest();
echo "<br>";

myTest();
echo "<br>";
myTest();
echo "<br>";

myTest();
echo "<br>";

myTest();
echo "<br>";

myTest();
echo "<br>";
?>
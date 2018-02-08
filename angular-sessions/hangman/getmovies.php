<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "hangman");

$result = $conn->query("SELECT movie_no, movie_name FROM movielist");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"movieno":"'  . $rs["movie_no"] . '",';
    $outp .= '"moviename":"'. $rs["movie_name"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>

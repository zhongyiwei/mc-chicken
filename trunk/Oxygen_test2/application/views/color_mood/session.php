<!--
    Author     : Ariansah
    Description: Used to retrieve the color chosen by the user and keep it in the session
-->

<?php
$color=$_GET['mycolor'];

if ($color == "red1abc" || $color == "red2abc" || $color == "red3abc" || $color == "red4abc" || $color == "green1abc" || $color == "green2abc" || $color == "brown3abc" || $color == "brown4abc" || $color == "yellow4abc"
        || $color == "purple2abc" || $color == "purple3abc" || $color == "pink1abc" || $color == "pink2abc" || $color == "pink3abc" || $color == "pink4abc" || $color == "blue2abc" || $color == "blue3abc" || $color == "whiteabc") {
    $type = "neutral";
}
else if ($color == "brown1abc" || $color == "brown2abc" || $color == "purple1abc" || $color == "blue1abc" || $color == "black1abc"
        || $color == "black2abc" || $color == "black3abc" || $color == "black4abc" || $color == "black5abc") {
    $type = "negative";
}

else {
    $type = "positive";
}

$this->session->set_userdata('type', $type);
$this->session->set_userdata('color', $color);
redirect('home');
?>
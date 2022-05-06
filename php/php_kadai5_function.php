関数課題１
<br/>
足し算
<?php
    function sum($a,$b) {
        return $a + $b;
    }
    $a = 20;
    $b = 30;
    $ab = sum($a,$b);
    echo $ab ."\n";
?>
<br/>
引き算
<?php
    function sub($a,$b) {
        return $a - $b;
    }
    $a = 20;
    $b = 30;
    $ab = sub($a,$b);
    echo $ab ."\n";
?>
<br/>
掛け算
<?php
    function mul($a,$b) {
        return $a * $b;
    }
    $a = 20;
    $b = 30;
    $ab = mul($a,$b);
    echo $ab ."\n";
?>
<br/>
割り算
<?php
    function div($a,$b) {
        return $a / $b;
    }
    $a = 20;
    $b = 30;
    $ab = div($a,$b);
    echo $ab ."\n";
?>
<br/>
<br/>
関数課題２
<br/>
足し算
<?php
    function plus(&$a,$b) {
        return $a + $b;
    }
    $a = 10;
    $b = 20;
    $ab = plus($a,$b);
    echo $ab ."\n";
?>
<br/>
引き算
<?php
    function minus(&$a,$b) {
        return $a - $b;
    }
    $a = 10;
    $b = 20;
    $ab = minus($a,$b);
    echo $ab ."\n";
?>
<br/>
掛け算
<?php
    function multiplication(&$a,$b) {
        return $a * $b;
    }
    $a = 10;
    $b = 20;
    $ab = multiplication($a,$b);
    echo $ab ."\n";
?>
<br/>
割り算
<?php
    function division(&$a,$b) {
        return $a / $b;
    }
    $a = 10;
    $b = 20;
    $ab = division($a,$b);
    echo $ab ."\n";
?>
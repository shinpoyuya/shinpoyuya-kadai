1-1
<?php
   $x = "A";
   $y = "a";
   if (strcasecmp($x, $y) == 0) {
       echo ('同じ文字列')."<br/>";
   }
   else {
       echo ('異なる文字列');
   }
?>

<br/>1-2
<?php
   $x = 'はさき';
   $x .= 'やすお';
   echo $x."<br/>";
?>

<br/>1-3
<?php
    $a = 'はさき';
    $b = '2';
    $c = 'やすお';
    $d = $a.$b.$c;
    echo $d."<br/>";
?>

<br/>1-4
<?php
    define("example", "やすお");
    echo example;
    echo "<br/>";
?>

<?php
    const example2 = "やすお";
    echo example2;
    echo "<br/>";
?>

<br/>1-5
<?php
     print_r( __LINE__ . '行目');
     print_r( __FILE__ . 'ファイル名')."<br/>";
?>
<br/>
<br/>1-6
<?php
    echo 300 / 365;
?>
<br/>
<br/>1-7
<?php
    $i = 10;
    echo $i++;
    echo '<br/>';
    echo $i;
?>
<br/>
<br/>1-8
<?php
    $i = 10;
    echo $i--;
    echo '<br/>';
    echo $i;
?>
<br/>
<br/>1-9
<?php
    $i = 10;
    echo $i++;
    echo '<br/>';
    echo $i;
    echo '<br/>';
    echo --$i;
?>
<br/>
<br/>1-10
<?php
    echo 3 + 2;
?>
<br/>
<br/>1-11
<?php
    var_dump(1234);
?>
<br/>
<br/>1-12
<?php
    $c = 3;
   echo $c + 2;
?>
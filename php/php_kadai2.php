2-1
<?php
    echo 2 + 4 - 5;
    echo '<br/>';
    echo 4 - 5 +2;
    echo '<br/>';
    echo 4 * 5 / 2;
    echo '<br/>';
    echo 5 / 2 * 4;
?>
<br/>
<br/>
2-2
<?php
    echo 2 * 3 + 4 + 1;
    echo '<br/>';
    echo 2 *(3 + 4 + 1);
?>
<br/>
<br/>
2-3
<?php
    if(TRUE) {
        echo 'やすお';
        echo '<br/>';
    }
?>
<br/>
<?php
    if(FALSE) {
        echo 'やすお';
        echo '<br/>';
    }
    echo 'ifのあとの（）にFALSEを入れると{}内の命令が反応されなくなります。';
?>
<br/>
<br/>
2-4
<?php
    $members = ['yasuo', 'ahri', 'darius'];
    for($i = 0; $i < count($members); $i++) {
        echo $members[$i];
        echo '<br>';
    }
?>
<br/>
2-5
<?php
   $members = array('yasuo', 'ahri', 'darius');
   sort($members);
   print_r($members);
?>
<br/>
<br/>
2-6
<?php
    $i = array(
        ['新保','エンジニア','男性'],
        ['結城さん','営業','男性']
    );
    foreach($i as $key1 => $value1) {
        foreach($value1 as $key2 => $value2) {
            echo $key1.":".$value2."\n";
        }
    }
?>
<br/>
<?php
    $i = array(
        ['新保','エンジニア','男性'],
        ['結城さん','営業','男性']
    );
    while($value = current($i)) {
        echo $key1.":".$value2."\n";
    }
?>
3-1
<?php
    $i = rand(1,6);
    if ($i ==1) {
        echo 'ファーストブラッド';
    } else if ($i == 2) {
        echo 'ダブルキル';
    } else if ($i == 3) {
        echo 'トリプルキル';
    } else if ($i == 4) {
        echo 'クアドラキル';
    } else if ($i == 5) {
        echo 'ペンタキル';
    } else if ($i == 6) {
        echo 'フィーダー';
    }
?>
<br/>
<br/>
3-2
<?php
    $i = rand(0,1);
    $result = ($i == 0) ? '0です。' : '1です。';
    echo $result;
?>
<br/>
<br/>
3-3
<?php
    $i = rand(1,4);
    switch($i) {
        case 1:
            echo 'こんにちは';
            break;
        case 2:
            echo 'おはようございます';
            break;
        case 3:
            echo 'こんばんわ';
            break;
        case 4:
            echo 'お元気ですか';
            break;
        default:
            echo '特になし';
    }
?>
<br/>
<br/>
3-4
<?php
    $i = rand(1,4);
    switch($i) {
        case 1:
            echo 'こんにちは.<br/>';
            
        case 2:
            echo 'おはようございます.<br/>';
            
        case 3:
            echo 'こんばんわ.<br/>';
            
        case 4:
            echo 'お元気ですか.<br/>';
            
        default:
            echo '特になし.<br/>';
    }
?>
<br/>
<br/>
3-5
<?php
    $i = rand(1,6);
    switch($i) {
        case 1:
            echo 'こんにちは';
            break;
        case 2:
            echo 'おはようございます';
            break;
        case 3:
            echo 'こんばんわ';
            break;
        case 4:
            echo 'お元気ですか';
            break;
        default:
            echo 'Not Found';
    }
?>
<br/>
<br/>
3-6
<?php
    $i = rand(1,4);
    switch($i) :
        case 1:
            echo 'こんにちは';
            break;
        case 2:
            echo 'おはようございます';
            break;
        case 3:
            echo 'こんばんわ';
            break;
        case 4:
            echo 'お元気ですか';
            break;
        default:
            echo '特になし';
endswitch;
?>
<br/>
<br/>
3-7
<?php
    $count = 0;
    while($count <= 10) {
        echo $count;
        echo '<br>';
        $count++;
    }
?>
<br/>
<br/>
3-8
<?php
    $count = 0;
    do {
        echo "$count\n";
        $count++;
    } while($count <= 10);
?>
<br/>
<br/>
3-9
<?php
    for($counter = -3; $counter < 10; $counter++) {
        if($counter == 0) {
            break;
        }else {
            echo 100 / $counter.'<br>';
        }
    }
?>
<br/>
<br/>
3-10
<?php
    for($counter = -3; $counter < 10; $counter++) {
        if($counter === 0) {
            continue;
        }else {
            echo 100 / $counter.'<br>';
        }
    }
?>
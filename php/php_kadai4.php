4-1
<?php
    $i = array(
        'M'=>'月曜',
        'T'=>'火曜',
        'W'=>'水曜',
        'TH'=>'木曜',
        'F'=>'金曜',
    );
    foreach($i as $key => $value) {
        echo $key. ':'.$value. ' ';
    }
?>
<br/>
<br/>
4-2
<?php
    $i = [
        'technically'=>'厳密には',
        'anyway'=>'とりあえず',
        'meaningless'=>'無意味',
    ];
foreach($i as $english=>$japanese) {
    echo($english. ':'.$japanese. "\n");
}
?>
<br/>
<br/>
4-3
<?php
    $a = array(
        'M'=>'月曜',
        'T'=>'火曜',
        'W'=>'水曜',
        'TH'=>'木曜',
        'F'=>'金曜'
    );
    $b = array(
        'technically'=>'厳密には',
        'anyway'=>'とりあえず',
        'meaningless'=>'無意味'
    );
    echo $b['anyway'];
    echo $a['T'];
?>
<br/>
<br/>
4-4
<?php
    $arr1 = array(
        'M'=>'月曜',
        'T'=>'火曜',
        'W'=>'水曜',
        'TH'=>'木曜',
        'F'=>'金曜'
    );
    $arr2 = array(
        'technically'=>'厳密には',
        'anyway'=>'とりあえず',
        'meaningless'=>'無意味'
    );
    echo count($arr1) . ' ';
    echo count($arr2) . ' ';
?>
<br/>
<br/>
4-5
<?php
  $i = array(
      ['name' => '新保', 'sex' => '男性'],
      ['name' => '結城さん', 'sex' => '男性']
  );
  foreach($i as $key1 => $value1) {
    foreach($value1 as $key2 => $value2) {
        echo $key1.":".$value2."\n";
  }
}
?>
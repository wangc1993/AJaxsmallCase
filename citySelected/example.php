<?php
require_once('connect.php');
$flag =1;
if($flag == 1){
    $query=mysql_query("select * from province order by id");
}
while ($row=mysql_fetch_array($query)) {
    $sayList[] = array(
        'code'=>$row['code'],
        'name'=>$row['name']
    );//php设置二维数组的一种方式
}
if($sayList){
     for($i =0;$i<count($sayList);$i++){
        echo $sayList[$i]['code'].$sayList[$i]['name'];
        echo '<br/>';
     }
}else{
    echo 0;
}

?>
<?php
include 'hit_counter.php';
$ip_user=$_SERVER['REMOTE_ADDR'];

function ip_exist(){
    global $ip_user;
    $query="select 'ip' from 'hit_ip' where 'ip'='$ip_user'";
    $query_run=mysql_query($query);
    $query_row=mysql_num_rows($query_run);
    if($query_row=0){
        return false;
    }
    else if ($query_row>=1)
    {return true;
    }
}

function ip_add($ip){
    $query="insert into 'hit_ip' values ('$ip')";
    @$query_run=mysql_query($query);
}
function count_inc(){
    $query="select 'count' from hit_count";
    if($mysqlrun=mysql_query('$query')){
        $count=mysql_result('$mysqlrun',0,'count');
        $count_inc=$count+1;
        $query_update="update 'hit_count' set 'count'=$count_inc";
        $query_run=mysql_query($query_update);

    }
}

if(!ip_exist($ip_user))
{
    count_inc();
    ip_add($ip_user);

}


?>

<?php


require ("db.php");

function getUserData($id){
    $array = array();
    $q = mysql_query("SELECT * FROM 'user' WHERE 'id'=".$id);
    while($r = mysql_fetch_assoc($q)){
        $array['username'] = $r['username'];
         $array['password'] = $r['password'];
          $array['id'] = $r['id'];
           $array['coin'] = $r['coin'];
        
    }
    return $array;
}

function getId($username){
    $q = mysql_query("SELECT 'id' FROM 'user' WHERE 'username'= '".$username."'");
    while ($r = mysql_fetch_assoc($q)){
        return $r['id'];
    }
}

?>
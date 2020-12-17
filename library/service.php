<?php

class news_index{
    public static $res;
    public static function getOnce($k){
        global $db;
        $res = $db->query("SELECT * FROM news_glav WHERE id='$k'");
        if($res->num_rows > 0){
            return $res;
        }
        else{
            return false;
        }
    }
}

?>
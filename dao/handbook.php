<?php
function insert_handbook($id_handbook,$title,$content,$img){
        $sql = "insert into handbook(id_handbook,title,content,img) values ('$id_handbook','$title','$content','$img')";
        pdo_execute($sql);
        
    }
?>
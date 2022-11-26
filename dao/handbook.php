<?php
function insert_handbook($id_handbook,$title,$content,$img){
        $sql = "insert into handbooks(id_handbook,title,content,img) values ('$id_handbook','$title','$content','$img')";
        pdo_execute($sql);
        
    }
function load_handbook_one($id){
        $sql ="select* from handbooks where id_handbook='$id'";
        return pdo_query($sql);
    }
    function load_handbook_all(){
        $sql ="select* from handbooks";
        return pdo_query($sql);
    }


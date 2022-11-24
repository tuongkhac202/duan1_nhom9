<?php
function insert_handbook($id_handbook,$title,$content,$img){
        $sql = "insert into handbook(id_handbook,title,content,img) values ('$id_handbook','$title','$content','$img')";
        pdo_execute($sql);
        
    }
function load_handbook_one($id){
        $sql ="select* from handbook where id_handbook='$id'";
        $hand_book = pdo_query($sql);
        return $hand_book;
    }

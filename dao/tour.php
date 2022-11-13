<?php
function load_tour(){
    $sql ="select tours.*, places.name_place from tours join places on tours.id_place = places.id_place  limit 6";
    $tour = pdo_query($sql);
    return $tour;
}

?>
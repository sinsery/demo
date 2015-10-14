<?php
$arr = array();
$arr['filename'] = "";
if ((($_FILES["upload"]["type"] == "image/gif")
        || ($_FILES["upload"]["type"] == "image/jpeg")
        || ($_FILES["upload"]["type"] == "image/pjpeg"))
    && ($_FILES["upload"]["size"] < 2000000)
) {
    if ($_FILES["upload"]["error"] > 0) {

    } else {


        move_uploaded_file($_FILES["upload"]["tmp_name"],
            $_FILES["upload"]["name"]);
        $arr['filename'] = $_FILES["upload"]["name"];
        echo json_encode($arr);

    }
}

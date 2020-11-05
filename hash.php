<form method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple>
    <button type="submit" name="upload">Upload</button>
</form>
<?php

if(isset($_POST['upload'])) {
    $file = $_FILES;

    foreach ($file as $img) {
        print_r($img);
        foreach ($img['name'] as $k=>$img_name) {
            $tmp_name = $img['tmp_name'][$k];
            move_uploaded_file($tmp_name,'image/'.$img_name);
        }
    }
}

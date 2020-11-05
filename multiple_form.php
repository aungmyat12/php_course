<form method="POST" enctype="multipart/form-data">
    <p>
        <input type="file" multiple name="image[]">
    </p>
    <p>
        <input name="upload" type="submit" value="upload">
    </p>
</form>
<?php
if(isset($_POST['upload'])) {
    $file = $_FILES;
    foreach($file as $img) {
        foreach($img['name'] as $k => $img_name) {
            $tmp_name = $img['tmp_name'][$k];
            move_uploaded_file($tmp_name,'image/' . $img_name);
        }
    }
}
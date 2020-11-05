<form method="POST" enctype="multipart/form-data">
    <p>
        <input type="file" name="image">
    </p>
    <p>
        <input name="upload" type="submit" value="upload">
    </p>
</form>
<?php
if(isset($_POST['upload'])) {
    $file = $_FILES['image'];
    $image_name = $file['name'];
    $target_file = "image/" . $image_name;
    $tmp = $file['tmp_name'];
    move_uploaded_file($tmp,$target_file);
}
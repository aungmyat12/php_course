<?php
require_once "inc/header.php";
?>
<a href="index.php" class="btn btn-dark btn-sm mb-3">Back</a>
<form action="" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Enter Username</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" id="file" name="image" class="form-control">
            </div>
            <input type="submit" value="Create" class="btn btn-sm btn-danger">
        </div>
    </div>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $image_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $path = 'image/'.$image_name;

    //upload file
    move_uploaded_file($tmp_name,$path);

    // insert into database
    $sql = "INSERT INTO crud (name,image) VALUES (?,?)";
    $res = $pdo->prepare($sql);
    $res->execute([$name,$image_name]);


    // redirect to index
    header("location:DB.php?create=success");
}
?>
<?php
require_once "inc/footer.php";
?>













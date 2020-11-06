<?php
require_once "inc/header.php";
?>
<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM crud WHERE id=?";
        $res = $pdo->prepare($sql);
        $res->execute([$id]);
        $data = $res->fetch(PDO::FETCH_ASSOC);
    }
?>
<a href="index.php" class="btn btn-dark btn-sm mb-3">Back</a>
<form action="" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Enter Username</label>
                <input type="text" value="<?php echo $data['name'] ?>" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="file">Choose Image</label>
                <input type="file" id="file" name="image" class="form-control">
                <img src="image/<?php echo $data['image'] ?>" width="100px" style="border-radius: 30%" alt="">
            </div>
            <input type="submit" value="Update" class="btn btn-sm btn-danger">
        </div>
    </div>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        if($_FILES['image']['tmp_name'] !== '') {
            $tmp_name = $_FILES['image']['tmp_name'];
            $image_name = $_FILES['image']['name'];
            $path = 'image/'.$image_name;
            move_uploaded_file($tmp_name,$path);
        } else {
            $image_name = $data['image'];
        }
        $sql = "UPDATE crud SET name=?,image=? WHERE id=?";
        $res = $pdo->prepare($sql);
        $res->execute([$name,$image_name,$id]);
        header("location:DB.php?update=success");
    }
?>
<?php
require_once "inc/footer.php";
?>













<?php
require_once "inc/header.php";
?>
<!--For Create success-->
<?php
if(isset($_GET['create'])) { ?>
    <div class="alert alert-success">Created Success</div>
    <?php
}
?>
<?php
if(isset($_GET['delete'])) { ?>
    <div class="alert alert-delete">Deleted Success</div>
    <?php
}
?>
<?php
if(isset($_GET['update'])) { ?>
    <div class="alert alert-success">Updated Success</div>
    <?php
}
?>
<a href="create.php" class="btn btn-success btn-sm mb-3">Create</a>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Options</th>
    </tr>
    <?php
        $no = 1;
        $sql = "SELECT * FROM crud";
        $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $d) { ?>
        <tr>
            <td><?php echo $no; $no++?></td>
            <td>
                <img src="image/<?php echo $d['image'] ?>" style="border-radius: 30%" alt="" width="100px">
            </td>
            <td><?php echo $d['name'] ?></td>
            <td>
                <a href="update.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-warning">Update</a>
                <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        <?php } ?>
</table>

<?php
require_once "inc/footer.php";
?>

<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head.php");?>
    <?php include("includes/styles.php");?>
</head>
<body>

<?php include("includes/header.php");?>

<main role="main">

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <?php
                include_once("db_connect.php");
                $sql = "SELECT id, name, surname, team, nationality, image FROM drivers";
                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                while( $record = mysqli_fetch_assoc($resultset) ) {
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="cardheader">
                                <div class="avatar">
                                    <img alt="<?php echo $record['name']; ?>" src="<?php echo $record['image']; ?>">
                                </div>
                            </div>
                            <div class="card-body info">
                                <div class="title">
                                    <a href="#"><?php echo $record['name']; ?></a>
                                </div>
                                <div class="desc"><?php echo $record['surname']; ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

</main>



<?php include("includes/footer.php");?>
<?php include("includes/scripts.php");?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head.php");?>
    <?php include("includes/styles.php");?>
</head>
<body>

<?php include("includes/header.php");?>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container jumbotron-content">
      <h1 class="jumbotron-heading">Ankieta sezonu 2019</h1>
      <p class="lead">
          Wybierz najlepszego kierowce i zespół, który według ciebie
          zwycięży w bieżącym sezonie.
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>

            <?php
                if( !empty( $_REQUEST['Message'] ) )
                {
                    echo sprintf( '<p>%s</p>', $_REQUEST['Message'] );
                }
            ?>

        </div>



        <form action="answer.php" method="post">

            <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>

            <div class="form-group row">
                <label for="driver" class="col-sm-4 col-form-label">Wybierz zwycięzce</label>
                <div class="col-sm-8">
                    <select class="form-control" id="driver" name="driver">
                        <?php
                        include_once("db_connect.php");
                        $sql = "SELECT id, name, surname FROM drivers";
                        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                        while( $record = mysqli_fetch_assoc($resultset) ) {
                            ?>
                            <option value="<?php echo $record['id']; ?>"><?php echo $record['name']; ?> <?php echo $record['surname']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="team" class="col-sm-4 col-form-label">Który zespół osiągnie zwycięstwo</label>
                <div class="col-sm-8">
                    <select class="form-control" id="team" name="team">
                        <?php
                        include_once("db_connect.php");
                        $sql = "SELECT id, name FROM teams";
                        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                        while( $record = mysqli_fetch_assoc($resultset) ) {
                            ?>
                            <option value="<?php echo $record['id']; ?>"><?php echo $record['name']; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div id="send-answer">
                <button type="submit" class="btn btn-secondary">Wyślij</button>
            </div>

        </form>

    </div>
  </div>

</main>



<?php include("includes/footer.php");?>
<?php include("includes/scripts.php");?>

<script>
    $(document).ready(function () {
        setTimeout(function() {
            $("#success-alert").slideUp(500);
        }, 3000)
    });
</script>

</body>
</html>
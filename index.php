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
      <h1 class="jumbotron-heading">Ankieta kierowców formuły 1</h1>
      <p class="lead">
          Oceń na podstawie zdefiniowanych wystycznych kierowce formuły 1 <br/> i wybierz najlepszego według ciebie w
          sezonie 2019.
      </p>
      <p>
        <a href="#" class="btn btn-primary my-2">Przejdź do ankiety</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

        <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Wybierz kierowce</label>
                <div class="col-sm-10">
                    <select class="form-control" id="exampleFormControlSelect1">
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
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>

            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>

    </div>
  </div>

</main>



<?php include("includes/footer.php");?>
<?php include("includes/scripts.php");?>

</body>
</html>
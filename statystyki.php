<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head.php");?>
    <?php include("includes/styles.php");?>
</head>
<body>

<?php include("includes/header.php");?>

<main role="main">

    <?php
    if( !empty( $_REQUEST['Message'] ) )
    {
        echo ('
                    <div class="alert alert-success" id="success-alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        '.sprintf( '<p>%s</p>', $_REQUEST['Message'] ).'
                    </div>
                ');
    }
    ?>

    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="wrapper">
                    <div class="list">
                        <div class="list__header">
                            <h5>Drivers rank</h5>
                            <h1>Ranking kierowców</h1>
                        </div>
                        <div class="list__body">
                            <table class="list__table">

                                <?php
                                include_once("db_connect.php");

                                $sql = "
                                       SELECT
                                          drivers.id,
                                          drivers.name,
                                          drivers.surname,
                                          drivers.image,
                                          teams.name AS team_name,
                                          COUNT(drivers_answers.driver_id) AS drivers_answers
                                        FROM
                                          drivers
                                        LEFT JOIN drivers_answers ON drivers.id = drivers_answers.driver_id
                                        LEFT JOIN teams ON drivers.team = teams.id
                                        GROUP BY drivers.id
                                        ORDER BY drivers_answers DESC;
                                       ";
                                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                $index = 1;
                                while( $record = mysqli_fetch_assoc($resultset) ) {
                                    ?>

                                    <tr class="list__row">
                                        <td class="list__cell"><span class="list__value"><?php echo $index ?></span></td>
                                        <td class="list__cell"><span class="list__value"><img alt="<?php echo $record['name']; ?>" src="<?php echo $record['image']; ?>"></span></td>
                                        <td class="list__cell"><span class="list__value"><?php echo $record['name']; ?> <?php echo $record['surname']; ?></span><small class="list__label">Kierowca</small></td>
                                        <td class="list__cell"><span class="list__value"><?php echo $record['team_name']; ?></span><small class="list__label">Zespół</small></td>
                                        <td class="list__cell"><span class="list__value"><?php echo $record['drivers_answers']; ?></span><small class="list__label">Punktów</small></td>
                                    </tr>

                                    <?php $index++; } ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="wrapper">
                    <div class="list">
                        <div class="list__header">
                            <h5>Teams rank</h5>
                            <h1>Ranking zespołów</h1>
                        </div>
                        <div class="list__body">
                            <table class="list__table">

                                <?php
                                include_once("db_connect.php");

                                $sql = "
                                        SELECT
                                          teams.id,
                                          teams.name,
                                          COUNT(teams_answers.team_id) AS teams_answers
                                        FROM
                                          teams
                                        LEFT JOIN teams_answers ON teams.id = teams_answers.team_id
                                        GROUP BY teams.id
                                        ORDER BY teams_answers DESC;
                                ";
                                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                $index = 1;
                                while( $record = mysqli_fetch_assoc($resultset) ) {
                                    ?>

                                    <tr class="list__row">
                                        <td class="list__cell"><span class="list__value"><?php echo $index ?></span></td>
                                        <td class="list__cell"><span class="list__value"><?php echo $record['name']; ?> </span><small class="list__label">Nazwa zespołu</small></td>
                                        <td class="list__cell"><span class="list__value"><?php echo $record['teams_answers']; ?></span><small class="list__label">Punktów</small></td>
                                    </tr>

                                    <?php $index++; } ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include("includes/footer.php");?>
<?php include("includes/scripts.php");?>

<script>
    $(document).ready(function () {
        setTimeout(function() {
            $("#success-alert").slideUp(500);
        }, 1500)
    });
</script>

</body>
</html>
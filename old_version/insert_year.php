<?php
    require_once('database/initialize.php');
    require_once('functions.php');
    require_once('display_table.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $year= $_POST["year"];

        $success = insert_year($year);
    }else{
        $success = false;
    }
    db_disconnect();

    /*
    * insert year
    */

    year_table();

    if($success){
        ?>
        <div>
            <p><?php echo $year ?> was added successfully</p>
        </div>
        <?php
    }
?>

    <h1>Add Year</h1>
    <form action="insert_year.php" method="POST">
        <label for="year">Year: </label>
        <input name="year" id="year" type="number"/>
        </br>
        <input type="submit"/>
    </form>
    <div>
        <p><a href="index.php">Go back</a></p>
    </div>
<?php
?>
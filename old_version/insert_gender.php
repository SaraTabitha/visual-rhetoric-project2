<?php
    require_once('database/initialize.php');
    require_once('functions.php');
    require_once('display_table.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name= $_POST["name"];

        $success = insert_gender($name);
    }else{
        $success = false;
    }
    db_disconnect();

    /*
    * insert gender
    */

    gender_table();

    if($success){
        ?>
        <div>
            <p><?php echo $name ?> was added successfully</p>
        </div>
        <?php
    }
?>

    <h1>Add Gender</h1>
    <form action="insert_gender.php" method="POST">
        <label for="name">Name: </label>
        <input name="name" id="name" type="text"/>
        </br>
        <input type="submit"/>
    </form>
    <div>
        <p><a href="index.php">Go back</a></p>
    </div>
<?php
?>
<?php
    require_once('database/initialize.php');
    require_once('functions.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title= $_POST["title"];

        $success = insert_publisher($title);
    }else{
        $success = false;
    }
    db_disconnect();

    /*
    * insert publisher
    */
    if($success){
        ?>
        <div>
            <p><?php echo $title ?> was added successfully</p>
        </div>
        <?php
    }
?>

    <h1>Add Publisher</h1>
    <form action="insert_publisher.php" method="POST">
        <label for="title">Title: </label>
        <input name="title" id="title" type="text"/>
        </br>
        <input type="submit"/>
    </form>
    <div>
        <p><a href="index.php">Go back</a></p>
    </div>
<?php
?>
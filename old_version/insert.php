<?php
    require_once('database/initialize.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST["title"];
        $year = $_POST["year"];
        $publisher = $_POST["publisher"];
        $copiesSold = $_POST["copiesSold"];

        $success = insert_game($title, $year, $publisher, $copiesSold);
    }else{
        $success = false;
    }
    db_disconnect();
    /*
    * FORMS
    */
    //insert Game
    if($success){
        ?>
        <div>
            <p><?php echo $title ?> was added successfully</p>
        </div>
        <?php
    }

    ?>

    <h1>Add Game</h1>
    <form action="insert.php" method="POST">
        <label for="title">Title</label>
        <input name="title" id="title" type="text"/>
        </br>
        <label for="year">Year</label>
        <select name="year">
            <?php getYears(); ?>
        </select>
        </br>
        <label for="publisher">Publisher</label>
        <select name="publisher">
            <?php getPublishers(); ?>
        </select>
        </br>
        <label for="copiesSold">Copes Sold</label>
        <input name="copiesSold" id="copiesSold" type="number" />
        </br>
        <input type="submit" />
    </form>
    <?php
?>

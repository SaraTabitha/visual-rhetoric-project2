<?php
    require_once('database/initialize.php');
    require_once('functions.php');

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
    * FORM
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
        <label for="title">Title: </label>
        <input name="title" id="title" type="text"/>
        </br>
        <label for="year">Year: </label>
        <select name="year">
            <?php getYears(); ?>
        </select>
        </br>
        <label for="genres">Genres: </label>
        </br>
            <?php
            getGenres();
            ?>
        </br>
        <label for="publisher">Publisher: </label>
        <select name="publisher">
            <?php getPublishers(); ?>
        </select>
        </br>
        <label for="copiesSold">Copies Sold: </label>
        <input name="copiesSold" id="copiesSold" type="number" />
        </br>
        <input type="submit" />
    </form>
    <div>
        <p><a href="index.php">Go back</a></p>
    </div>
    <?php
?>

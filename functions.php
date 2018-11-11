<?php
    require_once("database/initialize.php");

    function createOptions($array){
        foreach($array as $item){
            ?>
            <option value=" <?php echo $item ?> "> <?php echo $item ?> </option>
            <?php
        }
    }
    

    function getYears(){
        $years = retrieve_years();
        foreach($years as $item){
            ?>
            <option value=" <?= $item['Year'] ?> "> <?= $item['Year'] ?> </option>
            <?php
        }

    }

    function getPublishers(){
        $publishers = retrieve_publishers();

        foreach($publishers as $item){
            ?>
            <option value=" <?= $item['Title'] ?> "> <?= $item['Title'] ?> </option>
            <?php
        }
    }

    function getGenres(){
        $genres = retrieve_genres();
        createCheckboxes($genres);
    }

    function createCheckboxes($genres){
        foreach($genres as $item){
            ?>
            <input type="checkbox" name="genres" value="<?= $item['Name'] ?>"/> <?= $item['Name'] ?>
            </br>
            <?php
        }
    }
?>

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
        createOptions($years);
    }

    function getPublishers(){
        $publishers = retrieve_publishers();
        createOptions($publishers);
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

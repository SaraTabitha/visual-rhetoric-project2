<?php
require_once("database/initialize.php");
require_once("functions.php");

function game_table(){
    ?>
    <h1>Game Table</h1>
    <table>
        <!-- col headers -->
        <tr>
            <th>Title</th>
            <th>Year</th>
            <th>Publisher</th>
            <th>Copies Sold</th>
        </tr>
        <tr>
        </tr>
    </table>
    <?php
}

function genre_table(){
    ?>
    <h1>Genre Table</h1>
    <table>
        <!-- col headers -->
        <tr>
            <th>Name</th>
        </tr>
        <?php 

        $genres = retrieve_genres();

            foreach($genres as $item){
            ?>
            <tr>
                 <td>
                <?= $item['Name'] ?>
                </td>
            </tr>
            <?php
            }

        ?>
    </table>
    <?php
}

?>

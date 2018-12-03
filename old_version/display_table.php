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

function year_table(){
    ?>
    <h1>Year Table</h1>
    <table>
        <!-- col headers -->
        <tr>
            <th>Year</th>
        </tr>
        <?php 

        $years = retrieve_years();

            foreach($years as $item){
            ?>
            <tr>
                 <td>
                <?= $item['Year'] ?>
                </td>
            </tr>
            <?php
            }

        ?>
    </table>
    <?php
}

function publisher_table(){
    ?>
    <h1>Publisher Table</h1>
    <table>
        <!-- col headers -->
        <tr>
            <th>Publisher</th>
        </tr>
        <?php 

        $publishers = retrieve_publishers();

            foreach($publishers as $item){
            ?>
            <tr>
                 <td>
                <?= $item['Title'] ?>
                </td>
            </tr>
            <?php
            }

        ?>
    </table>
    <?php
}

function gender_table(){
    ?>
    <h1>Gender Table</h1>
    <table>
        <!-- col headers -->
        <tr>
            <th>Gender</th>
        </tr>
        <?php 

        $genders = retrieve_genders();

            foreach($genders as $item){
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

function race_table(){
    ?>
    <h1>Race Table</h1>
    <table>
        <!-- col headers -->
        <tr>
            <th>Race</th>
        </tr>
        <?php 

        $races = retrieve_race();

            foreach($races as $item){
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

function role_table(){
    ?>
    <h1>Role Table</h1>
    <table>
        <!-- col headers -->
        <tr>
            <th>Race</th>
        </tr>
        <?php 

        $role = retrieve_role();

            foreach($role as $item){
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

function occupation_table(){
    ?>
    <h1>Occupation Table</h1>
    <table>
        <!-- col headers -->
        <tr>
            <th>Occupation</th>
        </tr>
        <?php 

        $occupation = retrieve_occupation();

            foreach($occupation as $item){
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

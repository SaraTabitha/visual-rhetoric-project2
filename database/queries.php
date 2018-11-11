<?php

    function retrieve_years(){
        GLOBAL $db;

        try{
            $sql = "SELECT * FROM Year";
            $statement = $db->prepare($sql);
            $statement->execute();

            return $statement->fetchAll();

        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
            db_disconnect();
        }

    }

    function retrieve_publishers(){
        GLOBAL $db;

        try{
            $sql = "SELECT * FROM Publisher";
            $statement = $db->prepare($sql);
            $statement->execute();

            return $statement->fetchAll();

        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
        }
          
    }
    function retrieve_genres(){
        GLOBAL $db;

        try{
            $sql = "SELECT * FROM Genre";
            $statement = $db->prepare($sql);
            $statement->execute();

            return $statement->fetchAll();

        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
        }
    }

    function retrieve_yearId($year){
        GLOBAL $db;

        try{
            $sql = "SELECT DISTINCT 'YearId' FROM 'Year' WHERE 'Year' LIKE $year";
            $statement = $db->prepare($sql);
            $statement->execute();

            return $statement->fetchAll();

        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
        }
    }

    function retrieve_publisherId($publisher){
        GLOBAL $db;

        try{
            $sql = "SELECT DISTINCT PublisherId FROM Publisher WHERE Title LIKE $publisher";
            $statement = $db->prepare($sql);
            $statement->execute();

            return $statement->fetchAll();

        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
        }

    }

    function insert_genre($name){
        GLOBAL $db;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try{
            $sql = "INSERT INTO Genre (Name) VALUES (?)";
            $statement = $db->prepare($sql);
            $params = [$name];
            $statement->execute($params);

            return true;
        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
            db_disconnect();
        }
    }

    function insert_year($year){
        GLOBAL $db;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try{
            $sql = "INSERT INTO Year (Year) VALUES (?)";
            $statement = $db->prepare($sql);
            $params = [$year];
            $statement->execute($params);

            return true;
        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
            db_disconnect();
        }

    }

    function insert_publisher($title){
        GLOBAL $db;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try{
            $sql = "INSERT INTO Publisher (Title) VALUES (?)";
            $statement = $db->prepare($sql);
            $params = [$title];
            $statement->execute($params);

            return true;
        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
            db_disconnect();
        }
    }

    function insert_gender($name){
        GLOBAL $db;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try{
            $sql = "INSERT INTO Gender (Name) VALUES (?)";
            $statement = $db->prepare($sql);
            $params = [$name];
            $statement->execute($params);

            return true;
        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
            db_disconnect();
        }
    }

    function insert_race($name){
        GLOBAL $db;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try{
            $sql = "INSERT INTO Race (Name) VALUES (?)";
            $statement = $db->prepare($sql);
            $params = [$name];
            $statement->execute($params);

            return true;
        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
            db_disconnect();
        }
    }

    function insert_role($name){
        GLOBAL $db;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try{
            $sql = "INSERT INTO Role (Name) VALUES (?)";
            $statement = $db->prepare($sql);
            $params = [$name];
            $statement->execute($params);

            return true;
        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
            db_disconnect();
        }
    }

    function insert_occupation($name){
        GLOBAL $db;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try{
            $sql = "INSERT INTO Occupation (Name) VALUES (?)";
            $statement = $db->prepare($sql);
            $params = [$name];
            $statement->execute($params);

            return true;
        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
            db_disconnect();
        }
    }

    function insert_game($title, $year, $publisher, $copiesSold){
        GLOBAL $db;
        //throw PDOException if SQL error occurs
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try{
            $yearId = retrieve_yearId($year);
            $publisherId = retriever_publisherId($publisher);

            $sql = "INSERT INTO Game (Title, YearId, PublisherId, CopiesSold) VALUES (?, ?, ?, ?)";
            $statement = $db->prepare($sql);
            $params = [$title, $yearId(0), $publisherId(0), $copiesSold];
            $statement->execute($params);

            return true;

        }catch(PDOException $e){
            echo "Failed: " . $e->getMessage();
            db_disconnect();
        }

    }
?>
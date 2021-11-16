<?php

/**
 * Database class
 *
 * @package    Core
 * @author     Hkr hasan
 *
 **/

class Database
{

    // for connection to database
    private function connect()
    {
        $string = DBDRIVER . ":host=" . DBHOST . ";dbname=" . DBNAME;
        if (!$conn = new PDO($string, DBUSER, DBPASS)) {
            die('Database Connection failed');
        }

        return $conn;
    }

    // for run query in database
    public function query($query, $data = array(), $data_type = "object")
    {
        $conn = $this->connect();
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $check = $stmt->execute($data);
            if ($check) {
                if ($data_type == "object") {
                    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
            }

            if (is_array($result) && Count($result)) {
                return $result;
            }
        }

        return false;
    }
}

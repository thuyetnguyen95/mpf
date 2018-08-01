<?php

/**
 * Database class
 */
class DB
{
    private $hostname = 'localhost',
            $username = 'root',
            $password = '',
            $database = 'mpf';

    public $conn = NULL;

    /**
     * connect to database
     *
     * @return void
     */
    public function connect()
    {
        $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        mysqli_set_charset($this->conn, "UTF8");
    }

    /**
     * disconnect to database
     *
     * @return void
     */
    public function disconnect()
    {
        if ($this->conn) {
            mysqli_close($this->conn);
        }
    }

    /**
     * Query data from database
     *
     * @param [string|null] $sql
     * @return void
     */
    public function query($sql = null)
    {
        if (!$this->conn) {
            exit('Oops! You are not connect with database!');
        }

        mysqli_query($this->conn, $sql);
        
        return true;
    }

    /**
     * Get total record in query
     *
     * @param [string] $sql
     * 
     * @return void
     */
    public function getTotalRecord($sql = null)
    {
        if (!$this->conn) {
            exit('Oops! You are not connect with database!');
        }

        $query = mysqli_query($this->conn, $sql);
        if ($query) {
            $row = mysqli_fetch_assoc($query);

            return $row;
        }   
    }

    /**
     * Get all record
     *
     * @param [string] $sql
     * @param integer $type
     * @return void
     */
    public function fetchAll($sql = null, $type = 0)
    {
        if (!$this->conn) {
            exit('Oops! You are not connect with database!');
        }

        $data = array();
        $query = mysqli_query($this->conn, $sql);
            if (!$query) {
                exit('Oops! something went wrong' .'<br/>' .'Please check your query: ' .$sql);
            }

            if ($type == 0) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $data[] = $row;
                }

                return $data;
            }
            
            if ($type == 1) {
                return mysqli_fetch_assoc($query);
            }
    }

    /**
     * Get next id to insert
     *
     * @return void
     */
    public function nextIdInsert()
    {
        if (!$this->conn) {
            exit('Oops! You are not connect with database!');
        }

        $count = mysqli_insert_id($this->conn);
        if ($count == 0) {
            return 1;
        }

        return $count;
    }
}
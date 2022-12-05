<?php
class DatabaseConn{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "oop_db";
    private $table = "employinfo";
    private $conn = "";

   public function __construct(){
        $this->conn = new mysqli($this->host, $this->user, $this->password,$this->db); // db credential
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }else{
           // echo "connected successfully";
        }
    }
    public function dbQuery(){
        $sql = "SELECT * FROM $this->table"; // RAW Query
        $result = $this->conn->query($sql); //passing the query to MYSql Server
        $rows   = $result->fetch_all(MYSQLI_ASSOC); // formetting the returned query
        return $rows; // returning the formatted result
    }
    public function insertData($data){

        // preparing table coulms from the array
        $columns = implode(", ",array_keys($data));

        // remove special characters from the value
        $escaped_values = array_map(array($this->conn, 'real_escape_string'), array_values($data));

        // preparing values from the array
        $values  = implode("', '", $escaped_values);

        // prepraing sql query
        $sql = "INSERT INTO $this->table ($columns) VALUES ('$values')";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<<br>>" . $this->conn->error;
        }

    }
}


$data = [
    "first_name" => "Nadim",
    "last_name"=>"Haque",
    "email"=>"mail@mail.com",
    "mobile"=>"01731001333",
    "address"=>"Azadi-04, Mirboxtula, Sylhet",
    "gender"=>"Male",
    "bgroup"=>"O+",
    "height"=>"5",
    "designation"=>"Fluent Wizz",
    "team"=>"Support",
];
$dbConncetion = new DatabaseConn();
$dbConncetion->dbQuery();
$dbConncetion->insertData($data);



<?php
class sit{
    public $sitnr;
    public $name;
    public $rows;
    public $nummbers;
    public $occupied;

    function __construct($name,$rows,$nummbers)
    {
        $this->name = $name;
        $this->rows = $rows;
        $this->nummbers = $nummbers;
        $this->sitnr= $this->getChair_id();
        $this->occupied = $this->IsitOccupied();
    }
    function reservation()
    {
        $this->makeconn();
        $conn= $this->makeconn();
        $sql = "UPDATE sitz SET fname ='$this->name', reservirt= 1 WHERE id_Sitz ='$this->sitnr'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
    public function getChair_id(){
        $idoffrow = $this->rows * 15;
        $idoffrow = $idoffrow + $this->nummbers;
        $idoffrow = $idoffrow - 15;
        return $idoffrow;
}
    public function makeconn(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cinema";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
    public function IsitOccupied(){
        $sql= "SELECT reservirt FROM sitz WHERE id_sitz = '$this->sitnr'";
        $conn = $this->makeconn();
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if($row['reservirt']!= 1){
            $this->reservation();
            return  TRUE;
        }else{
            return false;
        }
        $conn->close();

    }
    public function color(){
        if($this->occupied== FALSE){
            $red= "{background-color: red;}";
            echo "$red";
        }
    }
    public function  position(){
        $position="#td$this->rows-$this->nummbers";
        echo "$position";
    }
    public function Markposition(){
        $conn = $this->makeconn();
        $sql= "SELECT Sitz_row, sitz_nummber FROM sitz WHERE reservirt = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $position="#td".$row['Sitz_row']."-".$row['sitz_nummber']."{background-color: red;}";
                echo "$position";
            }
        }
    }
}
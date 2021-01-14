<!-- PHP DataBase Contact Us -->
<?php

class form{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "pendaftaran_siswa";
    public $mysqli;

public function __construct(){
    return $this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db);
    }

    public function contact($data){
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        $q = "insert into contact set name = '$name', email = '$email', message = '$message'";
        return $this->mysqli->query($q);
    }
}

?>

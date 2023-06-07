<?php 

class db{

    private $user = 'campus';
    private $pass = 'campus2023';

    public function connect() {

        try {
            $conn = new PDO('mysql:host=localhost;dbname=shop', $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            $message = $e->getMessage();
            echo $message;
            echo 'D: OCURRIO UN ERROR'; 
        }
        $conn = null;
}
}



?>
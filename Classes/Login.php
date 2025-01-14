<?php
    session_start();

    class Login extends Database{
        private $username;
        private $password;
        
        public function __construct($username, $password){
            $this->username = $username;
            $this->password = $password;
        }

        public function authenticate(){
            $query = "SELECT * FROM `end_user_accounts` WHERE `username` = :username";
            $query = parent::connect()->prepare($query);
            $query->bindParam(':username', $this->username);
            $query->execute();
            $result = $query->fetch();

            if($query->rowCount() > 0){
                if(password_verify($this->password, $result['password'])){
                    echo "<script>alert('Login Successful!')</script>";
                    $_SESSION['status'] = 'valid';
                    $_SESSION['username'] = $result['username'];
                }else{
                    echo "<script>
                    alert('Invalid Password!');
                    window.location.href='../index.php';
                    </script>";
                    exit();
                }
            }else{
                echo "<script>
                alert('Invalid Credentials!');
                window.location.href='../index.php';
                </script>";
                exit();
            }
        }
    }
?>
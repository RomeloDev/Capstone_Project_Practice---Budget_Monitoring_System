<?php
    class Register extends Database{
        private $username;
        private $email;
        private $department;
        private $password;

        public function __construct($username, $email, $department, $password){
            $this->username = $username;
            $this->email = $email;
            $this->department = $department;
            $this->password = $password;
        }

        public function validate(){
            $check_dept = "SELECT * FROM `end_user_accounts` WHERE `department` = :department";
            $stmt = parent::connect()->prepare($check_dept);
            $stmt->bindParam(':department', $this->department);
            $stmt->execute();
            $result = $stmt->fetch();
            if($result){
                echo "<script>alert('Account on this Department is already created!')</script>";
                exit();
            }else{$this->register();}
        }

        private function register(){
            $hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
            $query = "INSERT INTO `end_user_accounts`(`department`, `username`, `email`, `password`) VALUES(:department, :username, :email, :password)";
            $stmt = parent::connect()->prepare($query);
            $stmt->bindParam(':department', $this->department);
            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                echo "<script>alert('Account Created Successfully!')</script>";
            }else{
                echo "<script>alert('Failed to create account!')</script>";
                exit();
            }
        }
    }
?>
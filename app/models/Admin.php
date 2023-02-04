<?php

    class Admin 
    {
        private $email;
        private $fullName;
        private $isSuperAdmin;
        private $photo;
        private $password;

        private $createdAt;
        private $updatedAt;

            
        public function getEmail()
        {
            return $this->email;
        }
    
        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getFullName()
        {
            return $this->fullName;
        } 

        public function setFullName($fullName)
        {
            $this->fullName = $fullName;
        }

        public function getIsSuperAdmin()
        {
            return $this->isSuperAdmin;
        } 
            
        public function setIssuperadmin($isSuperAdmin)
        {
            $this->isSuperAdmin = $isSuperAdmin;
        }

        public function getPhoto()
        {
            return $this->photo;
        } 
    
        public function setPhoto($photo)
        {
            $this->photo = $photo;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }
        
        public function add()
        {
            try
            {
                global $connection ;
                $data =
                [
                    'email' => $this->email,
                    'fullName' => $this->fullName,
                    'isSuperAdmin' => $this->isSuperAdmin,
                    'photo' => $this->photo,
                    'password' => $this->password
                ];
                $sql = "INSERT INTO admins (email,full_name,is_super_admin,photo,created_at,updated_at,password)
                VALUES (:email,:fullName,:isSuperAdmin,:photo,current_timestamp(),current_timestamp(),:password)";
                $stm =$connection->con->prepare($sql);
                return $stm->execute($data);
                
            }
            catch(Exception $e)
            {
                return "Exception error : ".$e->getMessage();
            }
        }
    
        public function update($id)
        {
            try
            {
                global $connection;
                $data =
                [
                    'id' => $id,
                    'email' => $this->email,
                    'fullName' => $this->fullName,
                    'isSuperAdmin' => $this->isSuperAdmin,
                ];
                $sql = "UPDATE Admin SET 
                            email=:email,
                            fullName=:fullName,
                            isSuperAdmin=:isSuperAdmin,
                            updatedAt=current_timestamp()
                        WHERE id=:id";
                $stmt= $connection->con->prepare($sql);
                return $stmt->execute($data);
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return 0;
            }
        }

        public function delete($id)
        {
            try
            {
                global $connection ;
                $data = ["id" => $id];
                $sql = "DELETE FROM admins where id = :id";
                $stmt= $connection->con->prepare($sql);
                return $stmt->execute($data);
            }
            catch(Exception $e)
            {
                echo "Error ".$e;
                return 0;
            }
            
        }
        public function all()
        {
            try
            {
                global $connection;
                $T = array();
                $res = $connection->con->query("SELECT * from admins");
                return $res;
            }
            catch(Exception $e)
            {
                return "Exception error : ".$e->getMessage();
            }
        }
    
        public function findById($id)
        {
            try
            {

                global $connection;
                $T = array();
                $res = $connection->con->query("SELECT * from admins where id = ".$id);
                
                return $res;
            }
            catch(Exception $e)
            {
                return "Exception error : ".$e->getMessage();
            }
        }
        public function auth($email,$password)
        {
            try
            {
                global $connection;
                $T = array();
                $res = $connection->con->query("SELECT * from admins where email = '$email' AND password = '$password' ");
                $res = $res->fetch(PDO::FETCH_ASSOC);
                if(isset($res['email']) AND ($res['email'] === $email))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            catch(Exception $e)
            {
                return "Exception error : ".$e->getMessage();
            }
            
            
            
        }

    }
?>
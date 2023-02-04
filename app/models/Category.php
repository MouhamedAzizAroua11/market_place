<?php

    class Category
    {
        private $title;
        private $description;
        private $createdAt;
        private $updatedAt;

        //title
        public function getTitle()
        {
            return $this->title;
        }

        public function setTitle($title)
        {
            $this->title = $title;
        }

        //description
        public function getDescription()
        {
            return $this->description;
        }

        public function setDescription($description)
        {
            $this->description = $description;
        }

        public function add()
        {
            try
            {
                global $connection ;
                $data =
                [
                    'title' => $this->title,
                    'description' => $this->description,
                ];
                $sql = "INSERT INTO categories (title,description,created_at,updated_at) VALUES (:title,:description,current_timestamp(),current_timestamp())";
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
                    'title' => $this->title,
                    'description' => $this->description,            
                ];
                $sql = "UPDATE categories SET 
                            title=:title,
                            description=:description,
                            updated_at= current_timestamp()         
                        WHERE id=".$id;

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
                $sql = "DELETE FROM categories where id = :id";
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
                $res = $connection->con->query("SELECT * from categories");
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
                $res = $connection->con->query("SELECT * from categories WHERE id = ".$id);
                return $res;
            }
            catch(Exception $e)
            {
                return "Exception error : ".$e->getMessage();
            }
        }
    }
?>
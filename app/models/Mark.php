<?php

    class Mark
    {
        private $title;
        private $description;
        private $image;
        private $createdAt;
        private $updatedAt;

            
        public function getTitle()
        {
            return $this->title;
        }
    
        public function setTitle($title)
        {
            $this->title = $title;
        }

        public function getDescription()
        {
            return $this->description;
        } 

        public function setDescription($description)
        {
            $this->description = $description;
        }

        public function getImage()
        {
            return $this->image;
        } 
            
        public function setImage($image)
        {
            $this->image = $image;
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
                    'image' => $this->image
                ];
                $sql = "INSERT INTO marks (title,description,image,created_at,updated_at)
                VALUES (:title,:description,:image,current_timestamp(),current_timestamp())";
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
                    'title' => $this->title,
                    'description' => $this->description,
            
                ];
                $sql = "UPDATE Marks SET 
                            id=:id,
                            title=:title,
                            description=:description,
                            updated_at=current_timestamp()
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
                $sql = "DELETE FROM marks where id = :id";
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
                $res = $connection->con->query("SELECT * from marks");
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
                $res = $connection->con->query("SELECT * from marks WHERE id = ".$id);
                return $res;
            }
            catch(Exception $e)
            {
                return "Exception error : ".$e->getMessage();
            }
        }
    }
?>
<?php

    class Product
    {
        private $title;
        private $description;
        private $image;
        private $mark_id ;
        private $category_id ;
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
        
        public function setMark_id($mark_id)
        {
            $this->mark_id = $mark_id;
        }

        public function getMark_id()
        {
            return $this->mark_id;
        }

        public function setCategory_id($category_id)
        {
            $this->category_id = $category_id;
        }
        
        public function getCategory_id()
        {
            return $this->category_id ;
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
                    'image' => $this->image,
                    'mark_id' => $this->mark_id,
                    'category_id' => $this->category_id
                ];
                $sql = "INSERT INTO products (title,description,image,mark_id,category_id,created_at,updated_at)
                VALUES (:title,:description,:image,:mark_id,:category_id,current_timestamp(),current_timestamp())";
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
                    'mark_id' => $this->mark_id,
                    'category_id' =>$this->category_id,
                ];

                $sql = "UPDATE products SET 
                            title=:title,
                            description=:description,
                            mark_id =:mark_id,
                            category_id =:category_id,
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
                $sql = "DELETE FROM products where id = :id";
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
                $res = $connection->con->query("SELECT * from products");
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
                $res = $connection->con->query("SELECT * from products WHERE id = ".$id);
                return $res;
            }
            catch(Exception $e)
            {
                return "Exception error : ".$e->getMessage();
            }
        }
    }
?>
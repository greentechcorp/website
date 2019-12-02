<?php
include "DbConnection.php";
 
class Post
{
 
    protected $db = null;
 
    public function __construct()
    {
 
        $this->db = new DbConnection();
 
    }
    public function insertpost($Title, $Content, $Owner)
    {
 
       $connection     = $this->db->OpenConnection();
        $title   =$connection->real_escape_string($Title); 
        //Create a legal SQL string that you can use in an SQL statement. 
        //The given string is encoded to an escaped SQL string, taking into account the current character set of the connection.
        $content =$connection->real_escape_string($Content);
        $ownerID     =$connection->real_escape_string($Owner);
        $query   =$connection->prepare("INSERT INTO blog_posts(postTitle, postContent, postOwnerID) VALUES(?, ?, ?)");
        $query->bind_param("sss", $title, $content, $ownerID);
        $result = $query->execute();
        if (!$result) {
 
            $error =$connection->error;
 
            $this->db->CloseConnection();
            return $error;
        }
        $result = true;
        return $result;
    }
 
    public function getpost($id)
    {
       $connection = $this->db->OpenConnection();
 
        $stmt = "SELECT postTitle,postContent,postOwnerID,postDate,edited from blog_posts WHERE postID = '$id'";
 
        $result =$connection->query($stmt);
 
        if ($result->num_rows == 1) {
            $sql = $result;
        } else {
            $sql = "No post";
        }
 
        $this->db->CloseConnection();
 
        return $sql;
 
    }
    public function hidepost($id){
       $connection    = $this->db->OpenConnection();
        $sql = "UPDATE blog_posts SET public = 0 WHERE postID = $id";
        $result =$connection->query($sql);
        if (!$result) {
 
            $error =$connection->error;
 
            $this->db->CloseConnection();
            return $error;
        }
        $result = true;
        return $result;
    }
    public function deletepost($id)
    {
 
       $connection    = $this->db->OpenConnection();
        $sql    = "DELETE FROM blog_posts WHERE postID = '$id'";
        $result =$connection->query($sql);
 
        if (!$result) {
 
            $error =$connection->error;
 
            $this->db->CloseConnection();
            return $error;
        }
        $result = true;
        return $result;
    }
 
    public function updatepost($id, $Content, $Title)
    {
 
        $connection     = $this->db->OpenConnection();
        $title   =$connection->real_escape_string($Title);
        $content =$connection->real_escape_string($Content);
        $ownerID     =$connection->real_escape_string($Owner);
        $query   =$connection->prepare("UPDATE blog_posts SET postTitle = ? , postContent = ?, edited = 1 WHERE postID = ?");
        $query->bind_param("ssi", $title, $content, $id);
        $result = $query->execute();
        if (!$result) {
            $error =$connection->error;
 
            $this->db->CloseConnection();
            return $error;
        }
        $result = true;
        return $result;
 
    }
}
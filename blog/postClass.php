<?php
include "DbConnection.php";
 
class Post
{
 
    protected $db = null;
 
    public function __construct()
    {
 
        $this->db = new DbConnection();
 
    }
    public function insertpost($b_tittle, $b_content, $b_Owner)
    {
 
        $con     = $this->db->OpenCon();
        $title   = $con->real_escape_string($b_tittle);
        $content = $con->real_escape_string($b_content);
        $ownerID     = $con->real_escape_string($b_Owner);
        $query   = $con->prepare("INSERT INTO blog_posts(postTitle, postContent, postOwnerID) VALUES(?, ?, ?)");
        $query->bind_param("sss", $title, $content, $ownerID);
        $result = $query->execute();
        if (!$result) {
 
            $error = $con->error;
 
            $this->db->CloseCon();
            return $error;
        }
        $result = true;
        return $result;
    }
 
    public function getpost($postid)
    {
        $con = $this->db->OpenCon();
 
        $stmt = "SELECT postTitle,postContent,postOwnerID,postDate,edited from blog_posts WHERE postID = '$postid'";
 
        $result = $con->query($stmt);
 
        if ($result->num_rows == 1) {
            $sql = $result;
        } else {
            $sql = "No post";
        }
 
        $this->db->CloseCon();
 
        return $sql;
 
    }
    public function hidepost($id){
        $con    = $this->db->OpenCon();
        $sql = "UPDATE blog_posts SET public = 0 WHERE postID = $id";
        $result = $con->query($sql);
        if (!$result) {
 
            $error = $con->error;
 
            $this->db->CloseCon();
            return $error;
        }
        $result = true;
        return $result;
    }
    public function deletepost($id)
    {
 
        $con    = $this->db->OpenCon();
        $sql    = "DELETE FROM blog_posts WHERE postID = '$id'";
        $result = $con->query($sql);
 
        if (!$result) {
 
            $error = $con->error;
 
            $this->db->CloseCon();
            return $error;
        }
        $result = true;
        return $result;
    }
 
    public function updatepost($a_id, $b_content, $b_tittle)
    {
 
        $con     = $this->db->OpenCon();
        $title   = $con->real_escape_string($b_tittle);
        $content = $con->real_escape_string($b_content);
        $ownerID     = $con->real_escape_string($b_Owner);
        $query   = $con->prepare("UPDATE blog_posts SET postTitle = ? , postContent = ?, edited = 1 WHERE postID = ?");
        $query->bind_param("ssi", $title, $content, $a_id);
        $result = $query->execute();
        if (!$result) {
            $error = $con->error;
 
            $this->db->CloseCon();
            return $error;
        }
        $result = true;
        return $result;
 
    }
}
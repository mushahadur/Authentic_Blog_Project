<?php
namespace App\classes;

class CommentController
{

    public $postId;
    public $comment;
    public $link;
    public $sql;
   

    public function __construct($data)
    {
        if($data)
        {
            $this->postId = $data['postId'];
            $this->comment = $data['comment'];
        }
        
    }

  
    public function saveComment()
    {
                
        $this->link = mysqli_connect('localhost','root','', 'my_blog');
        if($this->link){ 
            $this->sql  = "INSERT INTO guest_users(`post_id`, `comment`) VALUES('$this->postId','$this->comment')";
            if(mysqli_query($this->link, $this->sql)){
                return 'Your Comment Done !';
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }

   
 

}
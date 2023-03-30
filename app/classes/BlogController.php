<?php
namespace App\classes;

class BlogController
{

    public $title;
    public $blog;
    public $link;
    public $sql;
    public $queryResult;
    public $data = [];
    public $i;
    public $row;

    public function __construct($data = null)
    {
        
        if($data)
        {
          
            $this->title = $data['title'];
            $this->blog = $data['blog'];
            
        
        }
    }
    
    public function save()
    {
                // $mysqli =  mysqli_connect("localhost","root","","my_blog");

                // // Check connection
                // if ($mysqli->connect_errno) {
                //     echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                //     exit();
                // }
                // else{
                //     echo "DB Connection Success !";
                // }
                // $result = $mysqli->query("INSERT INTO blogposttable( `title`,`blog`) VALUES('$this->title','$this->blog')");

                //     if($result){
                //         echo "Success !";
                //     }
                //     else{
                //         echo "Not Success !";
                //     }
                // $mysqli->close();



        
        
        $this->link = mysqli_connect('localhost','root','', 'my_blog');
        if($this->link){ 
            $blog = mysqli_real_escape_string($this->link,$this->blog );
            $this->sql  = "INSERT INTO blogposttable(`title`,`blog`) VALUES('$this->title',' $blog')";
            if(mysqli_query($this->link, $this->sql)){
                return ' create blog successfully';
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }




    public function getAllBlog(){
        $this->link = mysqli_connect('localhost','root','', 'my_blog');
        if($this->link){
            $this->sql = "SELECT 
            blogposttable.id AS post_id, 
            blogposttable.title AS post_title, 
            blogposttable.`blog` AS post_blog, 
            guest_users.id AS comment_id, 
             GROUP_CONCAT(guest_users.comment) AS comment_content
        FROM 
            blogposttable 
            LEFT JOIN guest_users ON blogposttable.id = guest_users.post_id
        GROUP BY blogposttable.id, blogposttable.title";


            
            if(mysqli_query($this->link, $this->sql)){
                $this->queryResult = mysqli_query($this->link, $this->sql);
                $this->i =0;


// echo '<pre>';
// print_r($this->queryResult);
// echo '</pre>';

                while($this->row = mysqli_fetch_assoc($this->queryResult)){
                   $this->data[$this->i]['id'] = $this->row['post_id'];
                   $this->data[$this->i]['title'] = $this->row['post_title'];
                   $this->data[$this->i]['blog'] = $this->row['post_blog'];
                   $this->data[$this->i]['comment'] = $this->row['comment_content'];
                   $this->i++;
                } 
               return $this->data;
            }
            else{
                die('Query Problem...'.mysqli_error($this->link));
            }
        }
    }
   
 

}
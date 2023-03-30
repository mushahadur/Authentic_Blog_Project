<?php
require_once'../vendor/autoload.php';

use App\classes\SignUp;
use App\classes\Auth;
use App\classes\BlogController;
use App\classes\CommentController;


if(isset($_POST['postBtn'])){
    
    $blog = new BlogController($_POST);
    $message = $blog->save();

    include 'home.php';
}

else if(isset($_POST['signBtn'])){
    $signUp    = new SignUp($_POST);
    $message = $signUp->signup();
    include 'register.php';
}

else if(isset($_POST['loginBtn'])){
    $auth    = new Auth($_POST);
    $message = $auth->login();
    

}



else if(isset($_GET['status'])){
   
   if($_GET['status'] == 'index'){
        $allBlogs = new BlogController();
        $blogs = $allBlogs->getAllBlog();
        include 'index.php';
    }


    else if($_GET['status'] == 'logout'){
        $auth    = new Auth($_POST);
        $auth->logout();
    }
   
}

else if(isset($_POST['commentBtn'])){
    
    $commentSave = new CommentController($_POST);
    $message = $commentSave->saveComment();
    
    $allBlogs = new BlogController();
    $blogs = $allBlogs->getAllBlog();
    include 'index.php';


    
}
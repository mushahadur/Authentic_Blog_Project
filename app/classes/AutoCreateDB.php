<?php 
/**DB Create start */

    $host="localhost";
    $dbuser="root";
    $password="";
    $dbname = "my_blog";

    $sql="CREATE DATABASE IF NOT EXISTS $dbname";

    $connect=mysqli_connect($host,$dbuser,$password);

    $myDbCreate=mysqli_query($connect,$sql);

    if($myDbCreate==TRUE){
        $myConnection=mysqli_connect($host,$dbuser,$password, $dbname);
    }
    else{
        echo "Your Database Not Created";
    }

    /**DB Create end */


    /**DB Blog Post Create start */

$tblsql_userinfo="CREATE TABLE IF NOT EXISTS blogPostTable(
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 user_id INT(6) ,
title VARCHAR(250) NOT NULL,
blog text  NOT NULL,
FOREIGN KEY (user_id) REFERENCES users(id)
)";
$tbl_userinfo = mysqli_query($myConnection,$tblsql_userinfo);
if($tbl_userinfo==TRUE)
{ echo "table created <br>";}
else {
    die('Query Problem..'.mysqli_error($tbl_userinfo));
}

    /**DB Blog Post Create end */



    /**DB guest_usersTable Create start */
  $tblsql_guest_user="CREATE TABLE IF NOT EXISTS guest_users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    post_id INT(6) ,
    comment text  NOT NULL,
    FOREIGN KEY (post_id) REFERENCES blogPostTable(id)
    )";

    $tbl_guestUserinfo = mysqli_query($myConnection,$tblsql_guest_user);
    if($tbl_guestUserinfo==TRUE)
    { echo "table created <br>";}
    else {
        die('Query Problem..'.mysqli_error($tbl_guestUserinfo));
    }
        /**DB guest_usersTable Create End */

    /**DB loginTable Create start */

    $tblsql_login="CREATE TABLE IF NOT EXISTS users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
    )";
   
   $tbl_login = mysqli_query($myConnection,$tblsql_login);
   if($tbl_login==TRUE)
   { echo "table created <br>";}
   else {
       die('Query Problem..'.mysqli_error($tbl_userinfo));
   }
   
       /**DB loginTable Create end */


?>
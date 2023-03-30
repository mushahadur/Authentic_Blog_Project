<?php include 'include/header.php';?>

<?php
    if(!isset($_SESSION['id'])){
        header("Location:login.php");
    }
    
?>



<section class="py-5" style="">
    <div class="container" style="">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Add Post Form</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success">
                            <?php echo isset($message) ?$message  : ''; ?>
                        </h4>
                            <form action="action.php" method="POST" >

                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Post Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row pt-3">
                                    <label class="col-md-4">Blog Post </label>
                                    <div class="col-md-8">
                                        <textarea rows="5" cols="60" name="blog"></textarea>
                                    </div>
                                </div>
                            
                                <div class="form-group row pt-3">
                                    <label class="col-form-label col-md-4"> </label>
                                    <div class="col-md-3">
                                        <input type="submit" name="postBtn" class="btn btn-outline-info btn-dark" value="Save New Blog"/>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
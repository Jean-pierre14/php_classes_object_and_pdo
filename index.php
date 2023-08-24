<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="https://avatars.githubusercontent.com/u/58594917?v=4" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container py-5">
        <div class="row">

            <div class="col-md-4">
                <?php
                    $errors = [];
                    require_once "./config/db.connection.php";

                    if(isset($_POST['submit'])){
                        
                        $name = $_POST['name'];
                        $tags = $_POST['tags'];

                        if(empty($_POST['name'])){array_push($errors, "Name is empty");}
                        if(empty($_POST['tags'])){array_push($errors, "Tags is empty");}

                        if(count($errors) == 0){
                            $sql - mysqli_query($con, "INSERT INTO nav(`name`, tags) VALUES('$name', '$tags')");
                            if($sql){
                                header("Location: index.php");
                            }
                        }else{
                            foreach($errors as $error){
                                echo '<p class="alert alert-danger">'.$error.'</p>';
                            }
                        }
                    }
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" require id="name" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <input type="text" name="tags" require id="tags"
                            placeholder="Tags: Orthographe, Vocabulaire, Grammaire" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <h3>Data</h3>
                <?php

                    $sql = mysqli_query($con, "SELECT * FROM nav");
                    $output = '';
                    
                    if($sql){
                        if(mysqli_num_rows($sql) > 0){
                            $output .= '<ul>';
                            while($row = mysqli_fetch_assoc($sql)){
                                $tagsList = explode(',', $row['tags']);
                                $output .= '
                                
                                    <h3>'.$row['name'].'</h3>
                                ';
                                foreach($tagsList as $tag){
                                    $output .= '<li>'.$tag.'</li>';
                                }
                            }
                            $output .= '</ul>';
                        }else{$output = '<p class="alert alert-warning">No Data found</p>';}
                    }else{
                        $output = '<p class="alert alert-danger">SQL error</p>';
                    }
                    print $output;
                ?>
            </div>
        </div>
    </div>
</body>

</html>
<?php

    $title = "";
    $content = "";
    $id = 0;
    $msg = "";  

    $con = mysqli_connect('localhost', 'root', '', 'cmt322');

    if(isset($_POST['save'])){
        $target = "images/" . basename($_FILES['image']['name']);

        $image = $_FILES['image']['name'];
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $content = mysqli_real_escape_string($con, $_POST['content']);

        $sql ="INSERT INTO news (image, title, content) VALUES ('$image', '$title' ,'$content')";
        mysqli_query($con, $sql);

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg = "Image uploaded successfully";
        }
        else{
            $msg = "Image upload failed";
        }
    }

    if(isset($_POST['update'])){
        $old_image = $_POST['old_image'];

        if(isset($_FILES['image']['name']) && ($_FILES['image']['name'] != "")){
            $target = "images/" . basename($_FILES['image']['name']);
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
            unlink("images/".$old_image);
        }
        else{
            $image = $old_image;
        }
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $content = mysqli_real_escape_string($con, $_POST['content']);
        $id = mysqli_real_escape_string($con, $_POST['id']);

        mysqli_query($con, "UPDATE news SET image='$image', title='$title', content='$content' WHERE id='$id'");
        header('location: adminnews.php');

    }

    if(isset($_GET['edit'])) {
        $id = $_GET['edit'];

        $rec = mysqli_query($con, "SELECT * FROM news WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        $title = $record['title'];
        $content = $record['content'];
        $id = $record['id'];
    }

    if(isset($_GET['del'])){
        $id = $_GET['del'];
        mysqli_query($con, "DELETE FROM news WHERE id=$id");
        $msg = "News deleted";
        header('location: adminnews.php');
    }

    $result = mysqli_query($con, "SELECT * FROM news");




?>
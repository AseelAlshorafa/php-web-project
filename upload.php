<?php
include 'header.php'
?>
<?php
if (isset($_POST['addadv'])) {
    $description = htmlspecialchars($_POST['description']);
    $title = htmlspecialchars($_POST['title']);
    $file = $_FILES['file'];
    $filename = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $filetmpname = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $fileerror = $_FILES['file']['error'];
    $fileext = explode('.', $filename);
    $fileactualext = strtolower(end($fileext));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'word');
    if (in_array($fileactualext, $allowed)) {
        if ($fileerror === 0) {
            $filenewname = uniqid('', true) . '.' . $fileactualext;
            $filedestination = 'uploads/' . $filenewname;
            move_uploaded_file($filetmpname, $filedestination);
            echo 'success';
        } else echo 'error in uploading file';
    } else echo 'this type of file is not allowed';
    $sql = "insert into adv(title,description,file) values('$title','$description','$filenewname');";
    if (!mysqli_query($conn, $sql)) {
        echo 'adv can not be added';
    }
}



?>
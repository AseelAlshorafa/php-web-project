<?php
include 'header.php'
?>
<?php
if (isset($_POST['register'])) {
    $name = htmlspecialchars($_POST['name']);
    $degree = htmlspecialchars($_POST['degree']);
    $dpartment = htmlspecialchars($_POST['department']);
    $sql = "insert into lecturel (name,department,role) values('$name','$dpartment','$degree');";
    if (!mysqli_query($conn, $sql)) {
        echo 'lecturel can not be added successfully';
    }
}


?>
<?php
include 'adminnavbar.php'
?>
<div class="main-content">
    <h1 class="highlight" lan="ar" dir="rtl" style="text-align:center; margin-bottom:20px;">أضف مشرفا </h1>
    <div class="form">
        <form method="post" action="" class="login-form">
            <div>
                <pre>
<input type="text" name="name" placeholder="الاسم" dir="rtl" lang="ar" required style="width:calc(100% - 60px);margin-right:60px;"/><select name='degree' style="width: auto;
  padding: 3%;
  position: absolute;
  background-color: #f2f2f2;
  margin-bottom: 6%;
  margin-top: -7px;
  color: #767676;
  top: 12%;
  right: 20px;">
<option value="د">د</option>
<option value="م" dir="rtl" lang="ar">م</option>
<option value="أ.د" dir="rtl" lang="ar">أ.د</option>
</select>
</pre>

            </div><input type="text" name="department" placeholder="القسم" dir="rtl" lang="ar" required />
            <input style="background-color:#e8491d" type="submit" value="تسجيل" name="register" dir="rtl" lang="ar">
        </form>
    </div>


    <?php include 'footer.php'
    ?></body>

    </html>
<?php
include 'db.php';
include 'header.php';

if (isset($_POST['login'])) {
    $user = htmlspecialchars($_POST['user']);
    $pass = htmlspecialchars($_POST['pass']);
    $sql = "SELECT * FROM admin where username='$user' ;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            if ($row['password'] == $pass) {
                echo 'successfully log in';
                header("location:admin.php");
            }
        }
    }
}
?>
<div class="login-page">

    <div class="form">
        <h2 class="highlight" dir="rtl" lang="ar">تسجيل الدخول لمنسق المشاريع </h2>
        <form method="post" action="" class="login-form">
            <input type="text" dir="rtl" lang="ar" name="user" placeholder="اسم المستخدم " />
            <input type="password" name="pass" placeholder="كلمة السر " dir="rtl" lang="ar" />
            <input type="submit" name="login" value="تسجيل الدخول"
                style="background-image: linear-gradient(#e8491d,#FFA07A);color:#f2f2f2; " />
        </form>
    </div>
</div>
<?php
include 'footer.php'
?>


</body>

</php>
<?php
include 'header.php'; ?>
<?php
include 'db.php';
?>
<?php
if (isset($_POST['register'])) {
    $name = htmlspecialchars($_POST['name']);
    $stdid = htmlspecialchars($_POST['stdid']);
    $specialization = htmlspecialchars($_POST['specialization']);
    $project = htmlspecialchars($_POST['project']);
    $temp = htmlspecialchars($_POST['group_no']);
    $sql1 = "select std_id from student where group_no= $temp ;";
    $result1 = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result1) > 3) {
        die("cant' be more than four student in a group");
    } else {
        $group_no = htmlspecialchars($_POST['group_no']);
    }
    $level = htmlspecialchars($_POST['level']);
    $sql =
        "insert into student(std_id,std_name,specialization,project_name,group_no,level,status)
      values($stdid,'$name','$specialization','$project','$group_no',$level,1);
      ";
    if (!mysqli_query($conn, $sql)) {
        echo 'error in adding student ';
    }
}
?>
<?php
include 'adminnavbar.php';
?>

<div class="main-content">
    <div class="form">
        <form class="login-form" action="adminaddStudent.php" method="post">
            <h2 class="highlight"> تسجيل طالب جديد</h2>
            <input type="text" name="stdid" placeholder="الرقم الجامعي" dir="rtl" lang="ar" required />
            <input type="text" name="name" placeholder="اسم الطالب" dir="rtl" lang="ar" required />
            <input type="text" name="specialization" placeholder="التخصص" dir="rtl" lang="ar" required />
            <input type="text" name="level" placeholder="المرحلة الجامعية" dir="rtl" lang="ar" required />
            <input type="text" name="group_no" id="group_no" placeholder="رقم المجموعة " dir="rtl" lang="ar" required>
            <select name="project" style="width:auto;">
                <?php
                $sql1 = "select * from project ;";
                $result1 = mysqli_query($conn, $sql1);

                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        ?>
                <option value="<?= $row['name'] ?>">
                    <?= $row['name'] ?>
                </option>

                <?php

                }
            } ?>
            </select>
            <span dir="rtl" lan="ar" class="project_text">المشروع</span>
            <br>
            <input type="submit" value="تسجيل" name="register" dir="rtl" lang="ar">

        </form>
    </div>
</div>
<?php
include 'footer.php'
?>
</body>

</html>
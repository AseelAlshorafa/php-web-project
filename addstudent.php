<?php
include 'header.php';
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
      values($stdid,'$name','$specialization','$project','$group_no',$level,0);
      ";
    if (mysqli_query($conn, $sql)) {
        echo 'student added successfuly ';
    }
}
?>
<div class="login-page">
    <div class="form">
        <form action='' method="post">
            <h2 class="highlight" dir="rtl" lang="ar"> تسجيل طالب جديد</h2>
            <input type="text" name="stdid" placeholder="الرقم الجامعي" required dir="rtl" lang="ar" />
            <input type="text" name="name" placeholder="اسم الطالب" dir="rtl" lang="ar" required />
            <input type="text" name="specialization" placeholder="التخصص" dir="rtl" lang="ar" required />
            <input type="text" name="level" placeholder="المرحلة الجامعية" dir="rtl" lang="ar" required />
            <input type="text" name="group_no" id="group_no" placeholder="رقم المجموعة " dir="rtl" lang="ar" required>
            <select name="project" dir="rtl" lang="ar" style="width:auto;" dir="rtl" lang="ar" required>
                <?php
                $sql1 = "select * from project ;";
                $result1 = mysqli_query($conn, $sql1);

                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        ?>
                <option value=" <?= $row['name'] ?>">
                    <?= $row['name'] ?>
                </option>
                <?php
                }
            } ?>
            </select>
            <span dir="rtl" lan="ar" class="project_text">المشروع</span>
            <input type="submit" value="تسجيل" dir="rtl" lang="ar" name="register"
                style="background-color: #e8491d;color:#f2f2f2;">
        </form>
    </div>


</div>

<?php
include 'footer.php'
?>
</body>

</html>
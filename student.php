<?php
include 'header.php'
?>
<?php
include 'adminnavbar.php'
?>
<div class="main-content" style="float:left">
    <h1 class="highlight" lan="ar" dir="rtl" style="text-align:center; margin-bottom:20px;">الطلاب </h1>
    <table>
        <tr>
            <form action=" adminaddstudent.php">
                <button class="add" dir="rtl" lang="ar"> أضف طالب </button>
            </form>
        </tr>
        <tr>
            <th dir="rtl" lang="ar">حالة الطالب</th>
            <th dir="rtl" lang="ar">المشروع </th>
            <th dir="rtl" lang="ar">التخصص</th>
            <th dir="rtl" lang="ar">الاسم</th>
            <th dir="rtl" lang="ar">الرقم الجامعي</th>
        </tr>
        <?php
        $sql = "select * from student;";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
        <tr>
            <td><?php echo $row['status'];

                        if ($row['status'] == 0) {

                            ?>
                <form action="" method="post">
                    <input type="submit" value="تفعيل" name="activate" dir="rtl" lan="ar">
                </form>
                <?php
                            if (isset($_POST['activate'])) {
                                $id = $row['std_id'];
                                $sql = "update student  
                    set status = 1 where std_id = $id;";

                                mysqli_query($conn, $sql);
                            }
                        } ?>

            </td>
            <td><?= $row['project_name'] ?></td>
            <td><?= $row['specialization'] ?></td>
            <td><?= $row['std_name'] ?></td>
            <td><?= $row['std_id'] ?></td>

        </tr>
        <?php }
    } ?>

    </table>
    </section>
    <?php
    include 'footer.php'
    ?>
    </body>

    </html>
<?php
include 'header.php'
?>
<?php
include 'adminnavbar.php'
?>
<div class="main-content">
    <table>
        <tr>
            <th lang="ar" dir="rtl">النوع</th>
            <th lang="ar" dir="rtl">اسم المشروع</th>
            <th lang="ar" dir="rtl">اسم الطلاب </th>
            <th lang="ar" dir="rtl">رقم المجموعة</th>
        </tr>
        <tr>
            <?php

            // $sql1="select * from student join project on student.project_name=project.name; ";
            //  $sql="select * ,count(*) from select * from student join project on student.project_name=project.name  group by project_name ";
            $sql = "SELECT student.std_id,student.std_name,student.project_name,student.group_no,project.name,project.type FROM student,project WHERE student.project_name =project.name  order by student.group_no";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<td >$row[type]</td>";
                echo "<td>$row[project_name]</td>";
                echo "<td>$row[std_name]</td>";
                echo "<td>$row[group_no]</td>";

                echo "</tr>";
            }









            ?>

        </tr>
        <?php
        include 'footer.php'
        ?>


        </body>

        </html>
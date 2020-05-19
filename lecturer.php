<?php 
include 'header.php'
?>




<?php 
include 'adminnavbar.php'
?>
<div class="main-content">
    <table>
        <tr>
            <form action="addlecturer.php">
                <button class="add" dir="rtl" lan="ar"> أضف مشرف</button>
            </form>
        </tr>
        <tr>
            <th dir="rtl" lan="ar">القسم </th>
            <th dir="rtl" lan="ar">الاسم</th>
            <th dir="rtl" lan="ar">الدرجة الأكاديمية</th>

        </tr>
        <?php 
$sql="select * from lecturel ;";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?=$row['department']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['role']?></td>
        </tr>
        <?php }} ?>
    </table>


    <?php 
include 'footer.php'
?>
    </body>

    </html>
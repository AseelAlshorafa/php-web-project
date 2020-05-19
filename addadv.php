<?php
include 'header.php'
?>
<?php
include 'adminnavbar.php'
?>


<div class="main-content">
    <h1 class="highlight" lan="ar" dir="rtl" style="text-align:center; margin-bottom:20px;">أضف إعلان </h1>
    <form class="form" action="upload.php" method="POST" enctype="multipart/form-data">

        <input type="text" name="title" placeholder="عنوان الإعلان" lan="ar" dir="rtl" required>
        <textarea rows="6" placeholder="أدخل وصف للإعلان" style="background-color:#f2f2f2; width:98%" name="description"
            lan="ar" dir="rtl"></textarea>

        <input type="file" name="file" />
        <input style="background-color:#e8491d" type="submit" value="أضف إعلان" name="addadv" lan="ar" dir="rtl">
    </form>
    <?php
    include 'footer.php'
    ?>

    </body>

    </html>
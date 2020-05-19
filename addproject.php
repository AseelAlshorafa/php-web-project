<?php
include 'header.php'
?>
<?php
include 'adminnavbar.php'
?>

<div class="main-content">
    <div class="form">
        <form method="post" action="" class="login-form">
            <h1 class="highlight" style="text-align: center;padding:2%;">إضافة مشروع</h1>
            <input type="text" name="name" placeholder="الاسم" dir="rtl" lang="ar" required />
            <?php
            if (isset($_POST['register'])) {
                $name = htmlspecialchars($_POST['name']);
                $supervisor = htmlspecialchars($_POST['supervisor']);
                $description = htmlspecialchars($_POST['description']);
                $type = htmlspecialchars($_POST['type']);
                $sql = "insert into project (name,description,type,supervisor) values('$name','$description','$type','$supervisor');";
                if (!mysqli_query($conn, $sql)) {
                    echo 'error in adding project';
                }
            }


            ?>

            <select name="supervisor" dir="rtl" lang="ar">

                <?php
                $sql1 = "select * from lecturel ;";
                $result1 = mysqli_query($conn, $sql1);

                if (mysqli_num_rows($result1) > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        ?>
                <option value="<?= $row['name'] ?>">
                    <?= $row['name'] ?>
                </option>
                <?php
                }
            }

            ?>

            </select>
            <span class="text-form" dir="rtl" lang="ar"> المشرف:</span>
            <br>
            <textarea name="description" cols="30" rows="10" dir="rtl" lang="ar" placeholder=" وصف المشروع"
                required></textarea>


            <select name="type">
                <option value="ويب" dir="rtl" lang="ar">ويب</option>
                <option value="سطح مكتب" dir="rtl" lang="ar">سطح مكتب</option>
                <option value="موبايل" dir="rtl" lang="ar">موبايل</option>
            </select>
            <span class="text-form"> :النوع</span>
            <br>
            <input type="submit" value="إضافة" name="register">
        </form>

    </div>
    </main>



    <?php
    include 'footer.php'
    ?>

    <body>

    </body>

    </php>
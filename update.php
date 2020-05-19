<?php include 'header.php'; ?>
<?php include 'adminnavbar.php'; ?>

<body>
    <div class="main-content">
        <div class="form">
            <form method="post" action="" class="login-form">
                <h1 class="highlight" style="text-align: center;padding:2%;">حذف طالب </h1>
                <input type="text" name="std_id" placeholder="رقم الطالب  " dir="rtl" lang="ar" required />
                <?php
                if (isset($_POST['delete'])) {
                    $stdid = htmlspecialchars($_POST['std_id']);
                    $sql = "delete from student where std_id=$stdid;";
                    if (!mysqli_query($conn, $sql)) {
                        echo 'error in deleting project';
                    }
                }


                ?>
                <br>
                <input type="submit" value="حذف" name="delete">
            </form>

        </div>
        </main>



        <?php
        include 'footer.php'
        ?>

        <body>

        </body>

        </php>
</body>

</html>
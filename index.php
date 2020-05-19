<?php
include 'header.php'
?>
<div class="img">
    <h1 dir="rtl" lang="ar"> سجل لمشروع تخرجك ...</h1>
</div>
<aside>
    <?php
    include 'navbar.php'
    ?>
    <section class="container">
        <div class="adv">
            <div class="adv1">
                <h3>
                    <?php
                    $sql = "SELECT * FROM adv WHERE adv_id=(SELECT MAX(adv_id) FROM adv);";
                    $result = (mysqli_query($conn, $sql));
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['title'];
                        }
                    }





                    ?>
                </h3>
                <p lan="ar" dir="rtl">
                    <?php
                    $sql = "SELECT * FROM adv WHERE adv_id=(SELECT MAX(adv_id) FROM adv);";
                    $result = (mysqli_query($conn, $sql));
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['description'];
                            echo '<br> <br>';
                            if (!empty($row['file'])) {
                                $name = $row['file'];
                                echo "<a href='uploads/$name' class='advlink'> الملف المرفق </a>";
                            }
                        }
                    } ?>
                </p>
            </div>
            <div class="adv2">
                <h3>
                    <?php
                    $sql = "SELECT * FROM adv WHERE adv_id=(SELECT MAX(adv_id)-1 FROM adv);";
                    $result = (mysqli_query($conn, $sql));
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['title'];
                        }
                    } ?>
                </h3>
                <p lan="ar" dir="rtl">
                    <?php
                    $sql = "SELECT * FROM adv WHERE adv_id=(SELECT MAX(adv_id)-1 FROM adv);";
                    $result = (mysqli_query($conn, $sql));
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['description'];
                            echo '<br> <br>';
                            if (!empty($row['file'])) {
                                $name = $row['file'];
                                echo "<a href='uploads/$name' class='advlink'> الملف المرفق</a>";
                            }
                        }
                    } ?>

                </p>
            </div>
            <div class="adv3">
                <h3>
                    <?php
                    $sql = "SELECT * FROM adv WHERE adv_id=(SELECT MAX(adv_id)-2 FROM adv);";
                    $result = (mysqli_query($conn, $sql));
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['title'];
                        }
                    } ?>
                </h3>
                <p lan="ar" dir="rtl">
                    <?php
                    $sql = "SELECT * FROM adv WHERE adv_id=(SELECT MAX(adv_id)-2 FROM adv);";
                    $result = (mysqli_query($conn, $sql));
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['description'];
                            echo '<br> <br>';
                            if (!empty($row['file'])) {
                                $name = $row['file'];
                                echo "<a href='uploads/$name'  class='advlink' >
                                الملف المرفق  </a>";
                            }
                        }
                    }



                    ?>
                </p>
            </div>
        </div>
    </section>
    <?php
    include 'footer.php'
    ?>
    </div>
    </body>

    </html>
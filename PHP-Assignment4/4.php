<html>
    <!-- 
        Tanuj Dey (c) github.com/tanujdey7
    -->
    <body>
        <?php
            if(@$_POST[submit]) {
                $extension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
                if($extension == 'jpeg' || $extension == 'jpg') {
                    echo "File is image";
                }
                else {
                    echo "File is not image";
                }
            }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" name="submit" value="Upload">
        </form>
    </body>
</html>

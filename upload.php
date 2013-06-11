<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            <label for="file">Filename:</label>
            <input type="file" name="file1" id="file1" /> 
            <br />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit'])) {
    if ($_FILES["file1"]["error"] > 0) {
        echo "Error: " . $_FILES["file1"]["error"] . "<br />";
    } else {
        echo "Upload: " . $_FILES["file1"]["name"] . "<br />";
        echo "Type: " . $_FILES["file1"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file1"]["size"] / 1024) . " Kb<br />";
        echo "Stored in: " . $_FILES["file1"]["tmp_name"];
    }
}
?>

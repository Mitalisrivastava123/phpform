<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form with image upload  -->
<form action="upload.php" method="post" enctype="multipart/form-data">
    <p>
    <label for="file">choose image to upload </label>
    <input type="file" name="fileToUpload" id="fileToUpload">
</p>
<p>
<input type="submit" name="submit" value="Upload Image">
</p>
<!-- form end -->
</form>
</body>
</html>
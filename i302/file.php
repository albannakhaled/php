<!DOCTYPE html>
<html>
<body>

<form action="testUpload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  Select multiple files to upload 
  <input type="file" name="img[]" multiple>
  <input type="submit" value="Upload file" name="submit">
</form>

</body>
</html>
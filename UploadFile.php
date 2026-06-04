<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file   = $_FILES['file'];
    $target = 'uploads/' . basename($file['name']);
    if (!is_dir('uploads')) mkdir('uploads');
    if (move_uploaded_file($file['tmp_name'], $target))
      echo "File '" . $file['name'] . "' uploaded successfully.";
    else
      echo "Upload failed.";
  }
?>
 
<form method='post' enctype='multipart/form-data'>
  <input type='file' name='file'>
  <button type='submit'>Upload</button>
</form>
<?php
$input = trim($_POST['str'] ?? '');
$output = $input ? htmlspecialchars($input) : null;
?>
<!DOCTYPE html>
<html>
<head><title>String Input</title></head>
<body>
    <form method="POST">
        <input name="str" placeholder="Enter string" value="<?= $output ?>">
        <button>Submit</button>
    </form>
    <?php if ($output): ?>
        <p>Result: <b><?= $output ?></b></p>
    <?php endif; ?>
</body>
</html>
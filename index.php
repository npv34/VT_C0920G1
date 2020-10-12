<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!$_REQUEST['name']) {
        $errorName = 'Name kho duoc de trong';
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td>
                <input name="name" type="text">
                <?php if (isset($errorName) && $errorName):?>
                    <p style="color: red"><?php echo $errorName ?></p>
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <td>Group</td>
            <td><input name="group" type="text"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">submit</button>
            </td>
        </tr>
    </table>
</form>

<table>
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Group</td>
    </tr>
    <?php for ($i = 0; $i < 10; $i++): ?>
        <?php if ($i == 5) break ?>
        <tr>
            <td><?php echo $i + 1 ?></td>
            <td>Duc - <?php echo $i ?></td>
            <td>C0920G1</td>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>


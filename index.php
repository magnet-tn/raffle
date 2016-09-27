<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href='' type='text/css'>

    <title>Raffle</title>
    <?php require 'logic.php'; ?>

</head>
<body class='placeholder'>

    <h1>Raffle Application: </h1>

    <table border=1>
        <?php foreach($contestants as $name => $status): ?>
            <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $status ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>

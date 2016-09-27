<!-- ?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?  -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href='styles.css' type='text/css'>
    <link rel="icon" type="image/png" href="TroubleU-icon.png">

    <title>Raffle</title>
    <?php require 'logic.php'; ?>

</head>
<body class='placeholder'>

    <h1>Raffle Application: </h1>


    <form action='index.php' method='GET'>

        <input type='text' name='contestant1'><br>
        <input type='text' name='contestant2'><br>
        <input type='text' name='contestant3'><br>
        <input type='text' name='contestant4'><br>
        <input type='text' name='contestant5'><br>
        <input type='text' name='contestant6'><br>
        <input type='text' name='contestant7'><br>
        <input type='text' name='contestant8'><br>

        <input type='submit' value='Select winning ticket!'>

    </form>

    <br>
    <br>

    <table>
        <tr>
            <th>Contestant</th>
            <th>Status</th>
        </tr>
        <?php foreach($contestants as $name => $status): ?>
            <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $status ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>

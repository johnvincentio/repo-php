<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TODO application</title>
</head>

<body>
    <div>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST['todo'])) {
    echo 'MyData is ', $_POST['todo'];
    file_put_contents('todo.txt', $_POST['todo'] . "\n", FILE_APPEND);
}

$todos = file('todo.txt');
?>

    </div>
    <div>
        <form method="POST" action="">
            <p>
                <input type="text" name="todo" />
                <button type="submit">Submit</button>
            </p>
            <ul>
               <?php
               foreach ($todos as $todo)
               {
               echo '<li>' . $todo . '</li>';
               }
               ?>
            </ul>
        </form>
    </div>
</body>

</html>
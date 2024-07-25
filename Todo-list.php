<?php
            session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                background-color: black;
            }

            .LIST {
                max-width: 500px;
                margin: 0 auto;
                padding: 20px;
                background-color: grey;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            h1 {
                margin-bottom: 20px;
            }

            form {
                margin-bottom: 20px;
            }

            input[type="text"] {
                padding: 10px;
                border: 1px solid black;
                border-radius: 3px;
                width: 80%;
            }

            button {
                padding: 10px 20px;
                background-color: green;
                color: yellow;
                border: 1px solid black;
                border-radius: 2px;
                cursor: pointer;
            }

            ul {
                list-style: none;
                padding: 0;
            }

            li {
                margin-bottom: 10px;
                border: 1px solid green;
                padding: 10px;
                border-radius: 3px;
            }
</style>

    <title>Dynamic To-Do List</title>
    <link rel="stylesheet" href="To-do_list.css">
</head>
<body>
    <div class="LIST">
        <h1>To-Do List</h1>
        <form method="post" action="add_task.php">
            <input type="text" name="task" placeholder="Add a task">
            <h2 id="Alert"></h2>
            <ul id="list-items" class="list-items"></ul>
            <button type="submit" name= "add_task">Add a task</button></br>
        </form>
      <ul>
        <?php 
        foreach ($_SESSION['tasks'] as $index => $task): ?>
            <li>
                <?php echo $index; ?>
                <?php echo $task; ?>
                <form method="POST"  action="add_task.php">
                    <input type="hidden" name="task_index" value="<?php echo $index; ?>">
                    <input type="text" name="edited_task" value="<?php echo $task; ?>">
                    <button type="submit" name="edit_task" value="<?php echo $index; ?>">Edit</button>
                    <button type="submit" name="delete_task" value="<?php echo $index; ?>">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
      </ul>
        <ul id="task_list">
            </ul>
    </div>
</body>
</html>
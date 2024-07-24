
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
                width: 100%;
            }

            button {
                padding: 10px 20px;
                background-color: green;
                color: yellow;
                border: none;
                border-radius: 3px;
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
            <button type="Add a task">Add a task</button></br>
        </form>
        <javascript></javascript>
        <?php
         $_SERVER["REQUEST_METHOD"] == "POST" ;
         $add_a_task = $_POST['task'];
         $input = array($add_a_task);
         $message[]= $input;
         foreach($message as $input){
             echo $input[0];
         }
?>  
        <ul id="task_list">
            </ul>
    </div>
</body>
</html>
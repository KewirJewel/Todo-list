
<?php
       // echo $_GET["task"] ;
            session_start();

            if (!isset($_SESSION['tasks'])) {
               echo $_SESSION['tasks'] = [];
            }
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['add_task'])) {
                    $newTask = $_POST['task'];
                  $_SESSION['tasks'][] = $newTask;
                } elseif (isset($_POST['edit_task'])) {
                    $index = $_POST['task_index'];
                    $newTask = $_POST['edited_task'];
                    $_SESSION['tasks'][$index] = $newTask;
                } else if (isset($_POST['delete_task'])) {
                    $index = $_POST['task_index'];
                    unset($_SESSION['tasks'][$index]);
                    $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Reindex array
                }
            }
            header("Location: Todo-list.php")
?>
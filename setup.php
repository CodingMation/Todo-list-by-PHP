<?php

// configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'todo_list';

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if($conn -> connect_error) die("connection failed: ".$conn->connect_error);

// display
function display_tasks(){
    global $conn;
    $query = "SELECT * FROM tasks";
    $result = mysqli_query($conn, $query);

    while($row = $result->fetch_assoc()){
        $checkStatus = $row['status'] == 'pending' ? 'style="color: gray;"' 
        : ($row['status'] == 'completed' ? 'style="color: lightgreen;"' 
        : '');
   
        echo "<tr>";
        echo "<td style='color:white;'>".$row['task']."</td>";
        echo "<td><span $checkStatus >".$row['status']."</span></td>";
        echo "<td>";
        echo "<a href='update.php?id=".$row['id']."&status=completed'>Mark as Completed</a>";
        echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
}

// add data
function add_task($task){
    global $conn;
    echo 'alert("sumit")';
    $query = "INSERT INTO tasks(task) VALUES('$task')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo 'alert("sumit")';
    }
}

// update data
function update_task($id, $status){
    global $conn;
    $query = "UPDATE tasks SET status='$status' WHERE id = $id";
    $conn->query($query);
}

// delete data
function delete_task($id){
    global $conn;
    $query = "DELETE FROM tasks WHERE id = $id";
    $conn->query($query);
}

?>
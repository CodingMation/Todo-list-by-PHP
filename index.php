<?php 
require_once './setup.php';
$showAddTask = "document.querySelector('.whole-page').style.display='flex';";
$hideAddTask = "document.querySelector('.whole-page').style.display='none';";
?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h1>TO-DO List</h1>

<div class="whole-page" style="display: none;">
    <form action="add.php" method="post">
        <h2>Add a New Task</h2>
        <label for="task">Enter A task :
        <input type="text" name="task" placeholder="Enter task" autofocus/>
        </label>
        
        <div inp-btn>
        <input type="submit" name="Add" />
        <input type="reset" name="Reset" />
        <input type="button" value="Cancel" 
        onclick="<?php echo $hideAddTask; ?>" />
        </div>
    </form>
</div>
<div class="btn">
    <button onclick="<?php echo $showAddTask; ?>">+</button>
</div>
<table cellspacing="0">
    <thead>
        <tr>
            <th>Task</th>
            <th>Status</th>
            <th style="column-span:2;">Actions</th>
        </tr>
    </thead>
    <tbody class="table-container">
        <?php display_tasks() ?>
    </tbody>
</table>

</body>
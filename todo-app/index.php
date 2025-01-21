<?php
require 'vendor/autoload.php';

# Connect to the database
try {
    $pdo = new \PDO("sqlite:" . "db/sqlite.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exceptions
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

# Handle user actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # Add New TODO
    if (isset($_POST['submit'])) {
        $description = trim($_POST['description']);
        if (!empty($description)) {
            $sth = $pdo->prepare("INSERT INTO todos (description) VALUES (:description)");
            $sth->bindValue(':description', $description, PDO::PARAM_STR);
            $sth->execute();
        } else {
            echo "<script>alert('Description cannot be empty');</script>";
        }
    }
    # Delete TODO
    elseif (isset($_POST['delete'])) {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        if ($id !== false) {
            $sth = $pdo->prepare("DELETE FROM todos WHERE id = :id");
            $sth->bindValue(':id', $id, PDO::PARAM_INT);
            $sth->execute();
        }
    }
    # Mark as Complete
    elseif (isset($_POST['complete'])) {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        if ($id !== false) {
            $sth = $pdo->prepare("UPDATE todos SET complete = 1 WHERE id = :id");
            $sth->bindValue(':id', $id, PDO::PARAM_INT);
            $sth->execute();
        }
    }
}

# Fetch all TODOs
$sth = $pdo->prepare("SELECT * FROM todos ORDER BY id DESC");
$sth->execute();
$todos = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
</head>

<body class="container my-5">
    <h1 class="mb-4">Todo List</h1>

    <form method="post" action="" class="mb-3">
        <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="Enter task" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Task</button>
    </form>

    <h2>Current Todos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($todos as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['description']) ?></td>
                <td>
                    <?php if (!$row['complete']): ?>
                        <form method="POST" class="d-inline">
                            <button type="submit" name="complete" class="btn btn-success btn-sm">Mark Complete</button>
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        </form>
                    <?php else: ?>
                        <span class="badge badge-success">Completed</span>
                    <?php endif; ?>
                </td>
                <td>
                    <form method="POST" class="d-inline">
                        <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

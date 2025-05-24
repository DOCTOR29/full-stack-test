<?php
require_once 'config.php';

// Handle add new slide
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $type = $_POST['type'] ?? '';
    $title = $_POST['title'] ?? '';
    $subtitle = $_POST['subtitle'] ?? '';
    $description = $_POST['description'] ?? '';
    $image = $_POST['image'] ?? '';
    $badge = $_POST['badge'] ?? '';
    $link = $_POST['link'] ?? '';
    $stmt = $pdo->prepare('INSERT INTO sections (type, title, subtitle, description, image, badge, link) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$type, $title, $subtitle, $description, $image, $badge, $link]);
    header('Location: admin.php');
    exit;
}

// Handle delete
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $delete_id = (int)$_POST['delete_id'];
    $stmt = $pdo->prepare('DELETE FROM sections WHERE id = ?');
    $stmt->execute([$delete_id]);
    header('Location: admin.php');
    exit;
}

// Handle edit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_id'])) {
    $edit_id = (int)$_POST['edit_id'];
    $type = $_POST['type'] ?? '';
    $title = $_POST['title'] ?? '';
    $subtitle = $_POST['subtitle'] ?? '';
    $description = $_POST['description'] ?? '';
    $image = $_POST['image'] ?? '';
    $badge = $_POST['badge'] ?? '';
    $link = $_POST['link'] ?? '';
    $stmt = $pdo->prepare('UPDATE sections SET type=?, title=?, subtitle=?, description=?, image=?, badge=?, link=? WHERE id=?');
    $stmt->execute([$type, $title, $subtitle, $description, $image, $badge, $link, $edit_id]);
    header('Location: admin.php');
    exit;
}

// Fetch all slides
$stmt = $pdo->query('SELECT * FROM sections ORDER BY type, id');
$slides = $stmt->fetchAll();

// For inline edit
$edit_row = isset($_GET['edit']) ? (int)$_GET['edit'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Slides</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this slide?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
    </script>
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4">Admin: Manage Slides</h2>
    <div class="card mb-4">
        <div class="card-header">Add New Slide</div>
        <div class="card-body">
            <form method="post">
                <div class="row g-3">
                    <div class="col-md-2">
                        <label class="form-label">Type</label>
                        <select name="type" class="form-select" required>
                            <option value="">Select</option>
                            <option value="learning">Learning</option>
                            <option value="technology">Technology</option>
                            <option value="communication">Communication</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Badge</label>
                        <input type="text" name="badge" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Image Path</label>
                        <input type="text" name="image" class="form-control" placeholder="files/images/DL-Learning-1.jpg" required>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Link</label>
                        <input type="text" name="link" class="form-control" placeholder="#">
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Subtitle</label>
                        <input type="text" name="subtitle" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" name="add" class="btn btn-primary">Add Slide</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">All Slides</div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Badge</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($slides as $slide): ?>
                    <tr>
                    <?php if ($edit_row === (int)$slide['id']): ?>
                        <form method="post">
                        <td><?= $slide['id'] ?><input type="hidden" name="edit_id" value="<?= $slide['id'] ?>"></td>
                        <td>
                            <select name="type" class="form-select" required>
                                <option value="learning" <?= $slide['type']==='learning'?'selected':'' ?>>Learning</option>
                                <option value="technology" <?= $slide['type']==='technology'?'selected':'' ?>>Technology</option>
                                <option value="communication" <?= $slide['type']==='communication'?'selected':'' ?>>Communication</option>
                            </select>
                        </td>
                        <td><input type="text" name="title" class="form-control" value="<?= htmlspecialchars($slide['title']) ?>" required></td>
                        <td><input type="text" name="badge" class="form-control" value="<?= htmlspecialchars($slide['badge']) ?>"></td>
                        <td><input type="text" name="image" class="form-control" value="<?= htmlspecialchars($slide['image']) ?>" required></td>
                        <td><input type="text" name="link" class="form-control" value="<?= htmlspecialchars($slide['link']) ?>"></td>
                        <td>
                            <button type="submit" class="btn btn-success btn-sm">Save</button>
                            <a href="admin.php" class="btn btn-secondary btn-sm">Cancel</a>
                        </td>
                        </form>
                    <?php else: ?>
                        <td><?= $slide['id'] ?></td>
                        <td><?= htmlspecialchars($slide['type']) ?></td>
                        <td><?= htmlspecialchars($slide['title']) ?></td>
                        <td><?= htmlspecialchars($slide['badge']) ?></td>
                        <td><small><?= htmlspecialchars($slide['image']) ?></small></td>
                        <td><small><?= htmlspecialchars($slide['link']) ?></small></td>
                        <td>
                            <a href="admin.php?edit=<?= $slide['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form method="post" id="delete-form-<?= $slide['id'] ?>" action="admin.php" style="display:inline;">
                                <input type="hidden" name="delete_id" value="<?= $slide['id'] ?>">
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $slide['id'] ?>)">Delete</button>
                            </form>
                        </td>
                    <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html> 
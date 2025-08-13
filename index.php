<?php include 'db.php'; ?>

<?php
// Create - Insert book
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];

    $sql = "INSERT INTO books (title, author, genre, price) VALUES ('$title', '$author', '$genre', '$price')";
    $conn->query($sql);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>BookShelf - Book Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>BookShelf - Manage Your Books</h1>

<div class="form-container">
    <form method="POST">
        <input type="text" name="title" placeholder="Book Title" required>
        <input type="text" name="author" placeholder="Author" required>
        <input type="text" name="genre" placeholder="Genre">
        <input type="number" step="0.01" name="price" placeholder="Price">
        <button type="submit" name="add">Add Book</button>
    </form>
</div>

<table>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM books");
    while ($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['title'] ?></td>
        <td><?= $row['author'] ?></td>
        <td><?= $row['genre'] ?></td>
        <td><?= $row['price'] ?></td>
        <td>
            <a class="edit" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
            <a class="delete" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this book?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>

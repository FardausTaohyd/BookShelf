<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM books WHERE id=$id");
$book = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];

    $conn->query("UPDATE books SET title='$title', author='$author', genre='$genre', price='$price' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Edit Book</h1>
<div class="form-container">
    <form method="POST">
        <input type="text" name="title" value="<?= $book['title'] ?>" required>
        <input type="text" name="author" value="<?= $book['author'] ?>" required>
        <input type="text" name="genre" value="<?= $book['genre'] ?>">
        <input type="number" step="0.01" name="price" value="<?= $book['price'] ?>">
        <button type="submit" name="update">Update</button>
    </form>
</div>
</body>
</html>

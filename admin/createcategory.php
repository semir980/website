<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .container h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create Category</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="categoryNumber">Category Number</label>
                <input type="number" id="categoryNumber" name="categoryNumber">
            </div>
            <div class="form-group">
                <label for="categoryName">Category Name</label>
                <input type="text" id="categoryName" name="categoryName">
            </div>
            <div class="form-group">
                <label for="categoryDescription">Category Description</label>
                <textarea id="categoryDescription" name="categoryDescription" rows="4"></textarea>
            </div>
            <button type="submit" class="btn">Create Category</button>
        </form>
    </div>

    <script>
        function createCategory() {
            const categoryNumber = document.getElementById('categoryNumber').value;
            const categoryName = document.getElementById('categoryName').value;
            const categoryDescription = document.getElementById('categoryDescription').value;

            if (categoryNumber && categoryName && categoryDescription) {
                alert('Category Created Successfully!');
                // Here you can add your code to handle the form submission, e.g., send data to the server
            } else {
                alert('Please fill in all fields.');
            }
        }
    </script>

    
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoryNumber = $_POST['categoryNumber'];
    $categoryName = $_POST['categoryName'];
    $categoryDescription = $_POST['categoryDescription'];

    if ($categoryNumber && $categoryName && $categoryDescription) {
        $conn = new mysqli('localhost', 'root', '', 'anticmarketdb');

        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        $stmt = $conn->prepare('INSERT INTO categories (category_number, category_name, category_description) VALUES (?, ?, ?)');
        $stmt->bind_param('iss', $categoryNumber, $categoryName, $categoryDescription);

        if ($stmt->execute()) {
            echo 'Category Created Successfully!';
        } else {
            echo 'Error: ' . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo 'Please fill in all fields.';
    }
}
?>
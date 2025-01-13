<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add Product</h2>
        <form id="addProductForm" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" required>
            </div>
            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <textarea id="productDescription" name="productDescription" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="productPrice">Product Price</label>
                <input type="number" id="productPrice" name="productPrice" required>
            </div>
            <div class="form-group">
                <label for="productImages">Product Images</label>
                <input type="file" id="productImages" name="productImages[]" multiple style="display: none;">
                <div class="form-group">
                    <label for="productImagesPreview">Product Images Preview</label>
                    <div id="productImagesPreview" style="display: flex; flex-wrap: wrap; gap: 10px; border: 1px solid #ddd; padding: 10px; border-radius: 4px; background-color: #f9f9f9;">
                        <!-- Images will be displayed here -->
                    </div>
                    <button type="button" id="selectImagesButton">Select Images</button>
                </div>
            </div>

            <div class="form-group">
                <button type="submit">Add Product</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('addProductForm').addEventListener('submit', function(event) {
            const files = document.getElementById('productImages').files;
            if (files.length < 5) {
                event.preventDefault();
                alert('Please upload at least 5 images.');
            }
        });
    </script>

    <script>
        document.getElementById('selectImagesButton').addEventListener('click', function() {
            document.getElementById('productImages').click();
        });

        document.getElementById('productImages').addEventListener('change', function(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById('productImagesPreview');
            previewContainer.innerHTML = ''; // Clear previous images

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '100px';
                    img.style.height = '100px';
                    img.style.objectFit = 'cover';
                    img.style.borderRadius = '4px';
                    previewContainer.appendChild(img);
                };

                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (count($_FILES['productImages']['name']) < 5) {
        echo "Please upload at least 5 images.";
        exit;
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "anticmarketdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productPrice = $_POST['productPrice'];

    $sql = "INSERT INTO products (name, description, price) VALUES ('$productName', '$productDescription', '$productPrice')";

    if ($conn->query($sql) === TRUE) {
        $productId = $conn->insert_id;
        $uploadDir = 'uploads/';
        // Ensure the upload directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        foreach ($_FILES['productImages']['tmp_name'] as $key => $tmpName) {
            $fileName = basename($_FILES['productImages']['name'][$key]);
            $targetFilePath = $uploadDir . $fileName;
            if (move_uploaded_file($tmpName, $targetFilePath)) {
                $sql = "INSERT INTO product_images (product_id, image_path) VALUES ('$productId', '$targetFilePath')";
                $conn->query($sql);
            }
        }
        echo "New product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
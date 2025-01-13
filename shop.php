<?php include 'includes/header1.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="css/respoonsive.css">
    <script src="scripts.js" defer></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            padding: 20px;
        }

        .filter {
            width: 20%;
            background-color: #fff;
            padding: 20px;
            margin-right: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .filter h2,
        .filter h3 {
            margin-top: 0;
        }

        .filter ul {
            list-style: none;
            padding: 0;
        }

        .filter li {
            margin-bottom: 10px;
        }

        .filter-price {
            margin-top: 20px;
        }

        .products {
            width: 80%;
        }

        .sort {
            margin-bottom: 20px;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
        }

        .product-card {
            background-color: #fff;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: calc(33.333% - 40px);
            box-sizing: border-box;
        }

        .product-card:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

        .product-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .product-card h4 {
            margin: 10px 0;
            text-align: center;
        }

        .price {
            margin: 10px 0;
            text-align: center;
        }

        .regular-price {
            text-decoration: line-through;
            color: #888;
            text-align: center;
        }

        .discount-price {
            color: #e74c3c;
            font-weight: bold;
            text-align: center;
        }

        .view-product {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            width: 100%;
        }

        .view-product:hover {
            background-color: #2980b9;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const priceRange = document.getElementById('priceRange');
            const priceValue = document.getElementById('priceValue');

            priceRange.addEventListener('input', function () {
                priceValue.textContent = `$${priceRange.value}`;
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filter = document.querySelector('.filter');
            const filterTitle = document.createElement('div');
            filterTitle.classList.add('filter-title');
            filterTitle.innerHTML = '<h2>Filter Products</h2>';
            filter.insertBefore(filterTitle, filter.firstChild);

            filterTitle.addEventListener('click', function () {
                filter.classList.toggle('open');
            });
        });
    </script>

    <style>
        .filter-title {
            display: none;
            cursor: pointer;
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .filter.open .filter-category,
        .filter.open .filter-price {
            display: block;
        }

        @media (max-width: 768px) {
            .filter {
                width: 100%;
                margin-right: 0;
                order: -1;
            }

            .filter-title {
                display: block;
            }

            .filter-category,
            .filter-price {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .filter {
                width: 100%;
                margin-right: 0;
                order: -1;
            }

            .filter-title {
                display: block;
            }

            .filter-category,
            .filter-price {
                display: none;
            }

            .sort {
                order: 2;
            }

            .products {
                width: 100%;
            }

            .container {
                flex-direction: column;
            }

            .filter {
                order: 1;
            }
        }
    </style>

    <style>
        @media (max-width: 768px) {
            .product-card {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .product-card {
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <aside class="filter">

            <div class="filter-category">
                <h3>Category</h3>
                <ul>
                    <li><input type="checkbox" id="category1"> <label for="category1">Category 1</label></li>
                    <li><input type="checkbox" id="category2"> <label for="category2">Category 2</label></li>
                    <li><input type="checkbox" id="category3"> <label for="category3">Category 3</label></li>
                </ul>
            </div>
            <div class="filter-price">
                <h3>Price</h3>
                <input type="range" min="0" max="1000" value="500" id="priceRange">
                <span id="priceValue">$500</span>
            </div>
        </aside>
        <main class="products">
            <div class="sort">
                <label for="sort">Sort by:</label>
                <select id="sort">
                    <option value="popularity">Popularity</option>
                    <option value="priceLowHigh">Price: Low to High</option>
                    <option value="priceHighLow">Price: High to Low</option>
                </select>
            </div>
            <div class="product-list">
                <div class="product-card">
                    <img src="productimages/img1.jpg" alt="Product 1">
                    <h4>Product 1</h4>
                    <p class="price"><span class="regular-price">$100</span> <span class="discount-price">$80</span></p>
                    <button class="view-product">View Product</button>
                </div>
                <div class="product-card">
                    <img src="productimages/img1.jpg" alt="Product 2">
                    <h4>Product 2</h4>
                    <p class="price"><span class="regular-price">$200</span> <span class="discount-price">$150</span>
                    </p>
                    <button class="view-product">View Product</button>
                </div>

                <div class="product-card">
                    <img src="productimages/img1.jpg" alt="Product 2">
                    <h4>Product 2</h4>
                    <p class="price"><span class="regular-price">$200</span> <span class="discount-price">$150</span>
                    </p>
                    <button class="view-product">View Product</button>
                </div>

                <div class="product-card">
                    <img src="productimages/img1.jpg" alt="Product 2">
                    <h4>Product 2</h4>
                    <p class="price"><span class="regular-price">$200</span> <span class="discount-price">$150</span>
                    </p>
                    <button class="view-product">View Product</button>
                </div>

                <div class="product-card">
                    <img src="productimages/img1.jpg" alt="Product 2">
                    <h4>Product 2</h4>
                    <p class="price"><span class="regular-price">$200</span> <span class="discount-price">$150</span>
                    </p>
                    <button class="view-product">View Product</button>
                </div>

                <div class="product-card">
                    <img src="productimages/img1.jpg" alt="Product 2">
                    <h4>Product 2</h4>
                    <p class="price"><span class="regular-price">$200</span> <span class="discount-price">$150</span>
                    </p>
                    <button class="view-product">View Product</button>
                </div>
                <!-- Add more product cards as needed -->
            </div>
        </main>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>
</footer>
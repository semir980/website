<?php include 'includes/header1.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Filter and Search</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="main">
        <div class="container">
            <h1>Product List</h1>

            <div class="filters">
                <button data-category="all">All</button>
                <button data-category="T-Shirt">T-Shirt</button>
                <button data-category="Short">Short</button>
                <button data-category="Pants">Pants</button>
                <button data-category="Shoes">Shoes</button>
                <select id="sortOrder">
                    <option value="">Sort by</option>
                    <option value="lowest">Lowest Price</option>
                    <option value="highest">Highest Price</option>
                </select>
               <input type="text" id="searchProduct" placeholder="Search product"> -->
            </div>

            <div class="products">
                <!-- Products will be dynamically inserted here -->
            </div>
        </div>
    </div>
    
    <section class="blank" style="height: 200px;"></section>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

body {
    background-image: linear-gradient(to top, #c1dfc4 0%, #deecdd 100%);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

.main {
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 900px;
    margin-top: 80px;
}

.container > h1 {
    font-size: 50px;
    color: #2d2d2d;
    text-shadow: #cccc 1px 1px;
    margin-bottom: 20px;
}

.filters {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.filters > button {
    font-size: 17px;
    padding: 5px;
    width: 90px;
    border: none;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}

.filters > input, select {
    padding: 5px;
    width: 120px;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    border: none;
    outline: none;
}

.products {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.product {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 10px;
    background-color: #fff;
    text-align: center;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.product img {
    max-width: 100px;
    max-height: 100px;
    margin-bottom: 10px;
}
    </style>

    <script>
        const products = [
    { imageURL: "https://img.freepik.com/free-photo/men-rsquo-s-black-short-sleeve-shirt-casual-apparel_53876-106019.jpg?t=st=1716520765~exp=1716524365~hmac=d9187b1317760acc43896b4d0b43fed3bbcf6bf927aef49ad7e4b6fd46005537&w=740", name: "Polo", category: "T-Shirt", price: 20 },
    { imageURL: "https://img.freepik.com/free-photo/man-wearing-beige-shorts-close-up_53876-125260.jpg", name: "Men Short", category: "Short", price: 30 },
    { imageURL: "https://img.freepik.com/free-photo/denims_1303-4488.jpg?t=st=1716521170~exp=1716524770~hmac=ba7d76334a67175b56a3242a2e9024442e09bb59dde146afadf5ec4c65dc0785&w=360", name: "Jeans", category: "Pants", price: 50 },
    { imageURL: "https://img.freepik.com/free-photo/ice-coffee-with-whipped-cream_144627-3801.jpg?t=st=1716521260~exp=1716524860~hmac=f0105e3e1ee544e84103ccb321f8a0f6a82b88931e9937a725877137d34c7835&w=740", name: "Sneakers", category: "Shoes", price: 70 },
    { imageURL: "https://img.freepik.com/free-psd/mens-ringers-t-shirt-mockup-02_126278-116.jpg", name: "Shirt", category: "T-Shirt", price: 40 },
    { imageURL: "https://img.freepik.com/premium-photo/vibrant-hues-adorn-her-flowing-maxi-skirt-burst-colour-style_891936-2931.jpg?w=740", name: "Skirt", category: "Short", price: 25 },
    { imageURL: "https://img.freepik.com/free-photo/hand-holding-light-brown-beige-pants_23-2150756278.jpg", name: "Chinos", category: "Pants", price: 45 },
    { imageURL: "https://img.freepik.com/free-psd/cowboy-accessory-isolated_23-2151385183.jpg", name: "Boots", category: "Shoes", price: 80 },
];

const productsContainer = document.querySelector('.products');
const searchInput = document.getElementById('searchProduct');
const sortOrderSelect = document.getElementById('sortOrder');
const filterButtons = document.querySelectorAll('.filters button');

function displayProducts(productsArray) {
    productsContainer.innerHTML = "";
    productsArray.forEach(product => {
        const productElement = document.createElement('div');
        productElement.classList.add('product');
        productElement.innerHTML = `
            <img src="${product.imageURL}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>Category: ${product.category}</p>
            <p>Price: $${product.price}</p>
        `;
        productsContainer.appendChild(productElement);
    });
}

function filterProducts(category) {
    let filteredProducts = products;
    if (category !== 'all') {
        filteredProducts = products.filter(product => product.category === category);
    }
    filteredProducts = searchProducts(filteredProducts);
    filteredProducts = sortProducts(filteredProducts);
    displayProducts(filteredProducts);
}

function searchProducts(productsArray) {
    const searchText = searchInput.value.toLowerCase();
    return productsArray.filter(product => product.name.toLowerCase().includes(searchText));
}

function sortProducts(productsArray) {
    const sortOrder = sortOrderSelect.value;
    if (sortOrder === 'lowest') {
        return productsArray.sort((a, b) => a.price - b.price);
    } else if (sortOrder === 'highest') {
        return productsArray.sort((a, b) => b.price - a.price);
    }
    return productsArray;
}

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        filterProducts(button.dataset.category);
    });
});

searchInput.addEventListener('input', () => {
    filterProducts(document.querySelector('.filters button.active')?.dataset.category || 'all');
});

sortOrderSelect.addEventListener('change', () => {
    filterProducts(document.querySelector('.filters button.active')?.dataset.category || 'all');
});

displayProducts(products);
    </script>

    <!-- Script JS -->
    <script src="./script.js"></script>
    <?php include 'includes/footer.php'; ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce website</title>

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <section id="productdetails" class="section-p1">
        <div class="single-pro-image">
            <img src="productimages/img1.jpg" width="100%" id="MainImg" alt="">
            <div class="small-image-group">
                <div class="small-img-col">
                    <img src="productimages/img1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="productimages/img2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="productimages/img1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="productimages/img2.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home / Trucks</h6>
            <h4>Man Kipper Truck</h4>
            <h2>55,000.00 €</h2>
            <button class="normal">Contact Us</button>
            <h4>Product Details</h4>
            <span>The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. per sq. yd. fabric
                constructed from 100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort
                with each wear. Featuring a taped neck and shoulder, and a seamless double-needle collar, and available in a range
                of colors, it offers it all in the ultimate head-turning package.
            </span>
        </div>
    </section>

    <!-- Contact Us Modal -->
    <div id="contactModal" class="modal">
    
        <div class="modal-content">
            <h2>Contact Us</h2>
            <form id="contactForm">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" readonly>
                
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required>
                
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="country">Country</label>
                <input type="text" id="country" name="country" required>
                
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit" class="normal">Submit</button>
            </form>
        </div>
    </div>

    <style>
        #contactModal .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 50%;
            max-width: 500px;
        }

        #contactModal form {
            display: flex;
            flex-direction: column;
        }

        #contactModal label {
            margin-top: 10px;
        }

        #contactModal input, #contactModal textarea {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #contactModal button {
            margin-top: 20px;
            background-color: #a89b06;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

    <script>
        var contactModal = document.getElementById("contactModal");
        var contactButtons = document.querySelectorAll(".normal");
        var contactClose = contactModal.querySelector(".close");
        var productNameInput = document.getElementById("productName");

        contactButtons.forEach(button => {
            button.onclick = function () {
                var productName = this.closest('.single-pro-details').querySelector('h4').innerText;
                productNameInput.value = productName;
                contactModal.style.display = "block";
            }
        });

        contactClose.onclick = function () {
            contactModal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == contactModal) {
                contactModal.style.display = "none";
            }
        }
    </script>

    <!-- Modal for Image Gallery -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <div class="modal-content">
            <img class="modal-image" id="modalMainImg" src="productimages/img1.jpg" alt="">
            <div class="modal-arrows">
                <span class="prev">&#10094;</span>
                <span class="next">&#10095;</span>
            </div>
        </div>
    </div>

    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .modal-image {
            width: 100%;
            height: auto;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-arrows {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .prev,
        .next {
            cursor: pointer;
            color: #fff;
            font-size: 40px;
            padding: 16px;
            transition: 0.3s;
        }

        .prev:hover,
        .next:hover {
            color: #bbb;
        }
    </style>

    <script>
        var modal = document.getElementById("imageModal");
        var modalImg = document.getElementById("modalMainImg");
        var images = document.querySelectorAll(".single-pro-image img");
        var currentIndex = 0;

        images.forEach((img, index) => {
            img.onclick = function () {
                modal.style.display = "block";
                modalImg.src = this.src;
                currentIndex = index;
            }
        });

        var span = document.getElementsByClassName("close")[0];
        span.onclick = function () {
            modal.style.display = "none";
        }

        var prev = document.querySelector(".prev");
        var next = document.querySelector(".next");

        prev.onclick = function () {
            currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
            modalImg.src = images[currentIndex].src;
        }

        next.onclick = function () {
            currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
            modalImg.src = images[currentIndex].src;
        }
    </script>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
    <div class="product-slider">
        <div class="product">
            <img src="productimages/img1.jpg" alt="Product 1">
            <div class="product-info">
                <h4>Product Name 1</h4>
                <p class="price">$120.00 <span class="discount">$150.00</span></p>
                <button class="view-product">View Product</button>
            </div>
        </div>
        <div class="product">
            <img src="productimages/img1.jpg" alt="Product 2">
            <div class="product-info">
                <h4>Product Name 2</h4>
                <p class="price">$100.00 <span class="discount">$130.00</span></p>
                <button class="view-product">View Product</button>
            </div>
        </div>
        <div class="product">
            <img src="productimages/img1.jpg" alt="Product 3">
            <div class="product-info">
                <h4>Product Name 3</h4>
                <p class="price">$90.00 <span class="discount">$110.00</span></p>
                <button class="view-product">View Product</button>
            </div>
        </div>
        <div class="product">
            <img src="productimages/img1.jpg" alt="Product 4">
            <div class="product-info">
                <h4>Product Name 4</h4>
                <p class="price">$80.00 <span class="discount">$100.00</span></p>
                <button class="view-product">View Product</button>
            </div>
        </div>

        <div class="product">
            <img src="productimages/img1.jpg" alt="Product 4">
            <div class="product-info">
                <h4>Product Name 4</h4>
                <p class="price">$80.00 <span class="discount">$100.00</span></p>
                <button class="view-product">View Product</button>
            </div>
        </div>

        <div class="product">
            <img src="productimages/img1.jpg" alt="Product 4">
            <div class="product-info">
                <h4>Product Name 4</h4>
                <p class="price">$80.00 <span class="discount">$100.00</span></p>
                <button class="view-product">View Product</button>
            </div>
        </div>
    </div>

    <script>
        const products = document.querySelectorAll('.product');
        products.forEach(product => {
            product.addEventListener('mouseover', () => {
                product.querySelector('.view-product').style.display = 'block';
            });
            product.addEventListener('mouseout', () => {
                product.querySelector('.view-product').style.display = 'none';
            });
        });
    </script>

    <script>
        const slider = document.querySelector('.product-slider');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 3; //scroll-fast
            slider.scrollLeft = scrollLeft - walk;
        });
    </script>

    <style>
        .product-slider {
            display: flex;
            overflow-x: auto;
        }

        .product {
            flex: 0 0 25%;
            box-sizing: border-box;
            padding: 10px;
            position: relative;
        }

        .product img {
            width: 100%;
            display: block;
        }

        .product-info {
            text-align: center;
            padding: 10px 0;
        }

        .price {
            font-size: 18px;
            color: #333;
        }

        .discount {
            text-decoration: line-through;
            color: #888;
            margin-left: 10px;
        }

        .view-product {
            display: none;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            padding: 10px 20px;
            background-color: #a89b06;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
    </section>


    <!-- javascript script file code -->
    <script>
        var mainImg = document.getElementById("MainImg");
        var smallImg = document.getElementsByClassName("small-img");
        smallImg[0].onclick = function() {
            mainImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function () {
            mainImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function () {
            mainImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function () {
            mainImg.src = smallImg[3].src;
        }
    </script>

    <style>
        /* Single Product Page */

#productdetails {
    display: flex;
    margin-top: 20px;
}

#productdetails .single-pro-image{
    width: 40%;
    margin-right: 50px;
}

.small-image-group {
    display: flex;
    justify-content: space-between;
}

.small-img-col {
    flex-basis: 24%;
    cursor: pointer;
}

#productdetails .single-pro-details {
    width: 50%;
    padding-top: 30px;
}

#productdetails .single-pro-details h4 {
    padding: 40px 0 20px 0;
}

#productdetails .single-pro-details h2 {
    font-size: 26px;
}

#productdetails .single-pro-details select {
    display: block;
    padding: 5px 10px;
    margin-bottom: 10px;
}

#productdetails .single-pro-details input {
    width: 50px;
    height: 47px;
    padding-left: 10px;
    font-size: 16px;
    margin-right: 10px;
}

#productdetails .single-pro-details button {
    background-color: #a89b06;
    color: #fff;
}

#productdetails .single-pro-details input:focus {
    outline: none;
}

#productdetails .single-pro-details span {
    line-height: 25px;
}
.section-p1 {
    padding: 40px 80px;
}

.section-m1 {
    margin: 40px 0;
}

button.normal {
    font-size: 14px;
    font-weight: 600;
    padding: 15px 30px;
    color: #000;
    background-color: #fff;
    border-radius: 4px;
    cursor: pointer;
    border: none;
    outline: none;
    transition: 0.2s ease;
}

button.white {
    font-size: 13px;
    font-weight: 600;
    padding: 11px 18px;
    color: #fff;
    background-color: transparent;
    cursor: pointer;
    border: 1px solid #fff;
    outline: none;
    transition: 0.2s ease;
}
    </style>

    <!-- javascript script file link -->
    <script src="script.js"></script>
</body>

</html>
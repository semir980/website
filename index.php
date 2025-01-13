<?php include 'includes/header1.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antic Market</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/respoonsive.css">
</head>
<body>

<div class="background-section">
    <div class="title-container">
        <h1>Welcome to Antic Market</h1>
    </div>
</div>

<style>
    .background-section {
        position: relative;
        height: 100vh;
        background-image: url('assets/images/bg.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        display: flex;
        width: 100%;

        align-items: center;
        justify-content: center;
    }

    .title-container {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
    }

    .title-container h1 {
        color: white;
        font-size: 3em;
        text-align: center;
    }
</style>

<!-- Product Slider -->

<section class="product-slider-section">

    <div class="section-header">
        <h2>Our Products</h2>
        <a class="shop-now" href="shop1.php" style="text-decoration: none;">Shop Now</a>
    </div>

    

    <div class="product-slider">
        <div class="product-slide">
            <img src="productimages/img1.jpg" alt="Product 1">
            <div class="product-info">
                <h3>Product 1</h3>
                <p>$10.00</p>
            </div>
            <button class="view-product">View Product</button>
        </div>
        <div class="product-slide">
            <img src="productimages/img2.jpg" alt="Product 2">
            <div class="product-info">
                <h3>Product 2</h3>
                <p>$20.00</p>
            </div>
            <button class="view-product">View Product</button>
        </div>
        <div class="product-slide">
            <img src="productimages/img2.jpg" alt="Product 3">
            <div class="product-info">
                <h3>Product 3</h3>
                <p>$30.00</p>
            </div>
            <button class="view-product">View Product</button>
        </div>

        <div class="product-slide">
            <img src="productimages/img2.jpg" alt="Product 3">
            <div class="product-info">
                <h3>Product 3</h3>
                <p>$30.00</p>
            </div>
            <button class="view-product">View Product</button>
        </div>

        <div class="product-slide">
            <img src="productimages/img2.jpg" alt="Product 3">
            <div class="product-info">
                <h3>Product 3</h3>
                <p>$30.00</p>
            </div>
            <button class="view-product">View Product</button>
        </div>

        <div class="product-slide">
            <img src="productimages/img2.jpg" alt="Product 3">
            <div class="product-info">
                <h3>Product 3</h3>
                <p>$30.00</p>
            </div>
            <button class="view-product">View Product</button>
        </div>

        <div class="product-slide">
            <img src="productimages/img2.jpg" alt="Product 3">
            <div class="product-info">
                <h3>Product 3</h3>
                <p>$30.00</p>
            </div>
            <button class="view-product">View Product</button>
        </div>

        <div class="product-slide">
            <img src="productimages/img2.jpg" alt="Product 3">
            <div class="product-info">
                <h3>Product 3</h3>
                <p>$30.00</p>
            </div>
            <button class="view-product">View Product</button>
        </div>

        <div class="product-slide">
            <img src="productimages/img2.jpg" alt="Product 3">
            <div class="product-info">
                <h3>Product 3</h3>
                <p>$30.00</p>
            </div>
            <button class="view-product">View Product</button>
        </div>
    </div>
</section>

<style>
    .product-slider-section {
        padding: 20px;
        background-color: #f9f9f9;
    }

    .product-slider {
        display: flex;
        overflow-x: auto;
        gap: 10px;
        
    }

    .product-slide {
        flex: 0 0 auto;
        width: 200px;
        transition: transform 0.5s ease-in-out;
        position: relative;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #dfaa08;
        
    }

    .product-slide:hover {
        flex: 0 0 auto;
        width: 200px;
        transition: transform 0.5s ease-in-out;
        position: relative;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #dfaa08;
        transform: scale(1.1);
        
    }

    .product-slide img {
        width: 100%;
        display: block;
    }

    .product-info {
        text-align: center;
        padding: 10px;
    }

    .product-info h3 {
        margin: 10px 0;
    }

    .product-info p {
        margin: 5px 0;
    }

    .view-product {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        padding: 10px 20px;
        background-color: #ff6600;
        color: white;
        border: none;
        cursor: pointer;
        display: none;
    }

    .product-slide:hover .view-product {
        display: block;
    }

    .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h2 {
            margin: 0;
        }

        .shop-now {
            padding: 10px 20px;
            background-color: #ff6600;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
</style>
<script>
    const slider = document.querySelector('.product-slider');
    let isDown = false;
    let startX;
    let scrollLeft;

    function autoSlide() {
        slider.scrollLeft += 1;
        if (slider.scrollLeft >= slider.scrollWidth - slider.clientWidth) {
            slider.scrollLeft = 0;
        }
    }

    let slideInterval = setInterval(autoSlide, 20);

    slider.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });

    slider.addEventListener('mouseleave', () => {
        slideInterval = setInterval(autoSlide, 20);
    });
</script>

<!-- Product Slider Kraj -->

<!-- Services Section -->
<section class="services-section">
    <div class="section-header">
        <h2 class="section-title" style="text-align: center;">Our Services</h2>
    </div>
    <div class="services-container">
        <div class="service-card">
            <div class="service-icon">
                <img src="assets/icons/service1.png" alt="Service 1">
            </div>
            <div class="service-info">
                <h3>Service 1</h3>
                <p>We offer the best service 1 in the market.</p>
                <div class="count" data-target="1500">0</div>
            </div>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <img src="assets/icons/service2.png" alt="Service 2">
            </div>
            <div class="service-info">
                <h3>Service 2</h3>
                <p>We offer the best service 2 in the market.</p>
                <div class="count" data-target="3000">0</div>
            </div>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <img src="assets/icons/service3.png" alt="Service 3">
            </div>
            <div class="service-info">
                <h3>Service 3</h3>
                <p>We offer the best service 3 in the market.</p>
                <div class="count" data-target="4500">0</div>
            </div>
        </div>
    </div>
</section>

<style>
    .services-section {
        padding: 40px 20px;
        background-color: #f9f9f9;
        background-image: url('assets/images/contact-bg1.jpg');
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }

    .section-title {
        color: white;
        text-align: center;
    }

    .services-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 20px;
    }

    .service-card {
        background-color: white;
        opacity: 0.6;     
        border: 2px solid #eecf09;
        border-radius: 10px;
        padding: 20px;
        width: 30%;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .service-card:hover {
        transform: translateY(-10px);
    }

    .service-icon img {
        width: 50px;
        height: 50px;
    }

    .service-info h3 {
        margin: 10px 0;
    }

    .service-info p {
        margin: 10px 0;
    }

    .count {
        font-size: 2em;
        color: #ff6600;
        margin-top: 10px;
    }
</style>

<script>
    const counters = document.querySelectorAll('.count');
    const speed = 200;

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;

            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
</script>

<!-- About Us Section -->
<h1 style="text-align: center; font-size: 40px;">ABOUT US</h1>
<section class="about-us-section">
    <div class="about-us-container">
        <div class="about-us-image">
            <img src="assets/images/bg.jpg" alt="About Us">
        </div>
        <div class="about-us-content">
            <h2>About Us</h2>
            <p>We are dedicated to providing the best products and services in the market. Our team is committed to ensuring customer satisfaction and delivering quality.</p>
            <a href="#" class="learn-more-btn">Learn More</a>
        </div>
    </div>
</section>

<style>
    .about-us-section {
        padding: 40px 20px;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .about-us-container {
        display: flex;
        align-items: center;
        gap: 20px;
        max-width: 1200px;
        width: 100%;
    }

    .about-us-image img {
        width: 100%;
        max-width: 600px;
        border-radius: 10px;
    }

    .about-us-content {
        max-width: 600px;
    }

    .about-us-content h2 {
        margin-bottom: 20px;
    }

    .about-us-content p {
        margin-bottom: 20px;
    }

    .learn-more-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff6600;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out;
    }

    .learn-more-btn:hover {
        background-color: #e55d00;
    }
</style>

<script>
    document.querySelector('.learn-more-btn').addEventListener('mouseover', function() {
        this.style.transform = 'scale(1.1)';
    });

    document.querySelector('.learn-more-btn').addEventListener('mouseout', function() {
        this.style.transform = 'scale(1)';
    });
</script>

<!-- Contact Us Section -->
<section class="contact-us-section">
    <div class="contact-us-container">
        <h2>Contact Us</h2>
        <form class="contact-form">
            <div class="form-group">
                <input type="text" id="name" name="name" required>
                <label for="name">Name</label>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-group">
                <textarea id="message" name="message" rows="4" required></textarea>
                <label for="message">Message</label>
            </div>
            <div class="form-group">
                <h5 for="phone">Mobile Phone</h5>
            </div>
            <div class="form-group">
                <h5 for="email">Email</h5>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</section>

<style>
    .contact-us-section {
        padding: 40px 20px;
        background-color: #f9f9f9;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url('assets/images/brick-wall-texture.jpg');
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }

    .contact-us-container {
        max-width: 600px;
        width: 100%;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: rgba(255, 255, 255, 0.4);
    }

    .contact-us-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .contact-form .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 95%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        outline: none;
        transition: border-color 0.3s ease-in-out;
        background-color: rgba(255, 255, 255, 0.0);
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color: #ff6600;
    }

    .contact-form label {
        position: absolute;
        top: 10px;
        left: 10px;
        pointer-events: none;
        transition: all 0.3s ease-in-out;
    }

    .contact-form input:focus + label,
    .contact-form input:not(:placeholder-shown) + label,
    .contact-form textarea:focus + label,
    .contact-form textarea:not(:placeholder-shown) + label {
        top: -20px;
        left: 10px;
        font-size: 12px;
        color: #ff6600;
    }

    .submit-btn {
        width: 100%;
        padding: 10px;
        background-color: #ff6600;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .submit-btn:hover {
        background-color: #e55d00;
    }
</style>

<script>
    document.querySelector('.contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Message sent successfully!');
    });
</script>


<?php include 'includes/footer.php'; ?>
</body>
</html>
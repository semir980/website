<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Top Header</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css');
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .top-header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: auto;
            border-bottom: 1px solid #ccc;
            flex-wrap: wrap;
        }
        .contact-info {
            display: flex;
            flex-wrap: wrap;
        }
        .contact-info span {
            margin-right: 20px;
        }
        .lang-menu {
            width: 100px;
            text-align: right;
            font-weight: bold;
            position: relative;
        }
        .lang-menu .selected-lang {
            display: flex;
            justify-content: space-between;
            line-height: 2;
            cursor: pointer;
        }
        .lang-menu .selected-lang:before {
            content: '';
            display: inline-block;
            width: 32px;
            height: 32px;
            background-image: url(https://www.countryflags.io/us/flat/32.png);
            background-size: contain;
            background-repeat: no-repeat;
        }
        .lang-menu ul {
            margin: 0;
            padding: 0;
            display: none;
            background-color: #fff;
            border: 1px solid #f8f8f8;
            position: absolute;
            top: 45px;
            right: 0px;
            width: 125px;
            border-radius: 5px;
            box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
        }
        .lang-menu ul li {
            list-style: none;
            text-align: left;
            display: flex;
            justify-content: space-between;
        }
        .lang-menu ul li a {
            text-decoration: none;
            width: 125px;
            padding: 5px 10px;
            display: block;
        }
        .lang-menu ul li:hover {
            background-color: #f2f2f2;
        }
        .lang-menu ul li a:before {
            content: '';
            display: inline-block;
            width: 25px;
            height: 25px;
            vertical-align: middle;
            margin-right: 10px;
            background-size: contain;
            background-repeat: no-repeat;
        }
        .de:before {
            background-image: url(https://www.countryflags.io/de/flat/32.png);
        }
        .en:before {
            background-image: url(https://www.countryflags.io/us/flat/32.png);
        }
        .fr:before {
            background-image: url(https://www.countryflags.io/fr/flat/32.png);
        }
        .ar:before {
            background-image: url(https://www.countryflags.io/ae/flat/32.png);
        }
        .lang-menu:hover ul {
            display: block;
        }
        @media (max-width: 768px) {
            .top-header {
                flex-direction: column;
                align-items: flex-start;
            }
            .contact-info {
                margin-bottom: 10px;
            }
            .lang-menu {
                width: 100%;
                text-align: left;
            }
        }
        @media (max-width: 480px) {
            .contact-info span {
                display: block;
                margin-right: 0;
                margin-bottom: 5px;
            }
            .lang-menu {
                width: 100%;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="top-header">
        <div class="contact-info">
            <span class="phone">
                <i class='bx bx-phone' style="vertical-align: middle;"></i>
                +123 456 7890
            </span>
            <span class="email" style="margin-left: 20px;">
                <i class='bx bx-envelope' style="vertical-align: middle;"></i>
                info@example.com
            </span>
        </div>
        <div class="lang-menu">
            <div class="selected-lang">
                English
            </div>
            <ul>
                <li>
                    <a href="#" class="de">German</a>
                </li>
                <li>
                    <a href="" class="en">English</a>
                </li>
                <li>
                    <a href="" class="fr">French</a>
                </li>
                <li>
                    <a href="" class="ar">Arabic</a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        // JavaScript can be added here if needed for interactivity
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }
    .header {
        display: flex;
        align-items: center;
        justify-content: space-between; /* Space between elements */
        padding: 10px 20px;
        background-color: #333;
        color: white;
        border-bottom: 10px solid #efb805;
        position: fixed; /* Make the header fixed */
        top: 0; /* Position it at the top */
        width: 100%; /* Full width */
        z-index: 1000; /* Ensure it is above other elements */
    }
    .logo {
        width: 50px;
        transition: transform 0.3s ease;
    }
    .logo:hover {
        transform: rotate(360deg);
    }
    .nav-links {
        display: flex;
        gap: 20px;
        justify-content: center; /* Center the navigation links */
        flex-grow: 1; /* Allow nav-links to grow */
    }
    .nav-links a {
        color: white;
        text-decoration: none;
        font-size: 16px;
    }
    .nav-links a:hover {
        text-decoration: underline;
    }
    .actions {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .actions button {
        background: none;
        border: none;
        color: white;
        cursor: pointer;
        font-size: 16px;
    }
    .actions .search-box {
        display: none;
        position: absolute;
        right: 20px;
        top: 60px;
        background-color: white;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .actions .search-box input {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 200px;
    }
    .actions .login-dropdown {
        display: none;
        position: absolute;
        right: 20px;
        top: 60px;
        background-color: white;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .actions .login-dropdown form {
        display: flex;
        flex-direction: column;
    }
    .actions .login-dropdown form input {
        margin-bottom: 10px;
        padding: 5px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .loginbtn {
        background-color: #f6d103;
        color: white;
        padding: 5px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }

    .menu-icon {
        display: none;
        font-size: 24px;
        cursor: pointer;
    }
    @media (max-width: 768px) {
        .header {
            flex-direction: column;
            align-items: flex-start;
        }
        .nav-links {
            flex-direction: column;
            gap: 10px;
            width: 100%;
            text-align: center;
        }
        .actions {
            width: 100%;
            justify-content: space-between;
        }
        .actions .search-input {
            width: 100%;
            margin-bottom: 10px;
        }
    }
    @media (max-width: 480px) {
        .header {
            flex-direction: row-reverse;
            padding: 10px;
        }
        .nav-links {
            display: none;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
        }
        .nav-links.show {
            display: flex;
        }
        .nav-links a {
            font-size: 14px;
        }
        .actions .search-input {
            font-size: 14px;
        }
        .actions button {
            font-size: 14px;
        }
        .menu-icon {
            display: block;
        }
    }
</style>

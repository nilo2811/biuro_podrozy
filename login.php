<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>Daleki zachód</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
      main form {
    display: flex;
    flex-direction: column;
    max-width: 600px;
    margin: 20px auto; 
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

form label {
    margin-bottom: 8px;
}

form input,
form select,
form textarea {
    width: 95%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

form button {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

form button:hover {
    background-color: #45a049;
}
    </style>
</head>
<body onload="zmienTlo()">

    <header>
        <div class="logo">
          <img src="img/ecotropical-travels-unscreen.gif" id="logo" alt="baner"> 
        </div>
        <div id="gora">
            <h2><span id="fajnynapis">Biuro podróży "RAJ"</span></h2>
            
        </div>
        <input type="checkbox" id="navi-toggle" class="checkbox" />
        <label for="navi-toggle" class="button">
        <span class="icon">&nbsp;</span>
        </label>
        <div class="background">&nbsp;</div>
            <nav class="nav">
                <ul class="list">
                    <li class="item"> <a class="link" href="index.php">GŁÓWNA</a></li>
                    <li class="item"> <a class="link" href="oferty.php">OFERTY</a></li>
                    <li class="item"> <a class="link" href="galeria.php">GALERIA</a></li>
                    <li class="item"> <a class="link" href="kontakt.php">KONTAKT</a></li>
                </ul>
            </nav>
     </header>
    <main>
        <section id="home">
            <div id="info">
                <h2>Witaj w Biurze Podróży <span id="fajnynapis2">"RAJ"</span></h2>
                <p id="info_p">Podaj login i hasło, żeby dostać się do narzędzi developerskich</p>
                <form method="post">
                    <label for="username">Login:</label>
                    <input type="text" id="username" name="username" required><br>
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="password" required><br>
                    <input type="submit" name="login" value="Zaloguj">
                </form>
               <br>
            </div>
            <br>
            <br>
        </section>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = $_POST['password'];
                if ($username === "admin" && $password === "admin123") {
                    header("Location: develop.php");
                    exit();
                } else {
                    echo '<script>alert("Błąd uwierzytelniania. Spróbuj ponownie.");</script>';
                }
            }
        ?>
    </main>
    <section id="footer">
        <div class="footer container">
          <div class="social-icon">
            <div class="social-item">
              <a href="https://www.facebook.com/"><img src="https://img.icons8.com/ios-filled/50/facebook-new.png" alt="facebook-new"/></a>
            </div>
            <div class="social-item">
              <a href="https://www.instagram.com/"><img src="https://img.icons8.com/ios-filled/50/instagram-new--v1.png" alt="instagram-new--v1"/></a>
            </div>
            <div class="social-item">
              <a href="https://twitter.com/?lang=pl"><img src="https://img.icons8.com/ios-filled/50/twitter.png" alt="twitter"/></a>
            </div>
            <div class="social-item">
              <a href="https://www.youtube.com/"><img src="https://img.icons8.com/ios-filled/50/youtube-play.png" alt="youtube-play"/></a>
            </div>
          </div>
          <p id="foot">Copyright &copy; Kacper Wójcik</p>
          <p>LOKALNA DATA i CZAS: <span id="czas1"></span>, <span id="czas2"></span></p>
        </div>
      </section>
    
    <script src="javascript/main.js"></script>
    <script src="javascript/slider.js"></script>
    <script src="javascript/losowe.js"></script>
    <script src="javascript/time.js"></script>
    <script src="javascript/header.js"></script>
    </body>
    </html>
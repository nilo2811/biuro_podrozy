<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kacper Wójcik 4i"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>Daleki zachód</title>
    <style>
        main form {
    display: flex;
    flex-direction: column;
    max-width: 600px;
    margin: 20px auto; /* Odstęp od góry i dołu */
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
    width: 100%;
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
<body>
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
            <div class="banner">
                
            </div>
            <div id="info">
                <h2>Witaj w Biurze Podróży <span id="fajnynapis">"RAJ"</span></h2>
                <p id="info_p">Zaplanuj swoją wymarzoną podróż z nami. Oferujemy niezapomniane wakacje na Dalekim Wschodzie.</p>
                <p id="countdown"></p>
                <img src="img/biuro.png" id="biuro" alt="biuro"/><br>
               <br>
            </div>
        </section>
        <br>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "biuro_podrozy_raj";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}

$tableName = "biuro";
$result = $conn->query("DESCRIBE $tableName");
$fields = array();

while ($row = $result->fetch_assoc()) {
    $fields[] = $row['Field'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    if (isset($_POST['insert'])) {
        $values = array();

        foreach ($fields as $field) {
            if ($field != 'id') {
                if ($field == 'data') {
                    $values[$field] = date('Y-m-d', strtotime($_POST[$field]));
                } else {
                    $values[$field] = $_POST[$field];
                }
            }
        }

        $columns = implode(", ", array_keys($values));
        $placeholders = implode("', '", $values);

        $sql = "INSERT INTO $tableName (id, $columns) VALUES ('$id', '$placeholders')";

        if ($conn->query($sql) === TRUE) {
            echo "Rekord został dodany do bazy danych.";
        } else {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['select'])) {
        $sql = "SELECT * FROM $tableName";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr>";
            foreach ($fields as $field) {
                echo "<th>$field</th>";
            }
            echo "</tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($fields as $field) {
                    echo "<td>" . ($field == 'data' ? date('d-m-Y', strtotime($row[$field])) : $row[$field]) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Brak rekordów w bazie danych.";
        }
    } elseif (isset($_POST['update'])) {
        $setClause = "";

        foreach ($fields as $field) {
            if ($field != 'id') {
                if ($field == 'data') {
                    $setClause .= "$field = '" . date('Y-m-d', strtotime($_POST[$field])) . "', ";
                } else {
                    $setClause .= "$field = '" . $_POST[$field] . "', ";
                }
            }
        }

        $setClause = rtrim($setClause, ", ");

        $sql = "UPDATE $tableName SET $setClause WHERE id = '$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Rekord został zaktualizowany.";
        } else {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['delete'])) {
        $sql = "DELETE FROM $tableName WHERE id = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Rekord został usunięty.";
        } else {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
        <form action="" method="post">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required><br>
    
            <?php
            foreach ($fields as $field) {
                if ($field != 'id') {
                    echo "<label for='$field'>$field:</label>";
                    if ($field == 'data') {
                        echo "<input type='date' id='$field' name='$field' required><br>";
                    } else {
                        echo "<input type='text' id='$field' name='$field' required><br>";
                    }
                }
            }
            ?>
            <input type="submit" name="insert" value="Insert">
            <input type="submit" name="select" value="Select">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
        </form>
        <section id="oferty">
            <h2>Oferty</h2>
            <p>Przejrzyj nasze atrakcyjne oferty na wakacje na Dalekim Wschodzie.</p>
            <div id="slider">
                <div class="slide"><img src="img/1.png" alt="Slide 1"></div>
                <button onclick="nastepnySlajd()">Następny</button>
                <button onclick="poprzedniSlajd()">Poprzedni</button>
            </div>
        </section>
    
        <section id="galeria">
            <h2>Galeria</h2>
            <p>Zobacz, jak wyjątkowe są nasze podróże. Oto kilka zdjęć z naszych wycieczek na Daleki Wschód.</p>
            <div class="galeria">
                <img src="img/header_1.png" alt="zdjecie1" >
                <img src="img/header_2.png" alt="zdjecie1" >
            </div>
        </section>
    
    
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
    <script src="javascript/losowe.js"></script>
    <script src="javascript/time.js"></script>
    <script src="javascript/header.js"></script>
    </body>
    </html>
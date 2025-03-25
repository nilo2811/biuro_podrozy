<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>Daleki zachód</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
                <p id="info_p">Zaplanuj swoją wymarzoną podróż z nami. Oferujemy niezapomniane wakacje na Dalekim Wschodzie.</p>
                <p id="countdown"></p>
                <img src="img/biuro.png" id="biuro" alt="biuro"/><br>
               <br>
            </div>
            <br>
            <br>
        </section>
        <br>
        <br>
        <hr class="trans--grow hr1">
        <section id="galeria">
          <h2>Poznaj miejsca , które możesz zwidzić :)</h2>
          <div class="galeria">
              <div class="Chiny_tekst">
                  <h1>Chiny</h1>
                  <p>Chiny to kraj, który ma wiele do zaoferowania podróżnikom, którzy szukają niezapomnianych wrażeń i odkryć. Warto się udać do Chin, ponieważ:
                      Można poznać bogatą i różnorodną historię, kulturę i religię Chin, która sięga ponad 5000 lat. Można zwiedzać zabytki, muzea, świątynie, pałace i grobowce, które świadczą o dawnej potędze i pięknie chińskiej cywilizacji.</p><br>
                  <br>
                  <a href="oferty.html">Poznaj ofertę &hearts;</a>
              </div>
              
              <div class="Chiny_obraz">
                  <img src="img/chiny.png" id="zdjecie1" alt="zdjecie1" >
              </div>
              
          </div>
          <div class="galeria">
              <div class="Chiny_obraz">
                  <img src="img/header_3.png" id="zdjecie1" alt="zdjecie1" >
              </div>
              <div class="Chiny_tekst">
                  <h1>Japonia</h1>
                  <p>Japonia to kraj, który ma wiele do zaoferowania podróżnikom, którzy szukają niezapomnianych wrażeń i odkryć. Warto się udać do Japonii, ponieważ: Można poznać bogatą i różnorodną historię, kulturę i religię Japonii, która sięga ponad 5000 lat. Można zwiedzać zabytki, muzea, świątynie, pałace i grobowce, które świadczą o dawnej potędze i pięknie japońskiej cywilizacji.</p><br>
                  <br>
                  <a href="oferty.html">Poznaj ofertę &hearts;</a>
              </div>
              
              
          </div>
          <div class="galeria">
              <div class="Chiny_tekst">
                  <h1>Mongolia</h1>
                  <p>Mongolia to bardzo malowniczy kraj o fascynującej historii i dziedzictwie, stanowi niezwykłe miejsce dla podróżników szukających niezapomnianych przeżyć. Eksplorując Mongolię, można odkryć nie tylko dziką i urokliwą przyrodę, ale także bogactwo kultury i tradycji tego regionu. Zwiedzanie tradycyjnych jurty, podziwianie piękna stepów i spotkanie z gastarbeiterami, czyli mongolskimi pasterzami, to tylko niektóre z atrakcji, które czekają na podróżników.</p><br>
                  <br>
                  <a href="oferty.html">Poznaj ofertę &hearts;</a>
              </div>
              <div class="Chiny_obraz">
                  <img src="img//mongolia.png" id="zdjecie1" alt="zdjecie1" >
              </div>
              
          </div>
          <div class="galeria">
              <div class="Chiny_obraz">
                  <img src="img//singapur.png" id="zdjecie1" alt="zdjecie1" >
              </div>
              <div class="Chiny_tekst">
                  <h1>Singapur</h1>
                  <p>Singapur to fascynujące miejsce o bogatej historii i nowoczesnej kulturze, przyciąga podróżników, oferując niezapomniane wrażenia. Eksplorując Singapur, można odkryć unikalne połączenie tradycji i nowoczesności. Zwiedzanie olśniewających wieżowców, spacerowanie po zielonych ogrodach w przybrzeżnych parkach, czy też delektowanie się różnorodnymi smakami w kolorowych dzielnicach gastronomicznych to tylko kilka atrakcji, które czekają na podróżujących.</p><br>
                  <br>
                  <a href="oferty.html">Poznaj ofertę &hearts;</a>
              </div>
          </div>
      </section>
        <br>
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
    <script src="javascript/header.js"></script>
    </body>
    </html>
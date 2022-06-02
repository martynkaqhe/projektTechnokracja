<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css.css">
    <link href='https://fonts.googleapis.com/css?family=Ropa Sans' rel='stylesheet'>
    <title>Ember</title>
    <link rel="icon" href="logo.png" type="image/icon type">
 


</head>
<body id="body2">
   



<div class="container">
    <svg viewBox="0 0 500 500"
        preserveAspectRatio="xMinYMin meet"
        style="z-index:-2;">
         
        <path d="M0, 300 C150, 500 150,
            0 500, 200 L500, 00 L0, 0 Z"
            style="stroke: none;
            fill:rgba(109, 101, 169, 0.5);">
        </path>
    </svg>
    <svg viewBox="0 0 500 500"
        preserveAspectRatio="xMinYMin meet"
        style="z-index: -3;">
         
        <path d="M0, 150 C150, 200 350,
            0 500, 100 L500, 00 L0, 0 Z"
            style="stroke: none;
            fill:rgba(82, 74, 133, 0.903);">
        </path>
    </svg>
    <svg viewBox="0 0 500 500"
        preserveAspectRatio="xMinYMin meet"
        style="z-index: -3;">
         
        <path d="M0, 700 C150, 500 750,
            0 500, 600 L500, 00 L0, 0 Z"
            style="stroke: none;
            fill:rgba(82, 74, 133, 0.2);">
        </path>
    </svg>
   
    <header>
        <a href="index.php"><img id="logo"  src="logo.png" alt="logo"></a>
        <a id="podstrona" href="specjalisci.php">Specjaliści</a>
        <a id="podstrona" href="str.html">Usługi</a>
        <a id="log-in" href="logowanie.php">Zaloguj sie</a>
    </header>
    <div id="main">
    
    <form id="form2" method="post">     
            <select id="formElement" name="specjalizacja">
                <option value="0">specjalizacja </option>
                <option value="Kosmetyczka">Kosmetyczka</option>
                <option value="Mechanik">Mechanik</option>
                <option value="Reklama">Reklama</option>
            </select>
            <select id="formElement"  name="miasto">
                <option value="0">miasto</option>
                <option value="Kosmetyczka">Gdańsk</option>      
                <option value="Mechanik">Gdynia</option>
                <option value="Reklama">Sopot</option>
            </select>
            <input id="formElement"  type="submit" value="Szukaj">

            <?php
                require('conn.php');
                require('search.php');
            ?>
    </form>

        <div id="ogloszenie">
            <div id="zdjecie">
                <img id="zdjOgloszenie" src="IMG/marketing.jpeg">

            </div>
            <div id="dane">
                <h3>Mariusz Pudzianowski</h3>
                <div id="info">
                    Rocket@Fuel.com<br>
                    +48 600 100 100<br>
                    ul. Siłowniana 21/15, Gdańsk 80-337
                    <br><br>Pon-pt 12:00-18:00
                </div>
            </div>
            <div id="omnie">
                <h3>O mnie</h3>
                <div id="info2">
                    
                    Najsilniejszy człowiek na świecie, spec od marketingu, zawodnik MMA, spedytor.

                </div>
            </div>


        </div>
        <div id="ogloszenie">
            <div id="zdjecie">
                <img id="zdjOgloszenie" src="IMG/marketing.jpeg">

            </div>
            <div id="dane">
                <h3>Adam Małysz</h3>
                <div id="info">
                    Adam@Skokmajster.com<br>
                    +48 102 102 102<br>
                    ul. Skoczniowa 10/2, Gdańsk 80-997
                    <br><br>Pon-pt 7:00-19:00
                </div>
            </div>
            <div id="omnie">
                <h3>O mnie</h3>
                <div id="info2">
                    
                    Emerytowany skoczek narciarski, kierowca rajdowy, członek polskiego związku narciarskiego.

                </div>
            </div>


        </div>
        <div id="ogloszenie">
            <div id="zdjecie">
                <img id="zdjOgloszenie" src="IMG/marketing.jpeg">

            </div>
            <div id="dane">
                <h3>Robert Kubica</h3>
                <div id="info">
                    Ostatni@NaMecie.com<br>
                    +48 412 105 997<br>
                    ul. Bolidowa 13/3, Gdańsk 80-556
                    <br><br>Pon-pt 9:00-19:00
                </div>
            </div>
            <div id="omnie">
                <h3>O mnie</h3>
                <div id="info2">
                    
                    Najszybszy człowiek na świecie, kierowca F1, początkujący marketer.

                </div>
            </div>


        </div>
        
        <div id="ogloszenie">
            <div id="zdjecie">
                <img id="zdjOgloszenie" src="IMG/marketing.jpeg">

            </div>
            <div id="dane">
                <h3>Mikołaj Kopernik</h3> 
                <div id="info">
                    MKop@rnik.com<br>
                    +48 733 104 296<br> 
                    ul. Astronomiczna 9/6, Gdańsk 80-592 
                    <br><br>Pon-pt 13:37-21:37
                </div>
            </div>
            <div id="omnie">
                <h3>O mnie</h3>
                <div id="info2">
                    
                    Znany polski astronom, coś niecoś potrafi w marketingu.

                </div>
            </div>


        </div>
        <div id="ogloszenie">
            <div id="zdjecie">
                <img id="zdjOgloszenie" src="IMG/marketing.jpeg">

            </div>
            <div id="dane">
                <h3>Kamil Ślimak</h3>
                <div id="info">
                    Kamil@Ślimak<br>
                    +48 733 199 420<br>
                    ul. Kamieniarska 3/9, Gdańsk 80-632 
                    <br><br>Pon-sob 7:00-21:00
                </div>
            </div>
            <div id="omnie">
                <h3>O mnie</h3>
                <div id="info2">
                    
                    Jak przeczytasz jego imię i nazwisko od tyłu to będzie takie samo, pracuje w marketingu.

                </div>
            </div>


        </div>

        </div>
        <footer id="footer2">
           
            <div id="kontakt">
            <h4>KONTAKT</h4>
            mail@mail.com <br>
            +48 123 321 213
         </div>
         
         <div id="media">
             <h4>MEDIA</h4>
             facebook &nbsp;
             instagram
          </div>
          <div id="media">
             <h4>REGULAMIN</h4>
             regulamin
          </div>
        </footer> 
    </div>
 
    
</div>



   
</body>
</html>
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
                <img id="zdjOgloszenie" src="IMG/mechanik.jpg">

            </div>
            <div id="dane">
                <h3>Robert Lewandowski</h3>
                <div id="info">
                    lewandowski@orzelpolski.com<br>
                    +48 123 456 789<br>
                    ul. Niemiecka 34/1, Gdańsk 80-123
                    <br><br>Pon-pt 8:00-18:00
                </div>
            </div>
            <div id="omnie">
                <h3>O mnie</h3>
                <div id="info2">
                    
                    Mechanik specjalizujący się w naprawie niemieckich samochodów.

                </div>
            </div>


        </div>
        <div id="ogloszenie">
            <div id="zdjecie">
                <img id="zdjOgloszenie" src="IMG/mechanik.jpg">

            </div>
            <div id="dane">
                <h3>Tomasz Karolak</h3>
                <div id="info">
                    TomaszKar@lak.com<br>
                    +48 123 420 961<br>
                    ul. Cicha 4/16, Gdańsk 80-321
                    <br><br>Pon-pt 7:00-19:00
                </div>
            </div>
            <div id="omnie">
                <h3>O mnie</h3>
                <div id="info2">
                    
                    Mechanik specjalizujący się w narzekaniu na żonę.

                </div>
            </div>


        </div>
        <div id="ogloszenie">
            <div id="zdjecie">
                <img id="zdjOgloszenie" src="IMG/mechanik.jpg">

            </div>
            <div id="dane">
                <h3>Borys Przybylski</h3>
                <div id="info">
                    Bedo@es.com<br>
                    +48 133 721 370<br>
                    ul. Gangowska 21/15, Gdańsk 80-421
                    <br><br>Pon-pt 9:00-19:00
                </div>
            </div>
            <div id="omnie">
                <h3>O mnie</h3>
                <div id="info2">
                    
                    Mechanik z wieloletnim doświadczeniem. Nie ma auta, którego nie naprawi.

                </div>
            </div>


        </div>
        
        <div id="ogloszenie">
            <div id="zdjecie">
                <img id="zdjOgloszenie" src="IMG/mechanik.jpg">

            </div>
            <div id="dane">
                <h3>Krzysztof Piątek</h3> 
                <div id="info">
                    piopio@pio.com<br>
                    +48 733 104 296<br> 
                    ul. Milanowska 12/7, Gdańsk 80-123 
                    <br><br>Pon-pt 13:37-21:37
                </div>
            </div>
            <div id="omnie">
                <h3>O mnie</h3>
                <div id="info2">
                    
                    Mechanik specjalizujący się w naprawach włoskich samochodów.

                </div>
            </div>


        </div>
        <div id="ogloszenie">
            <div id="zdjecie">
                <img id="zdjOgloszenie" src="IMG/mechanik.jpg">

            </div>
            <div id="dane">
                <h3>Arkadiusz Milik</h3>
                <div id="info">
                    amilik@yahoo.com<br>
                    +48 965 433 751<br>
                    ul. Neapolitańska 3/9, Gdańsk 80-123 
                    <br><br>Pon-sob 7:00-21:00
                </div>
            </div>
            <div id="omnie">
                <h3>O mnie</h3>
                <div id="info2">
                    
                    Mechanik zajmujący się tuningiem samochodów marki Fiat.

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
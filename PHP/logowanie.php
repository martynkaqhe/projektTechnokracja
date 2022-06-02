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
        <a id="log-in" href="logowanie.html">Zaloguj sie</a>
    </header>
    <div id="main">
     
        <?php
            require_once('conn.php');
            require_once('login.php');
        ?>

        <div id="logowanie">
		<h2>Logowanie</h2>
			<form>
				<div id="log" method="post">
					<input name="email" id="inputlog" type="text" placeholder="E-mail"><br>
					<input  name="password" id="inputlog" type="password" placeholder="Haslo">
					<input name="zaloguj" id="submitlog" type="submit" value="Zaloguj się">
				</div>
			</form>

        </div>

        <?php
                require_once('conn.php');
                require_once('registration.php');
        ?>
        <div id="rejestracja">
		<h2>Rejestracja</h2>
           <form>
				<div id="log" method="post">
					<input name="username" id="inputlog" type="text" placeholder="Imie"><br>
					<input name="surname" id="inputlog" type="text" placeholder="Nazwisko"><br>
					<input name="email" id="inputlog" type="text" placeholder="E-mail"><br>
					<input name="phone" id="inputlog" type="text" placeholder="Numer telefonu"><br>
					<input  name="password" id="inputlog" type="password" placeholder="Haslo">
					<input  name="password2" id="inputlog" type="password" placeholder="Powtórz haslo">
					<input name="zarejestruj" id="submitlog" type="submit" value="Zarejestruj się">
				</div>
			</form>


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
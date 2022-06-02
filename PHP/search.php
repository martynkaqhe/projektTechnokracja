<?php
    error_reporting(E_ERROR | E_PARSE);
        switch($_POST['specjalizacja']){
            case 'Kosmetyczka':
                header("Location: kosmetyczka.php");
            break;
            case 'Mechanik':
                header("Location: mechanik.php");
            break;
            case 'Reklama':
                header("Location: reklama.php");
            break;
            default:
        }
?>
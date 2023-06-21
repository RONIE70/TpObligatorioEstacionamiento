<?php   
    
    include_once ("AccesoDatos.php");

    function logout(){

    if ($_SESSION['superior'])
    {
    	session_destroy();
    	session_unset();
    }
}
    
    //header("location: index.php");

?>
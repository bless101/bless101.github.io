<?php
session_start();
if(isset($_SESSION['id_mem'])) 
{
    require_once('includes/bdd.php');
    
    $req = $bdd->prepare('DELETE FROM membre WHERE MEM_ID = ?');
    $req->execute(array($_SESSION['id_mem']));
    
	
	header('Location: join.php');
	session_destroy ();
}
?>
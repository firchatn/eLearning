<?php
session_start();
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("appel")){
			$test=false;
			echo "succés de connexion<br/>";
			$u=$_POST['email'];
			$p=$_POST['password'];
		
			if($resultat=mysql_query("select * from teacher;")){
				while($ligne=mysql_fetch_row($resultat)){
					if ($u==$ligne[4] && $p==$ligne[3]){
						$test = true;
						echo " $u welcome";
						
						$_SESSION['user'] = $ligne[0]. ""; ;
					}
				}
				if (! $test){
					echo "clients pas trover ! ";
			}}	
						
}
if ($test==true){
	header("Location: profilteacher.php", true, 301);
}
}
?>
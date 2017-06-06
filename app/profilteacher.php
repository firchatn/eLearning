<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
body{padding-top:30px;}

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}



#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
h3 {
	color : white;
	background-color : pink;
	text-align : 20px;
	border : solid;
	border-color : pink;
	border-radius : 25px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ffffcc;
	margin-top:-30px;	
}

li {
    float: left;
}

li a {
    display: block;
    color: #ff6699;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: white;
}
</style>
</head>
<body>
<div id="list" style="text-align: left">
<ul>
	<li><a href="profilteacher.php">Profil</a></li>
	<li><a href="encadrement.html">Encadrement</a></li>
	<li><a href="publier.html">Publier document</a></li>
	<li><a href="listformation.php">List etudiant</a></li>
	<li><a href="index.php">Deconnection</a></li>
</ul>
</div>
<?php
					session_start(); 					
					if($id=mysql_connect('localhost','root','')){
					if($id_db=mysql_select_db('appel')){
					$v = $_SESSION['user'];
					if($result=mysql_query("SELECT * from teacher where id = '$v';")){
					
					$data1=mysql_fetch_assoc($result);}
										
					}
					}

echo "<div class='container'>
<form action= 'editprofil.php?id=$v' method='post'>
    <div class='row'>
        <div class='col-xs-12 col-sm-6 col-md-6'>
            <div class='well well-sm'>
                <div class='row'>
                    <div class='col-sm-6 col-md-4'>
                        <img src='img/img1.png' alt='' class='img-rounded img-responsive' />
                    </div>
                    <div class='col-sm-6 col-md-8'>
                        <h4>
                           $data1[name] </h4>
                        <small><cite title='San Francisco, USA'>$data1[city]<i class='glyphicon glyphicon-map-marker'>
                        </i></cite></small>
                        <p>
                            <i class='glyphicon glyphicon-envelope'></i>$data1[email]
                            <br />
                            
                            <i class='glyphicon glyphicon-gift'></i>$data1[tel]</p>
                        <!-- Split button -->
                        <div class='btn-group'>
                            <button type='submit' class='btn btn-primary'>
                                modifier</button>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</form>
</div>";
echo "<div style = 'margin-left:1000px; margin-top:-150px;'>
   <img src='img/img2.png' alt='' class='img-rounded img-responsive' />
   </div>";

/*echo "<h3>Formation</h3>";

			if($resultat=mysql_query("select * from course where idstudent= $v;")){
			echo "<center> <table  id='customers'>";
				echo "<tr><td>num inscri</td><td>Formation</td><tr>";
				
				
				while($ligne=mysql_fetch_row($resultat)){
					$id=$ligne[0];
					$idteacher=$ligne[1];
					$idstudent=$ligne[2];
					$idformation=$ligne[4];
					if($result=mysql_query("SELECT * from teacher where id = $idteacher;")){
					$data=  mysql_fetch_array($result);}
					if($result2=mysql_query("SELECT * from student where id = '$idstudent';")){
					$data2=  mysql_fetch_array($result2);}
					
				
				
					echo "<tr><td>$id</td><td>$idformation</td><tr>";
			
		}
			}
		echo "</table> </center>";

*/



					
				
?>		
</body>
</html>

<?php

//header('Content-type:application/json');



if (isset($_GET['databasename'])){
 
    
    $databasename = $_GET['databasename'];
    
   
 try {
    $pdo=new PDO("mysql:dbname=stuxnet_doppler;host=localhost",'stuxnet_doppler','tabasco');


        $statement=$pdo->prepare("SELECT * FROM ".$databasename);
    $statement->execute();
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);

    $json=json_encode($results);

    echo $json;
}
catch (PDOException $e){
    echo "Problem : ". $e->getMessage();
}
}

?>
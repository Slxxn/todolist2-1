
<br><br>
<h1>détail</h1>

<?php

if (isset($_GET["id"])){

    $rqActu = $mysqli->query("SELECT * FROM `actu` WHERE id = '".$_GET['id']."' ");
    //var_dump($rqActu);
  
    if ($rqActu->num_rows>0) {

      $row = $rqActu->fetch_assoc();  

        ?>
        <h2> <?php echo $row["title"] ;  ?>  </h2>
        <h5> <?php echo $row["description"] ;  ?>  </h5>
        <?php
    
    } else {
        
        echo 'Actu introuvable !' ;
        
    }
    


}else{

    echo "nok" ;

}



?>

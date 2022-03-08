<br><br>

<?php

  $resultQueryActu = $mysqli-> query ("SELECT * FROM `actu` ORDER BY `id` DESC LIMIT 0,5");

  //var_dump($resultQueryActu);


  if ($resultQueryActu-> num_rows >0 ){
    foreach($resultQueryActu as $rowActu ) {

    
      ?>
        <p>
          <span class="titre substr">  <?php echo $rowActu["title"]  ?> </span>         
          <a  href="<?php echo $dir_ws."index.php?mod=detail&id=".$rowActu["id"] ?>" >Détail</a>
        </p>
      <?php 
    }
  }else{

    ?>
    Pas d'actu 
    <?php


  }

 




?>
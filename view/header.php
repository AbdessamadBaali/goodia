<header>  
  <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

      <div id="crt" >
          <img src="images/test.png" alt="Goodia"><br>
      </div>
      <nav>
          <ul>
            <?php
            $accueil = "<li><input type='submit' name='Accueil' value='Accueil'> </li>";
            $Contact_for = "<li><input type='submit' name='Contact_for' value='Contact des Fourniseurs'> </li>";
            $Ajouter_mat = "<li><input type='submit' name='Ajouter_mat' value='Ajouter un matériel'> </li>";
              if(isset($_POST['Accueil'])){

                echo $Contact_for ;
                echo $Ajouter_mat ;

              } elseif(isset($_POST['Contact_for']))
              {
                echo $accueil ;
                echo $Ajouter_mat ;

              } else {
                echo $accueil ;
                echo $Contact_for ;
              }

            ?>
          </ul>
      </nav>
  </form>
</header>
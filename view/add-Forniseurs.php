  
    <div id="divlb" class="my-5">    
      <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">      
          <h2>Ajouter Fournisseurs</h2>

          <label for="fname" class="change">Nom :</label>
          <input type="text" class="mod" name="name" placeholder="Nom" >
          <label for="fname"  class="change">Adresse :</label>
          <input type="text" class="mod" name="adress" placeholder="Adresse" >
          <!--Qantité-->
          <label for="fname">Tel :</label>
          <input type="text" class="model" name="phone" placeholder="Tel(+212)">
          <br>
            <input type="submit" value="Ajouter" name="btn_add_forns"class="button">
        </form>
    </div>

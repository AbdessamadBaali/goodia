      
    <div id="divlb" class="my-5">    
      <form class="from2" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

          <h2>Ajouter du matériel</h2>
          <!--Type-->
          <label for="list-mat">Type :</label>
          <select id="list-mat" name="type_mat" onclick="">
          </select>

          <label for="fname" class="change">Mark :</label>
          <input type="text"  name="Mark" placeholder="Mark" >

          <label for="fname"  class="change">References :</label>
          <input type="text"  name="Ref" placeholder="References" >
          <!--Qantité-->
          <label for="fname">Quantité :</label>
          <input type="number"  name="Qte" placeholder="Quantité">

          <!--Prix d'achat-->
          <label for="fname">Prix d'achat :</label>
          <input type="number"  name="Prix_achat" placeholder="Prix d'achat">

          <!--Prix de vente-->
          <label for="fname">Prix de vente :</label>
          <input type="number"  name="Prix_vent" placeholder="Prix de vente">

          <!--Description-->
          <label for="fname">Description :</label>
          <textarea name="desc"  cols="30" rows="10"></textarea>

          
          <br>
            <input type="submit" value="Ajouter" name="btn_add_mat" class="button">
        </form>
    </div>

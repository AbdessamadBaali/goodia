<div class="container">
    <div class="hist p-4">
      <h1 class="text-center text-capitalize"> List des produits </h1>
    </div>

  <div id="tous">
      <!--materiel-->
      <form class="row" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

          <label for="list-mat" class="py-2 col-12">Matériel</label>          
          <select id="list-mat" name="filter_type" class="mp col-8">  
          </select>
    </form>
    </div>
    
      <table class="table table-striped mt-5">
        <thead class="thead-dark">
          <tr class='text-center'>
            <th scope="col">N°</th>
            <th scope="col">Produits</th>
            <th scope="col">Mark</th>
            <th scope="col">Quantité</th>
            <th scope="col">Description</th>
            <th  scope="col" col="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?=$table_row?>
        </tbody>
      </table>
</div>
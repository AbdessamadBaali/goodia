<div class="container">
<div class="hist p-4">
      <h1 class="text-center text-capitalize"> List des Fourniseurs </h1>
    </div>

  <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <div class="m-5">
      <input Type="submit" name="Add_for" class="btn btn-outline-dark border" value="Ajouter">
    </div>
  </form>

    
  <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nom</th>
          <th scope="col">Adresse</th>
          <th scope="col"> Tel</th>
          <th scope="col"> Action</th>
        </tr>
      </thead>
      <tbody>
        <?=$table_row_f?>
      </tbody>
  </table>

</div>
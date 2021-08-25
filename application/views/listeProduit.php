<div class="col-md-12">

</div>
<!-- /.row -->
<div class="row">
<div class="col-md-12">
<table class="table">
  <table class="table table-hover">
              <thead>
                  <tr>
                      <th><span class="col">Catégorie</span></th>
                      <th><span class="col">Code Produit</span></th>
                      <th><span class="col">Prix Unitaire</span></th>
                      <th><span class="col">Designation</span></th>
                  </tr>
              </thead>
              <tbody>
                  <?php for ($i=0; $i < count($Produit); $i++) {  ?>
                    <tr>
                        <td><?php echo $Produit[$i]['idcategorie']['designation']; ?> </td>
                        <td><?php echo $Produit[$i]['codeProduit']; ?> </td>
                        <td><?php echo $Produit[$i]['prixUnitaire']; ?> </td>
                        <td><?php echo $Produit[$i]['designation']; ?> </td>
                    </tr>
                  <?php } ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total : </td>
                  </tr>
              </tbody>
      </table>
</table>
</div>
</div>

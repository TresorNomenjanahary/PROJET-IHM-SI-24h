   <div class="row">
          <div class="col-md-12">
            <table class="table">
              <table class="table">
                          <thead>
                              <tr>
                                  <th><span class="nobr">Categorie</span></th>
                                  <th><span class="nobr">Prix Unitaire</span></th>
                                  <th><span class="nobr">Quantité</span></th>
                                  <th><span class="nobr">Code</span></th>
                                  <th><span class="nobr">Designation</span></th>
                                  <th><span class="nobr"></span></th>
                                  <th><span class="nobr"></span></th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php for ($i=0; $i < count($liste_produit); $i++) {  ?>
                                <tr>
                                    <td><?php echo $liste_produit[$i]['idCategorie']; ?> </td>
                                    <td><?php echo $liste_produit[$i]['prixUnitaire']; ?> </td>
                                    <td><?php echo $liste_produit[$i]['quantite']; ?> </td>
                                    <td><?php echo $liste_produit[$i]['codeProduit']; ?> </td>
                                    <td><?php echo $liste_produit[$i]['designation']; ?> </td>
                                    <td>
                                      <a class="btn btn-info btn-sm" href="Fonctionnalite/Update(<?php echo $liste_produit[$i]['idProduit'];?>)">
                                      <i class="fas fa-pencil-alt"></i>
                                      Edit</a>
                                    </td>
                                    <td>
                                       <a class="btn btn-danger btn-sm" href="Fonctionnalite/Supprimer_Produit(<?php echo $liste_produit[$i]['idProduit'];?>)">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                        </a>
                                    </td>
                                </tr>
                              <?php } ?>
                          </tbody>
                  </table>
            </table>
          </div>
        </div>
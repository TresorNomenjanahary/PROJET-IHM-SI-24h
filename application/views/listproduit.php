
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Categorie
                          </th>
                          <th>
                            Code Produit
                          </th>
                          <th>
                            Prix Unitaire
                          </th>
                          <th>
                            Designation
                          </th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php for ($i=0; $i < count($liste_produit) ; $i++) { ?>
                          <td>
                            <?php echo $liste_categorie[$i]['designation']; ?>
                          </td>
                          <td>
                            <?php echo $liste_produit[$i]['codeProduit']; ?>
                          </td>
                          <td>
                             <?php echo $liste_produit[$i]['prixUnitaire']; ?>
                          </td>
                          <td>
                             <?php echo $liste_produit[$i]['designation']; ?>
                          </td>
                          <td><a href="Fonctionnalite/Modifier/<?php echo $liste_produit[$i]['idProduit']?>"  class="btn btn-primary mr-2">Modifier</a></td>
                          <td><a href="Fonctionnalite/Supprimer_Produit/<?php echo $liste_produit[$i]['idProduit']?>"  class="btn btn-primary mr-2">Supprimer</a></td>
                           <?php } ?>
                        </tr>

                      </tbody>
                    </table>
                    
                  </div>
                  <p><a href="Fonctionnalite/Ajouter"  class="btn btn-light">Ajouter</a></p>
                </div>
              </div>
            </div>
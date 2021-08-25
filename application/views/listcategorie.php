<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Striped Table</h4>
                  <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            idCategorie
                          </th>
                          <th>
                            designation
                          </th>
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
                           <?php } ?>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
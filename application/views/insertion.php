
          <div class="col-md-12">

            <form method="post" action="Inserer_Produit">
              <p> <select name="categorie">
                    <?php for ($i=0; $i < count($liste_categorie) ; $i++) { ?>
                     <option value="<?php echo $liste_categorie[$i]['idCategorie']; ?>"><?php echo $liste_categorie[$i]['designation']; ?></option>                
                    <?php } ?>
                  </select></p>
                   <p>Code produit : <input type="number" name="code"></p>
                   <p>Prix Unitaire :<input type="number" name="prix"></p>
                   <p>Quantite : <input type="number" name="quantite"></p>
                   <p>Designation : <input type="text" name="designation"></p>
                <p><input type="submit" class="btn" value="Valider"></p> 
            </form>
          </div>
     
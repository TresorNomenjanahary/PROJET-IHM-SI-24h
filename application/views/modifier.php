<div class="col-md-12">

            <form method="post" action="Modifier_Produit">
              <p> <select name="categorie">
                    <?php for ($i=0; $i < count($liste_categorie) ; $i++) { ?>
                     <option value="<?php echo $liste_categorie[$i]['idCategorie']; ?>"><?php echo $liste_categorie[$i]['designation']; ?></option>                
                    <?php } ?>
                  </select></p>
                   <p><input type="number" name="code"></p>
                   <p><input type="number" name="prix"></p>
                   <p><input type="number" name="quantite"></p>
                   <p><input type="text" name="designation"></p>
                <p><input type="submit" class="btn" value="Valider"></p> 
            </form>
          </div>
     
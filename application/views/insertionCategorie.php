
          <div class="col-md-12">

            <form method="post" action="Inserer_Categorie">
              <p> 
                    <?php for ($i=0; $i < count($liste_categorie) ; $i++) { ?>
                    <?php echo $liste_categorie[$i]['designation']; ?>
                                    
                    <?php } ?>
                  
                  </p>
                   <p>Designation categorie: <input type="text" name="designation"></p>
                <p><input type="submit" class="btn" value="Valider"></p> 
            </form>

          </div>
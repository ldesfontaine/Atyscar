
    <div class="modalEditClient" id="modalEditClient" class="modal" autofocus>
        <div class="modal-head-edit">
            <h2 class="titleModal">Informations du client</h2>
            <button class="closeModal" onclick="showHideModalEdit()" title="Fermer la fenêtre"><span class="material-symbols-outlined">close</span></button>
        </div>
        <div class="modal-body-edit">
            <form action="editClient.php" method="POST">
                <div class="modal-body-left-edit"  id="infoClient">
                    <input type="hidden" name="numCEdit" id="numCEdit" value="NumC">
                    <div>
                        <label for="nom">Nom</label>
                        <input type="text" name="nomEdit" id="nomEdit" value="Nom" >
                    </div>

                    <div>
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenomEdit" id="prenomEdit" value="Prénom" >
                    </div>
                    <div>
                        <label for="dateNaissance">Date de naissance</label>
                        <input type="date" name="dateNaissanceEdit" id="dateNaissanceEdit" value="Date de naissance" >
                    </div>
                    <div>
                        <label for="lieuNaissance">Lieu de naissance</label>
                        <input type="text" name="lieuNaissanceEdit" id="lieuNaissanceEdit" value="Lieu de naissance" >
                    </div>
                    <div>
                        <label for="nationalite">Nationalité</label>
                        <input type="text" name="nationaliteEdit" id="nationaliteEdit" value="Nationalité" >
                    </div>
                    <div>
                        <label for="ville">Ville</label>
                        <input type="text" name="villeEdit" id="villeEdit" value="Numéro de permis" >
                    </div>
                    <div>
                        <label for="rue">Rue</label>
                        <input type="text" name="rueEdit" id="rueEdit" value="Rue" >
                    </div>
                    <div>
                        <label for="codePostal">Code postal</label>
                        <input type="text" name="codePostalEdit" id="codePostalEdit" value="Code postal" >
                    </div>

                    <div>
                        <label for="telephone">Téléphone</label>
                        <input type="text" name="telephoneEdit" id="telephoneEdit" value="Téléphone" >
                    </div>
                </div>

                
                <div id="passport">
                    <div>
                        <label for="numeroPassport">Numéro de passport</label>
                        <input type="text" name="numeroPassportEdit" id="numeroPassportEdit" value="Numéro de passport" >
                    </div>
                    <div>
                        <label for="dateDelivrancePassport">Date de délivrance du passport</label>
                        <input type="date" name="dateDelivrancePassportEdit" id="dateDelivrancePassportEdit" value="Date de délivrance du passport" >
                    </div>
                    <div>
                        <label for="lieuDelivrancePassport">Lieu de délivrance du passport</label>
                        <input type="text" name="lieuDelivrancePassportEdit" id="lieuDelivrancePassportEdit" value="Lieu de délivrance du passport" >
                    </div>
                    <div>
                        <label for="paysDelivrancePassport">Pays de délivrance du passport</label>
                        <input type="text" name="paysDelivrancePassportEdit" id="paysDelivrancePassportEdit" value="Pays de délivrance du passport" >
                    </div>


                </div>

                <div id="permis">
                    <div>
                        <label for="numeroPermis">Numéro de permis</label>
                        <input type="text" name="numeroPermisEdit" id="numeroPermisEdit" value="Numéro de permis" >
                    </div>
                    <div>
                        <label for="dateDelivrancePermis">Date de délivrance du permis</label>
                        <input type="date" name="dateDelivrancePermisEdit" id="dateDelivrancePermisEdit" value="Date de délivrance du permis" >
                    </div>
                    <div>
                        <label for="lieuDelivrancePermis">Lieu de délivrance du permis</label>
                        <input type="text" name="lieuDelivrancePermisEdit" id="lieuDelivrancePermisEdit" value="Lieu de délivrance du permis" >
                    </div>
                    <div>
                        <label for="codTypC">CodTypC</label>
                        <input type="text" name="codTypCEdit" id="codTypCEdit" value="CodTypC" >
                    </div>
                </div>

                <div id="autres">
                    <div>
                        <label for="remarques">Remarques</label>
                        <input tpye="text" name="remarquesEdit" id="remarquesEdit" value="Remarques">
                    </div>

                    <div>
                        <label for="autreAdresse">Autre Adresse</label>
                        <input type="text" name="autreAdresseEdit" id="autreAdresseEdit" value="Autre Adresse" >
                    </div>
                </div>
                <button type="submit" style="display:flex; margin:0 auto">Modifier</button>
            </form>

        </div>
    </div>



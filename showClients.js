function deleteClient(NumC) {
    if (confirm("Voulez-vous vraiment supprimer ce client ?")) {
    
    $.ajax({
        type: "POST",
        url: "deleteClient.php",
        data: { 
            NumC: NumC
        },
        success: function () {
            alert('Client supprimé');
            location.reload();
        }
      })
    }
}




function showHideModalEdit(NumC) {
    var Modal = document.getElementById("modalEditClient");
    var pageContent = document.getElementById("page-content");
    if (Modal.style.display == 'block') {
        Modal.style.display = 'none';
        pageContent.style.opacity = '1';
        pageContent.style.userSelect = 'auto';

    } else {
        Modal.style.display = 'block';
        pageContent.style.opacity = '0.05';
        pageContent.style.userSelect = 'none';
        $.ajax({
            type: "POST",
            url: "getDataClient.php",
            data: { 
                NumC: NumC
            },
            dataType : "json", 
            success: function (data) {                
                document.getElementById("numCEdit").value = data.NumC;
                document.getElementById("nomEdit").value = data.NomC;
                document.getElementById("prenomEdit").value = data.PrenomC;
                document.getElementById("dateNaissanceEdit").value = data.DatNaisC;
                document.getElementById("lieuNaissanceEdit").value = data.LieuNaisC;
                document.getElementById("nationaliteEdit").value = data.NationaliteC
                document.getElementById("villeEdit").value = data.AdrVilC;
                document.getElementById("rueEdit").value = data.AdrRueC;
                document.getElementById("codePostalEdit").value = data.CodPosC;
                document.getElementById("telephoneEdit").value = data.TelC;
                document.getElementById("numeroPassportEdit").value = data.NumPasC;
                document.getElementById("dateDelivrancePassportEdit").value = data.DatDelPasC;
                document.getElementById("lieuDelivrancePassportEdit").value = data.LieuDelPasC;
                document.getElementById("paysDelivrancePassportEdit").value = data.PaysDelPasC;
                document.getElementById("numeroPermisEdit").value = data.NumPermisC;
                document.getElementById("dateDelivrancePermisEdit").value = data.DatDelPermiC;
                document.getElementById("lieuDelivrancePermisEdit").value = data.LieuDelPermisC;
                document.getElementById("autreAdresseEdit").value = data.AutreAdrC;
                document.getElementById("remarquesEdit").value = data.RemarquesC;
                document.getElementById("codTypCEdit").value = data.CodTypC;
            }
          })

    }
}


function showHideModal(NumC) {
    var Modal = document.getElementById("modalViewMore");
    var pageContent = document.getElementById("page-content");

    if (Modal.style.display == 'block') {
        Modal.style.display = 'none';
        pageContent.style.opacity = '1';
        pageContent.style.userSelect = 'auto';

    } else {
        Modal.style.display = 'block';
        pageContent.style.opacity = '0.05';
        pageContent.style.userSelect = 'none';
        $.ajax({
            type: "POST",
            url: "getDataClient.php",
            data: { 
                NumC: NumC
            },
            dataType : "json", 
            success: function (data) {                
                document.getElementById("nom").value = data.NomC;
                document.getElementById("prenom").value = data.PrenomC;
                document.getElementById("dateNaissance").value = data.DatNaisC;
                document.getElementById("lieuNaissance").value = data.LieuNaisC;
                document.getElementById("nationalite").value = data.NationaliteC
                document.getElementById("ville").value = data.AdrVilC;
                document.getElementById("rue").value = data.AdrRueC;
                document.getElementById("codePostal").value = data.CodPosC;
                document.getElementById("telephone").value = data.TelC;
                document.getElementById("numeroPassport").value = data.NumPasC;
                document.getElementById("dateDelivrancePassport").value = data.DatDelPasC;
                document.getElementById("lieuDelivrancePassport").value = data.LieuDelPasC;
                document.getElementById("paysDelivrancePassport").value = data.PaysDelPasC;
                document.getElementById("numeroPermis").value = data.NumPermisC;
                document.getElementById("dateDelivrancePermis").value = data.DatDelPermiC;
                document.getElementById("lieuDelivrancePermis").value = data.LieuDelPermisC;
                document.getElementById("autreAdresse").value = data.AutreAdrC;
                document.getElementById("remarques").value = data.RemarquesC;
                document.getElementById("codTypC").value = data.CodTypC;
            }
          })
    }
}
function deleteClient(NumC) {
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




function updateClient(NumC) {
    var Modal = document.getElementById("modalViewMore");
    var pageContent = document.getElementById("page-content");
    if (Modal.style.display == 'block') {
        Modal.style.display = 'none';
        pageContent.style.opacity = '1';
        pageContent.style.userSelect = 'auto';
    }
    else {
        Modal.style.display = 'block';
        pageContent.style.opacity = '0.05';
        pageContent.style.userSelect = 'none';
        
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
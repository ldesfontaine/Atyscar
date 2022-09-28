function deleteVoiture(MatV) {
    if (confirm("Voulez-vous vraiment supprimer cette voiture ?")) {
    $.ajax({
        type: "POST",
        url: "deleteVoiture.php",
        data: { 
            MatV: MatV
        },
        success: function () {
            alert('Voiture supprimé');
            location.reload();
        }
      })
    }
}
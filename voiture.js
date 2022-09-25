function deleteVoiture(MatV) {
    if (confirm("Voulez-vous vraiment supprimer ce client ?")) {
    $.ajax({
        type: "POST",
        url: "deleteVoiture.php",
        data: { 
            MatV: MatV
        },
        success: function () {
            alert('Client supprimé');
            location.reload();
        }
      })
    }
}
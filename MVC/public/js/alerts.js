window.addEventListener("load", function() {

document.getElementById("post_comment").onclick = function() {
    alert('Votre commentaire a bien été posté');
}

document.getElementById("report_comment").onclick = function() {
    alert('Le commentaire a bien été signalé à l\'administrateur');
}

document.getElementById("delete_comment").onclick = function() {
    alert('Le commentaire a bien été supprimé');
}

document.getElementById("moderate_comment").onclick = function() {
    alert('Le statut du commentaire a bien été modifié');
}

document.getElementById("submit_password_update").onclick = function() {
    alert('Votre nouveau mot de passe a bien été enregistré');
}

document.getElementById("send_message").onclick = function() {
    alert('Votre message a bien été envoyé, j\'y répondrai dans les meilleurs délais !');
}

});
document.getElementById('btnAddStagiaire').addEventListener('click', function() {
    document.getElementById('formContainer').classList.remove('hidden');
    document.getElementById('stagiairesList').classList.add('hidden');
    document.getElementById('formTitle').innerText = 'Ajouter un Stagiaire';
    document.getElementById('stagiaireForm').reset();
});

document.getElementById('btnListStagiaires').addEventListener('click', function() {
    document.getElementById('formContainer').classList.add('hidden');
    document.getElementById('stagiairesList').classList.remove('hidden');
    loadStagiaires();
});
document.getElementById('stagiaireForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    const formData = new FormData(this);
    
    fetch('add_stagiaire.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message); // Affiche le message de succès
        document.getElementById('formContainer').classList.add('hidden'); // Cache le formulaire
        document.getElementById('stagiaireForm').reset(); // Réinitialise le formulaire
    })
    .catch(error => console.error('Erreur:', error));
});

// Fonction pour charger la liste des stagiaires
function loadStagiaires() {
    fetch('list_stagiaires.php')
    .then(response => response.json())
    .then(data => {
        const stagiairesBody = document.getElementById('stagiairesBody');
        stagiairesBody.innerHTML = ''; // Vide le tableau avant de le remplir

        data.forEach(stagiaire => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${stagiaire.matStagiaire}</td>
                <td>${stagiaire.nomStagiaire}</td>
                <td>${stagiaire.prenomStagiaire}</td>
                <td>${stagiaire.filiereStagiaire}</td>
                <td>${stagiaire.anneeEtude}</td>
                <td>${stagiaire.typeBac}</td>
                <td>${stagiaire.anneeBac}</td>
            `;
            stagiairesBody.appendChild(row);
        });
    })
    .catch(error => console.error('Erreur:', error));
}
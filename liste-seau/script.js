// Récupérer toutes les cases à cocher
const checkboxes = document.querySelectorAll('input[type="checkbox"]');

// Vérifier si chaque case est cochée dans le cache, et la cocher si c'est le cas
checkboxes.forEach(checkbox => {
  const id = checkbox.getAttribute('id');
  const cachedValue = localStorage.getItem(id);
  if (cachedValue === 'checked') {
    checkbox.checked = true;
  }
  
  // Ajouter un écouteur d'événements pour sauvegarder l'état de la case dans le cache
  checkbox.addEventListener('change', event => {
    const isChecked = event.target.checked;
    localStorage.setItem(id, isChecked ? 'checked' : '');
    
    // Mettre à jour la barre de progression
    updateProgressBar();
  });
});

// Mettre à jour la barre de progression en fonction du nombre de cases cochées
function updateProgressBar() {
  const numChecked = document.querySelectorAll('input[type="checkbox"]:checked').length;
  const numTotal = checkboxes.length;
  const percentComplete = (numChecked / numTotal) * 100;
  
  const progressBar = document.querySelector('.progress-bar');
  progressBar.style.width = `${percentComplete}%`;
  
  const progressLabel = document.querySelector('.progress-label');
  progressLabel.textContent = `${Math.round(percentComplete)}%`;
}
updateProgressBar();

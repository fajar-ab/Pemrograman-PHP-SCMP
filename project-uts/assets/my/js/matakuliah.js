const ruangan = document.querySelectorAll('span#ruangan-badge');

for (let i = 0; i < ruangan.length; i++) {
  let content = ruangan[i].textContent;
  switch (content.trim()) {
    case 'RUANG01':
      ruangan[i].classList.add('badge-secondary')
      break;
      case 'RUANG02':
      ruangan[i].classList.add('badge-success')
      break;
      case 'LABOR01':
      ruangan[i].classList.add('badge-info')
      break;
  } 
}

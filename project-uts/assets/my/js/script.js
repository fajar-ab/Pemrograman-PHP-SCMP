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

const hari = document.querySelectorAll('span#hari-badge');

for (let i = 0; i < ruangan.length; i++) {
  let content = hari[i].textContent;
  switch (content.trim()) {
    case 'senin':
      hari[i].classList.add('badge-primary');
      break;
    case 'selasa':
      hari[i].classList.add('badge-secondary');
      break;
    case 'rabu':
      hari[i].classList.add('badge-success');
      break;
    case 'kamis':
      hari[i].classList.add('badge-danger');
      break;
    case 'jumat':
      hari[i].classList.add('badge-warning');
      break;
    case 'sabtu':
      hari[i].classList.add('badge-info');
      break;
  }
}
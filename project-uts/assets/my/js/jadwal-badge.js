const ruangan = document.querySelectorAll("span#ruangan-badge");

for (const badge of ruangan) {
  switch (badge.textContent.trim()) {
    case "RUANG01":
      badge.classList.add("badge-secondary");
      break;
    case "RUANG02":
      badge.classList.add("badge-success");
      break;
    case "LABOR01":
      badge.classList.add("badge-info");
      break;
  }
}

const hari = document.querySelectorAll("span#hari-badge");

for (const badge of hari) {
  switch (badge.textContent.trim()) {
    case "senin":
      badge.classList.add("badge-primary");
      break;
    case "selasa":
      badge.classList.add("badge-secondary");
      break;
    case "rabu":
      badge.classList.add("badge-success");
      break;
    case "kamis":
      badge.classList.add("badge-danger");
      break;
    case "jumat":
      badge.classList.add("badge-warning");
      break;
    case "sabtu":
      badge.classList.add("badge-info");
      break;
  }
}

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

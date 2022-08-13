const ruanganSelect = document.querySelectorAll("#inputRuangan")[0];
const dataRuangan = ruanganSelect.getAttribute("data-ruangan");
const ruaganOption = ruanganSelect.children;

for (const option of ruaganOption) {
  if (option.textContent === dataRuangan) {
    option.setAttribute("selected", true);
  }
}

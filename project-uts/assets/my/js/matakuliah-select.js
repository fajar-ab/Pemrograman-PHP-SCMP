const ruanganSelect = document.querySelectorAll("#inputRuangan")[0];
const dataRuangan = ruanganSelect.getAttribute("data-ruangan");
const ruaganOption = ruanganSelect.children;

for (let i = 0; i < ruaganOption.length; i++) {
  if (ruaganOption[i].textContent === dataRuangan) {
    ruaganOption[i].setAttribute("selected", true);
  }
}

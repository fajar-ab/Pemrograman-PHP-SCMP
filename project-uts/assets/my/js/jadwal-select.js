const hariSelect = document.querySelectorAll("#hari")[0];
const dataHari = hariSelect.getAttribute("data-hari");
const hariOption = hariSelect.children;

for (const option of hariOption) {
  if (option.textContent === dataHari) {
    option.setAttribute("selected", true);
  }
}

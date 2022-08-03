const hariSelect = document.querySelectorAll("#hari")[0];
const dataHari = hariSelect.getAttribute("data-hari");
const hariOption = hariSelect.children;

console.log(hariOption);

for (let i = 0; i < hariOption.length; i++) {
  if (hariOption[i].textContent === dataHari) {
    hariOption[i].setAttribute("selected", true);
  }
}


const jenisKelaminChecked = document.querySelectorAll("form > span > input[name='jk']")

switch (jenisKelamin) {
    case "L":
        jenisKelaminChecked[0].setAttribute('checked', true)
        break;
    case "P":
        jenisKelaminChecked[1].setAttribute('checked', true)
        break;
    default:
        break;
}

const pendidikanChecked = document.querySelectorAll("form > span > input[name='pendidikan']")

switch (pendidikan) {
    case "SD":
        pendidikanChecked[0].setAttribute('checked', true)
        break;
    case "SMP":
        pendidikanChecked[1].setAttribute('checked', true)
        break;
    case "SMA":
        pendidikanChecked[2].setAttribute('checked', true)
        break;
    case "S1":
        pendidikanChecked[3].setAttribute('checked', true)
        break;
    default:
        break;
}
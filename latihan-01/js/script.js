
// ambil element input jenis kelamin
const jenisKelaminChecked = document.querySelectorAll("form > span > input[name='jk']")

// jenis kelamin checked
switch (jenisKelamin) {
    case "L":
        jenisKelaminChecked[0].setAttribute('checked', true)
        break;
    case "P":
        jenisKelaminChecked[1].setAttribute('checked', true)
        break;
}


// ambil elemen input pendidikan
const pendidikanChecked = document.querySelectorAll("form > span > input[name='pendidikan']")

// pendidikan checked
switch (pendidikan) {
    case "SD":
        pendidikanChecked[0].setAttribute('checked', true)
        break
    case "SMP":
        pendidikanChecked[1].setAttribute('checked', true)
        break
    case "SMA":
        pendidikanChecked[2].setAttribute('checked', true)
        break
    case "S1":
        pendidikanChecked[3].setAttribute('checked', true)
        break
}
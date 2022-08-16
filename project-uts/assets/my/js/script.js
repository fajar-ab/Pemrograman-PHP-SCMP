const pesan = document.querySelector("#pesan");

setTimeout(() => {
  pesan.classList.add("sembunyikan");
}, 2000);

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

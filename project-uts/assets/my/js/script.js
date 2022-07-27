

const pesan = document.querySelector('body > div.container.my-4 > div.position-absolute.top-50.start-50.translate-middle');

setTimeout(() => {
  pesan.classList.add('sembunyikan')
}, 2000);

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}
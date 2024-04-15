document.querySelectorAll('.navbar .collapse #menu-links .dropdown').forEach(function(everyitem) {
  everyitem.addEventListener('mouseover', function(e) {
    let el_link = this.querySelector('a[data-mdb-toggle]');
    if (el_link != null) {
      let nextEl = el_link.nextElementSibling;
      el_link.classList.add('show');
      nextEl.classList.add('show');
    }
  });
  everyitem.addEventListener('mouseleave', function(e) {
    let el_link = this.querySelector('a[data-mdb-toggle]');
    if (el_link != null) {
      let nextEl = el_link.nextElementSibling;
      el_link.classList.remove('show');
      nextEl.classList.remove('show');
    }
  });
});
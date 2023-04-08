function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");

  // Tutup dropdown jika pengguna mengklik di luarnya
  window.onclick = function (event) {
    if (!event.target.matches('#dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
}
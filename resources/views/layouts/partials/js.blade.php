<script src="{{ mix('js/app.js') }}" defer></script>
<div hidden class="
    bg-teal-500
    hover:bg-teal-700
    bg-red-500
    hover:bg-red-700
    bg-yellow-500
    hover:bg-yellow-700
"></div>
<script>
  function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("sidebar-menu-container--hidden");
    document.getElementById(collapseID).classList.toggle("sidebar-menu-container--visible");
  }
</script>

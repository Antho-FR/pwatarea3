function toggleMenu(menuItem) {
    var submenu = menuItem.querySelector('.submenu');
    if (submenu.style.display === 'block') {
      submenu.style.display = 'none';
    } else {
      submenu.style.display = 'block';
    }
  }
  
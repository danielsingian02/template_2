function showNav() {
    let nav = document.getElementById('nav-container');

    let computatedStyle = getComputedStyle(nav);

    if (computatedStyle.display === 'none' ) {
        nav.style.display = 'flex';
    } else {
        nav.style.display = 'none';
    }
}

function mobile_menu() {
    var mobile_menu = document.getElementById('mobile_menu');
    var body = document.getElementsByTagName('body')[0];
    if (mobile_menu.style.display === "none") {
        mobile_menu.style.display = "block";
        body.style.overflow = "hidden";
    } else {
        mobile_menu.style.display = "none";
        body.style.overflow = "";
    }
}

function dropdown_arrow(x) {
    const ID = 'dropdown_arrow'+ x;
    var arrow = document.getElementById(ID);
    if (arrow.classList.contains('bx-chevron-down')) {
        arrow.classList.remove('bx-chevron-down');
        arrow.classList.add('bx-chevron-up');
    } else {
        arrow.classList.remove('bx-chevron-up');
        arrow.classList.add('bx-chevron-down');
    }
}

function dropdown(x) {
    const ID = 'dropdown'+ x;
    var dropdown = document.getElementById(ID);
    if (dropdown.style.display === "none") {
        dropdown.style.display = "flex";
    } else {
        dropdown.style.display = "none";
    }
}
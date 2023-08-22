function mobile_menu() {
    var mobile_menu = document.getElementById('mobile_menu');
    if (mobile_menu.style.display === "none") {
        mobile_menu.style.display = "block";
    } else {
        mobile_menu.style.display = "none";
    }
}
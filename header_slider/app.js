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
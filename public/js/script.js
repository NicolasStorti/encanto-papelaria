//nav-bar
const toggler = document.querySelector(".navbar-toggler");
const menu = document.querySelector("#navbarNav");

menu.addEventListener("show.bs.collapse", () => {
    toggler.classList.add("x");
});

menu.addEventListener("hide.bs.collapse", () => {
    toggler.classList.remove("x");
});
document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', () => {

        const menu = document.querySelector('#navbarNav');
        const bsCollapse = bootstrap.Collapse.getInstance(menu);

        if (bsCollapse) {
            bsCollapse.hide();
        }
    });
});



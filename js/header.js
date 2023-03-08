chickenLoader();
activeLink();

function chickenLoader() {
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
        loader.style.display = "none";
    });
}

function activeLink() {
    const activePage = window.location.pathname;
    const navLinks = document.querySelectorAll('nav a')
        .forEach(link => {
            if (link.href.includes(`${activePage}`)) {
                link.classList.add('active')
            }
        })
}


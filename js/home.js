randomFacts();
chickenLoader();
lazyLaoding();
showPictures();
activeLink();
flyIn();
hamburgerMenu();

//! home page 

function randomFacts() {
    const chickenFacts = [
        "Chickens are the closest living relatives to the T-Rex dinosaur",
        "Chickens have a natural ability to see over 300 degrees, without moving their heads",
        "The record for most eggs laid in one day by a single chicken is 7",
        "Chickens have a strong memory and can recognize over 100 different faces of people or animals",
        "Chickens are very social animals and have their own unique ways of communicating with each other",
        "A group of chickens is called a flock",
        "Chickens have their own unique language, consisting of over 30 different calls and sounds",
        "Hens can communicate with their chicks while they are still in the egg",
        "Chickens can remember and recognize over 100 different individuals, including humans",
        "Chickens are social animals and can form strong bonds with each other",
        "Chickens have excellent eyesight and can see in color",
        "Chickens can run up to 9 miles per hour",
        "Chickens are capable of problem-solving and can even understand cause and effect relationships",
        "Potatoes are cool too",
        "I like chicken",
        "Kykata beshe tyk",
        "Pishete mi 6 molq vi",
        "aleks jena si misli za men hehe"
    ];

    const factDisplay = document.querySelector(".fact-display");

    if (factDisplay) {
        const randomFact = chickenFacts[Math.floor(Math.random() * chickenFacts.length)];
        factDisplay.textContent = randomFact;
    }
}

function chickenLoader() {
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
        loader.style.display = "none";
    });
}

//! header

function activeLink() {
    const activePage = window.location.pathname;
    const navLinks = document.querySelectorAll('nav a')
        .forEach(link => {
            if (link.href.includes(`${activePage}`)) {
                link.classList.add('active');
            }
        });
    }

//! hamburger menu

function hamburgerMenu() {
    const mainMenu = document.querySelector(".main-menu");
    const closeMenu = document.querySelector(".close-menu");
    const openMenu = document.querySelector(".open-menu");

    openMenu.addEventListener("click", show);
    closeMenu.addEventListener("click", close);

    function show() {
        mainMenu.style.display = "flex";
        mainMenu.style.top = "0%";
        mainMenu.style.transition = "500ms ease";
    }

    function close() {
        mainMenu.style.top = "-100%";
    }
}

//! gallery/top-breeds

function lazyLaoding() {
    const targets = [...document.getElementsByClassName('lazy-image')];

    const lazyLoad = target => {
        const io = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    const src = img.getAttribute('data-lazy');

                    img.setAttribute('src', src);
                    observer.disconnect();
                };
            });
        });
        io.observe(target);
    };
    targets.forEach(lazyLoad);
}

function showPictures() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            console.log(entry);
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            } else {
                entry.target.classList.remove("show");
            }
        });
    });
    
    const hiddenElements = document.querySelectorAll(".hidden");
    hiddenElements.forEach((el) => observer.observe(el));
}

//! about

function flyIn() {
    window.addEventListener('load', function () {
        var flyInDiv = document.querySelector('.fly-in');
        flyInDiv.style.display = 'block';
    });
}
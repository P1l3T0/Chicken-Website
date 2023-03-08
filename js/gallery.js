lazyLaoding();
showPictures();

//!murzelivo zarejdane na snimkite

function lazyLaoding() {
    const targets = [...document.getElementsByTagName('img')];

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


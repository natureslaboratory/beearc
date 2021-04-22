const hamburger = document.getElementsByClassName("c-hamburger__button")[0];
const hero = document.getElementsByClassName("c-hero")[0];

if (hamburger && hero) {
    
    window.addEventListener("scroll", () => {
        const hamRect = hamburger.getBoundingClientRect();
        const heroRect = hero.getBoundingClientRect();
        
        let hamPosition = ((hamRect.bottom - hamRect.top) / 2) + hamRect.top;
        if (hamPosition > heroRect.bottom) {
            hamburger.classList.add("c-hamburger__button--dark");
        } else {
            hamburger.classList.remove("c-hamburger__button--dark");
        }
    })
}
const hamburger = document.getElementsByClassName("c-hamburger__button")[0];
const hero = document.getElementsByClassName("c-hero")[0];
const container = document.getElementsByClassName("l-wrap")[0]

if (hamburger && hero && container) {
    
    window.addEventListener("scroll", () => {
        const hamRect = hamburger.getBoundingClientRect();
        const heroRect = hero.getBoundingClientRect();
        
        let hamPosition = ((hamRect.bottom - hamRect.top) / 2) + hamRect.top;
        if (hamPosition > heroRect.bottom && hamPosition !== 0) {
            hamburger.classList.add("c-hamburger__button--dark");
            container.classList.remove("l-wrap--absolute");
        } else {
            hamburger.classList.remove("c-hamburger__button--dark");
            container.classList.add("l-wrap--absolute");
        }
    })
}
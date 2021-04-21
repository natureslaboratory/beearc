// import Cards from './classes/Cards';

// const cardDivs = document.getElementsByClassName("c-cards");
// let cardDivObjects = [];
// for (let i = 0; i < cardDivs.length; i++) {
//     const cardDiv = cardDivs[i];
//     cardDivObjects = [...cardDivObjects, new Cards(cardDiv)]
// }

// const animated = document.getElementsByClassName("c-animated");

// for (let i = 0; i < animated.length; i++) {
//     const animatedElement = animated[i];


// }

const desktopCheck = (element) => {
    let triggerHeight = window.scrollY + document.documentElement.clientHeight - 200;
    let elementTop = element.getBoundingClientRect().top + document.documentElement.scrollTop;

    if (triggerHeight > elementTop) {
        return true;
    }
    return false;
}

// const mobileCheck = element => {
//     return window.scrollY + document.documentElement.clientHeight - 200 >
//         element.top + document.documentElement.scrollTop
// }

const animate = () => {
    const animated = document.getElementsByClassName("c-animated");
    for (let i = 0; i < animated.length; i++) {
        const animatedElement = animated[i];

        if (desktopCheck(animatedElement)) {
            animatedElement.classList.add("show");
        } else {
            animatedElement.classList.remove("show");
        }

    }
}

window.addEventListener("load", () => {
    animate();
})

window.addEventListener("scroll", () => {
    animate();
})
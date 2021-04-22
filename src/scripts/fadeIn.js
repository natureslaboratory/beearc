import Animated from './classes/Animated';

// const heightCheck = (element) => {
//     let triggerHeight = window.scrollY + document.documentElement.clientHeight - 200;
//     let elementTop = element.getBoundingClientRect().top + document.documentElement.scrollTop;

//     if (triggerHeight > elementTop) {
//         return true;
//     }
//     return false;
// }


const animated = document.getElementsByClassName("c-animated");
for (let i = 0; i < animated.length; i++) {
    new Animated(animated[i]);
}

// const animate = () => {
//     const animated = document.getElementsByClassName("c-animated");
//     for (let i = 0; i < animated.length; i++) {
//         const animatedElement = new Animated(animated[i]);

//         if (heightCheck(animatedElement)) {
//             animatedElement.classList.add("show");
//         } else {
//             animatedElement.classList.remove("show");
//         }

//     }
// }

// window.addEventListener("load", () => {
//     animate();
// })

// window.addEventListener("scroll", () => {
//     animate();
// })
import Carousel from "./classes/Carousel";

const carousels = document.getElementsByClassName("c-carousel");
let carouselObjects = [];

for (let i = 0; i < carousels.length; i++) {
    const carousel = carousels[i];
    new Carousel(carousel);
}
import Horse from './Horse';

export default class Carousel {
    node;
    horses = [];
    interval;
    timeout;
    forwardButton;
    backwardButton;
    littleDots = [];
    nextDisabled = false;
    nextTimeout;
    prevDisabled = false;
    prevTimeout;

    constructor(node) {
        this.node = node;

        let horses = this.node.getElementsByClassName("c-carousel__horse");
        for (let i = 0; i < horses.length; i++) {
            const horse = horses[i];
            this.horses = [...this.horses, new Horse(horse)];
        }

        this.forwardButton = this.node.getElementsByClassName("c-carousel__button--forward")[0];
        this.backwardButton = this.node.getElementsByClassName("c-carousel__button--backward")[0];

        
        if (!this.horses) {
            throw new Error("No horses!");
        }
        
        if (this.horses.length < 3) {
            throw new Error("Too few horses!");
        }
        
        this.horses[this.horses.length-1].setLeave();
        this.horses[0].setCurrent();
        this.horses[1].setNext();
        
        
        this.forwardButton.addEventListener("click", () => {
            this.manualForward();
        })
        
        this.backwardButton.addEventListener("click", () => {
            this.manualBackward();
        })
        
        let littleDots = document.createElement("div");
        littleDots.classList.add("c-carousel__dots");
        this.horses.forEach(horse => {
            let littleDot = document.createElement("div");
            littleDot.classList.add("c-carousel__dot");
            littleDots.appendChild(littleDot);
            this.littleDots = [...this.littleDots, littleDot];
        })
        
        this.node.appendChild(littleDots);
        this.littleDots[0].classList.add("active");
        
        this.setInterval();
    }

    removeLittleDotActive() {
        this.littleDots.forEach(dot => {
            dot.classList.remove("active");
        })
    }

    moveForward() {
        let nextHorse;

        this.horses.forEach((horse, index) => {
            // if the horse has the class "next", mark the next horse as the horse after,
            // and give that horse the "next" class. For the little dots, the next active
            // horse is the current index (since the next horse now becomes the current
            // horse). If the current leaving horse is at the last index, go to the start
            // of the horse array.
            if (horse.isNext && !nextHorse) {
                if (index == this.horses.length-1) {
                    nextHorse = 0;
                } else {
                    nextHorse = index + 1;
                }
                this.removeLittleDotActive();
                if (index < this.littleDots.length) {
                    this.littleDots[index].classList.add("active");
                } else {
                    this.littleDots[0].classList.add("active");
                }
            } 
            horse.move();
        })

        this.horses[nextHorse].setNext();

        this.nextDisabled = true;
        this.nextTimeout = setTimeout(() => {
            this.nextDisabled = false;
        }, 600);
    }

    moveBackward() {
        let nextHorse;

        this.horses.forEach((horse, index) => {
            // if the horse has the class "leave", mark the next horse (to take it's place) as the horse before,
            // and give that horse the "leave" class. For the little dots, the next active
            // horse is the current index (since the leaving horse now becomes the current
            // horse) when moving backwards. If the current leaving horse is at the 0 index,
            // go to the end of the horse array.
            if (horse.hasLeft && !nextHorse) {
                if (index == 0) {
                    nextHorse = this.horses.length-1;
                } else {
                    nextHorse = index - 1;
                }
                this.removeLittleDotActive();
                if (index >= 0) {
                    this.littleDots[index].classList.add("active");
                } else {
                    this.littleDots[this.littleDots.length-1].classList.add("active");
                }
            }
            horse.moveBack();
        })

        this.horses[nextHorse].setLeave();

        this.prevDisabled = true;
        this.prevTimeout = setTimeout(() => {
            this.prevDisabled = false;
        }, 600);
    }

    setInterval() {
        this.interval = setInterval(() => {
            this.moveForward();
        }, 4000);
    }

    setTimeout() {
        clearTimeout(this.timeout);
        this.timeout = setTimeout(() => {
            this.setInterval();
        }, 5000);
    }

    manualForward() {
        if (!this.nextDisabled) {
            clearInterval(this.interval);
            this.moveForward();
            this.setTimeout();
        }
    }

    manualBackward() {
        if (!this.prevDisabled) {
            clearInterval(this.interval);
            this.moveBackward();
            this.setTimeout();
        }
    }
}
export default class Horse {
    node;

    get isNext() {
        return this.node.classList.contains("next");
    }

    get isCurrent() {
        return this.node.classList.contains("current");
    }

    get hasLeft() {
        return this.node.classList.contains("leave");
    }

    constructor(node) {
        this.node = node;
    }

    removeStateClasses() {
        this.node.classList.remove("next");
        this.node.classList.remove("current");
        this.node.classList.remove("leave");
    }

    move() {
        if (this.isNext) {
            this.setCurrent()
        } else if (this.isCurrent) {
            this.setLeave()
        } else if (this.hasLeft) {
            this.node.classList.remove("leave");
        }
    }

    moveBack() {
        if (this.isNext) {
            this.node.classList.remove("next");
        } else if (this.isCurrent) {
            this.setNext();
        } else if (this.hasLeft) {
            this.setCurrent();
        }
    }

    setNext() {
        this.removeStateClasses();
        this.node.classList.add("next");
    }

    setCurrent() {
        this.removeStateClasses();
        this.node.classList.add("current");
    }

    setLeave() {
        this.removeStateClasses();
        this.node.classList.add("leave");
    }
}
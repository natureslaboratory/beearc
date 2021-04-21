export default class Card {
    node;

    get top() {
        let rect = this.node.getBoundingClientRect();
        return rect.top;
    }

    constructor(node) {
        this.node = node;
    }

    show() {
        this.node.classList.add("show");
    }

    hide() {
        this.node.classList.remove("show");
    }
}
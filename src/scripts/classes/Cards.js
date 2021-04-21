import Card from './Card'

export default class Cards {
    node;
    cards = [];

    get top() {
        let rect = this.node.getBoundingClientRect();
        return rect.top;
    }

    constructor(node) {
        this.node = node;

        let cards = this.node.getElementsByClassName("c-card");
        for (let i = 0; i < cards.length; i++) {
            const card = cards[i];
            this.cards = [...this.cards, new Card(card)];
        }

        window.addEventListener("scroll", () => {
            if (this.desktopCheck()) {
                const baseTime = 400;
                for (let i = 0; i < this.cards.length; i++) {
                    const card = this.cards[i];
                    setTimeout(() => {
                        card.show()
                    }, baseTime * i);
                }
            } else {
                for (let i = 0; i < this.cards.length; i++) {
                    const card = this.cards[i];
                    if (this.mobileCheck(card) && document.documentElement.clientWidth < 768) {
                        card.show()
                    }
                }
            }
        })
    }

    desktopCheck() {
        if (window.scrollY + document.documentElement.clientHeight - 200 >
        this.top + document.documentElement.scrollTop) {
            if (document.documentElement.clientWidth > 768) {
                return true;
            }
        } 

        return false;
    }
    
    mobileCheck(card) {
        return window.scrollY + document.documentElement.clientHeight - 200 >
        card.top + document.documentElement.scrollTop
    }
}
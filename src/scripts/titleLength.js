const titleStyle = () => {
    let title = document.getElementsByClassName("c-hero__title")[0];
    if (title) {
        let titleInnerHtmlArray = title.innerHTML.trim().split("");
        if (titleInnerHtmlArray.length > 30) {
            title.classList.add("c-hero__title--small");
        }
    }
}

titleStyle();
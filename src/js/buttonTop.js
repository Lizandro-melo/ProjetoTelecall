window.onscroll = () => {
    const mybutton = document.getElementById("btnTop");
    mybutton.style.right = "-70px";
    if (document.body.scrollTop > 490 || document.documentElement.scrollTop > 490) {
        mybutton.style.right = "30px";
    } else {
        mybutton.style.right = "-70px";
    }

    mybutton.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    }
    )
};
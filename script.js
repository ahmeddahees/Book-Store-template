const buton = document.getElementById("btn");
const buton6 = document.getElementById("btn6");
const information = document.getElementById("information");
const close = document.getElementById("close");
const body = document.getElementById("body");
const heaDer = document.getElementById("heaDer");




//information one
buton.addEventListener("click", () => {
    information.style.display = "block"
    body.style.overflow = "hidden"
    heaDer.style.display = "none"
})
close.addEventListener("click", () => {
    information.style.display = "none"
    body.style.overflow = "scroll"
    heaDer.style.display = "flex"
})

//information two
buton6.addEventListener("click", () => {
    information.style.display = "block"
    body.style.overflow = "hidden"
    heaDer.style.display = "none"
})
close.addEventListener("click", () => {
        information.style.display = "none"
        body.style.overflow = "scroll"
        heaDer.style.display = "flex"
    })
    // dark
const mode = document.getElementById("mode");
const sectionFourDiv = document.getElementById("section-four-div");
const sectionThreeH3 = document.getElementById("sectionThreeH3");
const sectionThreeB = document.getElementById("section-three-p");
const sectionSexDiv = document.getElementById("section-sex-div");
const darkmode = document.getElementById("darkmodeleft");
mode.addEventListener("click", () => {
    body.classList.toggle("darkBody")
    heaDer.classList.toggle("heaDercolor")
    sectionFourDiv.classList.toggle("sectionFourDiv")
    sectionThreeH3.classList.toggle("sectionThreeH3")
    sectionThreeB.classList.toggle("sectionThreeB")
    darkmode.classList.toggle("darkmodee")
    sectionSexDiv.classList.toggle("sectionSexDiv")

})


// all download
const allDown10ad = document.querySelectorAll(".download");
allDown10ad.forEach(Item => {
    Item.addEventListener("click", () => {


    })
})
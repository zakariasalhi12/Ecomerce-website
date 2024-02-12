

const popupcn = document.getElementsByClassName("popup-contianer")[0]

const popucn2 = document.getElementsByClassName("popup-contianer")[1]

const act = document.getElementsByClassName("active")[0]

const pop = document.getElementsByClassName("popup")[0]

const pop2 = document.getElementsByClassName("popup")[1]

popupcn.addEventListener("mouseenter", () => {
    pop.style.transform = "scale(1)"
})
popupcn.addEventListener("mouseleave", () => {
    pop.style.transform = "scale(0)"
})

popucn2.addEventListener("mouseenter", () => {
    pop2.style.transform = "scale(1)"
})
popucn2.addEventListener("mouseleave", () => {
    pop2.style.transform = "scale(0)"
})
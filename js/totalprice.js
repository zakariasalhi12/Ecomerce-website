let container = document.querySelectorAll(".panier-bn")
let cal = document.querySelectorAll(".in")
let total = document.getElementById("total")
let sq = document.getElementById("sq")
let inp1 = document.getElementById("inp1")
let inp2 = document.querySelectorAll(".inp2")

let tot = 0

container.forEach(item => {
    let price = item.getElementsByClassName("prci")[0].innerText.replace("MAD", "")
    let input = item.getElementsByClassName("in")[0].value
    tot = tot + (price * input)
});

total.innerText = `${tot} MAD`
sq.innerText = `${tot} MAD`
inp1.value= `${tot} MAD`




let hid = document.getElementsByClassName("cach")[0]
let buy = document.getElementsByClassName("buyy")[0]
let exiteq = document.getElementsByClassName("buyy b")[0]


if(total.innerText == `0 MAD`){
    buy.style.display = "none"
    total.parentElement.style.display = "none"
}

buy.addEventListener("click",() => {
    hid.style.transform = "scale(1)"
})
exiteq.addEventListener("click",() => {
    hid.style.transform = "scale(0)"
    
})




// nav bar

const menu = document.getElementById("menu");
const exite = document.getElementById("exite")
const hiden = document.getElementById("hidden");
let body = document.body
menu.addEventListener("click", () => {
    hiden.style.transform = "translateY(0)"
})

exite.addEventListener("click", () => {
    hiden.style.transform = "translateX(150vh)"
})


let loader = document.createElement("div")
body.prepend(loader)
let load = document.createElement("div")
loader.prepend(load)
loader.classList.add("loader")
load.classList.add("load")

// on loading 
window.onload = function(){
    loader.remove()
    load.remove()
}
// container

const cnt = document.querySelectorAll(".container")

cnt.forEach(item => {
    item.addEventListener("click", () => {
        let bn = item.getElementsByClassName("shop-img")[0].src

    })
});

// add to panier 

let exite2 = document.getElementById("exite2")
let panier = document.getElementsByClassName("panier")[0]
let panierContainer = document.getElementsByClassName("panier-container")[0]






// whatssap icon
let whatssap = document.createElement("a")
whatssap.classList.add("whatssap")
whatssap.setAttribute("target", "_BLANK")
whatssap.setAttribute("href", "http://wa.me/+212620665284")
body.prepend(whatssap)

let i = document.createElement("i")
i.classList.add("fa-brands")
i.classList.add("fa-whatsapp")
whatssap.append(i)
window.onscroll = function () {
    if (scrollY > 30) {
        whatssap.style.bottom = "25px"
    } else {
        whatssap.style.bottom = "-80px"

    }

}

//sold 


let sold = document.querySelectorAll(".price-solded")

sold.forEach(item => {

    if (item.innerText.replace("MAD", "") > 0) {
        item.style.transform = "scale(1)"
        let bs = document.createElement("img")
        bs.classList.add("stockout")
        bs.src = "https://th.bing.com/th/id/R.074d057182dde0f4d7adc1955f05ccfd?rik=6zQCUbw5ouTMWA&riu=http%3a%2f%2fwww.tribalmixes.com%2fpic%2fdj%2fnew%2fpromo.png&ehk=LePu5Q2n0dGGb9YDFetqGONNE5nPoRqVXk7jp2Yh9Qs%3d&risl=&pid=ImgRaw&r=0"
        item.parentElement.prepend(bs)

    }
});



var deadline = new Date("Jan 1, 2023 00:00:00").getTime();
        var x = setInterval(function () {
            var now = new Date().getTime();
            var t = deadline - now;
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((t % (1000 * 60)) / 1000);
            document.getElementById("demo").innerHTML = days + "d "
                + hours + "h " + minutes + "m " + seconds + "s ";
            if (t < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "SOLDED";
            }
        }, 1000);
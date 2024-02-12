



// when up picture


let file = document.getElementById("fill")
let file1 = document.getElementById("fill2")
let file2 = document.getElementById("fill3")

let im = document.getElementsByClassName("im")[0]
let im2 = document.getElementsByClassName("im")[1]
let im3 = document.getElementsByClassName("im")[2]

file.addEventListener("change", (eo) => {
    const file = eo.target.files[0]
    if (file) {
        let url = URL.createObjectURL(file)
        im.style.height="auto"
        im.src = url
    }
})

file1.addEventListener("change", (eo) => {
    const file1 = eo.target.files[0]
    if (file1) {
        let url = URL.createObjectURL(file1)
        im2.style.height="auto"
        im2.src = url

    }

})

file2.addEventListener("change", (eo) => {
    const file2 = eo.target.files[0]
    if (file2) {
        let url = URL.createObjectURL(file2)
        im3.style.height="auto"
        im3.src = url
    }
})
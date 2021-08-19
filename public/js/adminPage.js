
let rows =  document.querySelectorAll('.visitor-details')


let pages = Math.ceil(rows.length/5)
let currentPage = 1

let countRows = 0


rows.forEach((row) => {
    if (parseInt(row.dataset.id) > 5) {
        row.classList.add("hideRow")
    }

})

rows.forEach((row) => {
    if (row.style.display !== 'none' && row.className == 'hideRow') {
        countRows++
        console.log(countRows)

    }
})




document.querySelector('#visitorsIn').addEventListener('click', () => {
    let countRows = 0
    rows.forEach((row) => {
        row.classList.remove("hideElement")
        if (row.dataset.in == 0 ) {
            row.classList.toggle("hideElement");
            countRows++
            console.log(countRows)
        }

    })
})

document.querySelector('#visitorsOut').addEventListener('click', () =>
{
    rows.forEach((row) => {
        row.classList.remove("hideElement")
        if (row.dataset.in == 1) {
            row.classList.toggle("hideElement");
        }
    })
})

document.querySelector('#allVisitors').addEventListener('click', () => {
    rows.forEach((row) => {
        row.classList.remove("hideElement")
    })
})
console.log(pages)
document.querySelector('#next').addEventListener('click', () => {
    currentPage++
    if (currentPage > 1) {
        document.querySelector('#previous').classList.remove('hideElement')
    }
    if (currentPage === pages) {

        document.querySelector('#next').classList.add('hideElement')
    }
    rows.forEach((row) => {
        row.classList.remove("hideRow")
        if (parseInt(row.dataset.id) > currentPage * 5 || parseInt(row.dataset.id) <= (currentPage -1) * 5) {
            row.classList.add("hideRow")
        }
    })
})

document.querySelector('#previous').addEventListener('click', () => {
    currentPage--
    if (currentPage === 1) {
        document.querySelector('#previous').classList.add('hideElement')
    }
    if (currentPage !== 1) {
        document.querySelector('#next').classList.remove('hideElement')
    }


    rows.forEach((row) => {
        row.classList.remove("hideRow")
        if (parseInt(row.dataset.id) > currentPage * 5 || parseInt(row.dataset.id) <= (currentPage -1) * 5) {
            row.classList.add("hideRow")
        }
    })
})


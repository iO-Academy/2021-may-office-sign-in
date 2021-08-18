
let timeout

function createTimeout()
{
    timeout = setTimeout(() => {
        window.location.href = '/logout'
    } ,300000)

}p

document.querySelector('body').addEventListener('click', () => {
    clearTimeout(timeout);
    createTimeout()
})

createTimeout()

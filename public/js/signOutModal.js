const close = document.querySelectorAll('.closeSearch')

const model = document.querySelector('#signOutName')

const submitButton = document.querySelector('#submitSignOut')

close.forEach(element => {
    element.addEventListener('click', (e) => {
        model.textContent = e.target.dataset.name
    })
})

submitButton.addEventListener('click', (e) => {
    console.log(model.textContent);
})
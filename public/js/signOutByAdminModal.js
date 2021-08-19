const close = document.querySelectorAll('.signOutButtonAdmin')
const signOutAll = document.querySelector('#signOutAll')
const visitors = document.querySelectorAll('.visitor-details')
const model = document.querySelector('#signOutName')
const input = document.querySelector('#hiddenInput')
const input2 = document.querySelector('#hiddenInputAll')

close.forEach((element) => {
    element.addEventListener('click', (e) => {
        model.textContent = e.target.dataset.name;
        input.value = e.target.dataset.name;
    })
})


// signOutAll.addEventListener('click', (e) => {
//     const visitorsIn = visitors.map(visitor => {
//         if(visitor.dataset.in == 1) {
//             return visitor.dataset.name
//         }
//         return visitorsIn;
//     })
//
// })

signOutAll.addEventListener('click', (e) => {
    sign
})

signOutAllVisitor


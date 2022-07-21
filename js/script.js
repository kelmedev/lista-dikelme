const form = document.getElementById('q12form')

const num1 = document.getElementById('q12num1')
const num2 = document.getElementById('q12num2')

form.addEventListener('submit', (e) => {
    e.preventDefault()
    
    checkInputs()

})

function checkInputs() {


    const num1Value = num1.value.trim()
    const num2Value = num2.value.trim()

   
    if(num1Value === '') {
        // mostrar erro
        // add classe
        setErrorFor(num1, 'Preencha este campo')

    } else if(num1Value.length < 1) { 
        setErrorFor(num1, 'Este campo deve ter mais que 1 caractere')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(num1)
    }

    if(num2Value === '') {
        // mostrar erro
        // add classe
        setErrorFor(num2, 'Preencha esse campo')

    } else if(num1Value === num2Value) { 
        setErrorFor(num2, 'Os números estão iguais, por favor altere-os.')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(num2)
    }
    
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small')

    small.innerText = message

    formControl.className = 'form-control error'
}

function setSuccessFor(input) {
    const formControl = input.parentElement;

    formControl.className = 'form-control success'
}
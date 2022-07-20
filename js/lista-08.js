const form8 = document.getElementById('form8')
const num1 = document.getElementById('q8num1')
const num2 = document.getElementById('q8num2')
const num3 = document.getElementById('q8num3')



form8.addEventListener('submit8', (e) => {
    e.preventDefault()

    if (num1 === num2) {
        alert ("This is an alert dialog box")
    }

    checkInputs()
});

function checkInputs() {

    const num1Value = num1.value.trim()
    const num2Value = num2.value.trim()
    const num3Value = num3.value.trim()


    if(num1Value !== num2Value && num1Value !== num3Value) {
        // mostrar erro
        // add classe
        setErrorFor(num1 && num2 && num3, 'Números iguais, preencha corretamente!')

    } else {
        // adicionar a classe de sucesso
        setSuccessFor(num1 && num2 && num3)
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


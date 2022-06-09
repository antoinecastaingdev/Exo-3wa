const input = document.getElementById('number-wanted');
const button = document.getElementById('btn-result');
const resultParagraph = document.getElementById('result-paragraph');
const tableResult = document.getElementById('table-result');

function indexValueInFibonacci(index) {
    return Math.round((Math.round(Math.pow(1 + Math.sqrt(5), index)) - Math.round(Math.pow(1 - Math.sqrt(5), index))) / Math.round((Math.pow(2, index) * Math.sqrt(5))));
}

function numberRatio(smallerNumber, biggerNumber) {
    return smallerNumber / biggerNumber;
}



button.addEventListener('click', () => {
    if (+input.value === Math.round(+input.value) && +input.value >= 0) {
    tableResult.innerHTML += `
    <tr>
        <td>${indexValueInFibonacci(input.value)}</td>
        <td>${numberRatio(indexValueInFibonacci(input.value - 1), indexValueInFibonacci(input.value))}</td>
    </tr>
    `
    } else {
        tableResult.innerHTML += `
    <tr>
        <td>Frérot ca marche pas</td>
    </tr>
    `
    }
})

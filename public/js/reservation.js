const button_low = document.getElementById('low');
const button_high = document.getElementById('high');
const hidden_input = document.getElementById('hidden_input');
const P = document.getElementById('voyageur');

button_low.addEventListener('click', function () {
    P.innerText = (parseInt(P.innerText) - 1).toString();
    hidden_input.value = (parseInt(P.innerText) - 1).toString();
});

button_high.addEventListener('click', function () {
    P.innerText = (parseInt(P.innerText) + 1).toString();
    hidden_input.value = (parseInt(P.innerText) + 1).toString();
});
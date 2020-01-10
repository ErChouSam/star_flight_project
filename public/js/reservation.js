const button_low = document.getElementById('low');
const button_high = document.getElementById('high');


button_low.addEventListener('click', function () {
    const P = document.getElementById('voyageur');
    P.innerText = (parseInt(P.innerText) - 1).toString();
});

button_high.addEventListener('click', function () {
    const P2 = document.getElementById('voyageur');
    P2.innerText = (parseInt(P2.innerText) + 1).toString();
});
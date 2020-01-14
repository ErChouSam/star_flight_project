var pageHeight = window.innerHeight;
var position_a = document.getElementsByClassName('bubble');
var varianceEvent = 0;
var timesetBlint = 0;

window.addEventListener('load',function () {
    window.scrollTo(0,0);
});

Array.from(position_a).forEach(function (el,key) {
    el.addEventListener('click',function () {
        window.scrollTo(0, (window.innerHeight * key));
        changeBulleBGC(el);
    })
});

window.addEventListener('wheel', function (event) {
    event.preventDefault();
    event.stopPropagation();

    if (timesetBlint === 0) {
        if (event.deltaY >= 0) {
            varianceEvent !== 4 ? ++varianceEvent : varianceEvent;
            window.scrollTo(0, (window.innerHeight * varianceEvent));
            changeBulleBGC(position_a[varianceEvent]);
        } else {
            varianceEvent !== 0 ? --varianceEvent : varianceEvent;
            window.scrollTo(0, (window.innerHeight * varianceEvent));
            changeBulleBGC(position_a[varianceEvent]);
        }

        timesetBlint = 1;
        setTimeout(() => timesetBlint = 0, 500);
    }

}, {passive: false});

function changeBulleBGC(selector) {
    for (var i = 0; i < position_a.length; i++) {
        position_a[i].style.backgroundColor = selector === position_a[i] ? 'rgba(255,255,255,.8)' : 'transparent';
    }
}

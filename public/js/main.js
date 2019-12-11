var pageHeight = window.innerHeight;
var position_a = document.getElementsByTagName('a');

window.addEventListener('load',function () {
    console.log(window.screenTop);
    window.scrollTo(0,0);
});

window.addEventListener('wheel', function(event) {
    event.preventDefault();
    if (event.deltaY >= 0) {
        if (window.scrollY >= 0 && window.scrollY < pageHeight) {
            window.scrollTo(0, pageHeight);
            changeBGC(0,1,0);
        }
        else if (window.scrollY >= pageHeight && window.scrollY < pageHeight*2) {
            window.scrollTo(0, pageHeight * 2);
            changeBGC(0,0,1);
        }
    }
    else {
        if (window.scrollY >= pageHeight && window.scrollY < pageHeight*2) {
            window.scrollTo(0, 0);
            changeBGC(1,0,0);
        }
        else if (window.scrollY >= pageHeight*2) {
            window.scrollTo(0, pageHeight);
            changeBGC(0,1,0);
        }
    }

},{passive:false});


function changeBGC(firstColor,secondColor,thirdColor) {
    position_a[0].style.backgroundColor = firstColor === 1 ? 'rgba(255,255,255,.8)': 'transparent';
    position_a[1].style.backgroundColor = secondColor === 1 ? 'rgba(255,255,255,.8)': 'transparent';
    position_a[2].style.backgroundColor = thirdColor === 1 ? 'rgba(255,255,255,.8)': 'transparent';
}

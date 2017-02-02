
window.onload = function onLoad() {

var androidBar = new ProgressBar.Line('#android-skills', {
    strokeWidth: 2,
     color: '#FCB03C'
});
androidBar.animate(0.98, {duration: 2000, easing: 'easeInOut'});

var iosBar = new ProgressBar.Line('#ios-skills', {
    strokeWidth: 2,
     color: '#FCB03C'
});
iosBar.animate(0.78, {duration: 2000, easing: 'easeInOut'});

var angularBar = new ProgressBar.Line('#angular-skills', {
    strokeWidth: 2,
     color: '#FCB03C'
});
angularBar.animate(0.50, {duration: 2000, easing: 'easeInOut'});

var rorBar = new ProgressBar.Line('#ror-skills', {
    strokeWidth: 2,
     color: '#FCB03C'
});
rorBar.animate(0.50, {duration: 2000, easing: 'easeInOut'});

};

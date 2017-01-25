
window.onload = function onLoad() {
var progressBar = new ProgressBar.Line('#android-skills', {
    strokeWidth: 2,
     color: '#FCB03C'
});
progressBar.animate(0.78, {duration: 5000, easing: 'easeInOut'});
};

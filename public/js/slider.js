var slider = document.getElementById('slider');

var isdown = false;
var start;
var scrollLeft;

slider.addEventListener('mousedown',function(e){
    isdown = true;
    start = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
})

slider.addEventListener('mouseup',function(){
    isdown = false;
})

slider.addEventListener('mousemove',function(e){
    if(!isdown){return}
    var x = e.pageY - slider.offsetLeft;
    //console.log('scrollleft = '+scrollLeft);
    var scrollmove = x - start;
    //console.log('x= '+x+' ; start= '+start);
    slider.scrollLeft = scrollLeft - scrollmove;
    //console.log('scrollmove = '+scrollmove + 'scrollNOW = '+slider.scrollLeft);


})

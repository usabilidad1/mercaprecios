//<![CDATA[
var delay = 400; // la velocidad de las transiciones
var start_frame = 0; // comienza con la primera imagen

// esta es la función qu ejecuta las transiciones cada cierto tiempo
function start_slideshow(delay) {
setTimeout(fadeInOut(delay), delay);
}

// la función de las transiciones usando el efecto Appear se aplica a una lista cuyo ID es slide-images
function fadeInOut(delay) {
return(function() {
lis = $$('#slide-images>li');
new Effect.Appear(lis[1], { duration: 2, afterFinish: function(obj) {
lisFade = lis[0].remove();
lisFade.hide();
$('slide-images').appendChild(lisFade);
start_slideshow(delay);
}});
})
}

// todo se ejecuta cuando se termina de cargar la página
Event.observe(document, 'dom:loaded', function() {
var lis = $$('#slide-images>li');
if(lis.length > 1) for(i = 1; i < lis.length; i++) lis[i].hide();
});
Event.observe(window, 'load', function() {
if($$('#slide-images>li').length > 1) start_slideshow(delay);
});
//]]>

window.addEvent('domready', function(){
    var langSlider = new Fx.Slide('languages', {mode:'horizontal'});
    langSlider.hide();
    $('language').addEvent('click', function(e){
            e = new Event(e);
            langSlider.toggle();
            e.stop();
        });
});

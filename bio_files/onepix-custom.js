
// fade-in on page load---------------------------------------------------//


//helper function for sequental animations on different elements
function queue(start) {
    var rest = [].splice.call(arguments, 1),
        promise = jQuery.Deferred();

    if (start) {
        jQuery.when(start()).then(function () {
            queue.apply(window, rest);
        });
    } else {
        promise.resolve();
    }
    return promise;
}


jQuery(window).load(function() {

queue(function () {
    return jQuery(".full-width-img-wrap").animate({opacity:'1'}, "fast");
}, function () {
    return jQuery(".lazy-first").animate({opacity:'1'}, "fast");
}, function () {
    return jQuery(".lazy-second").animate({opacity:'1'}, "fast");
}, function () {
    return jQuery(".lazy-third").animate({opacity:'1'}, "fast");
});
                  
});


// hide placeholder text on click -------------------------------------------//

//jQuery(document).ready(function($){
//// Placeholder implementation
//    $('input[type=text]').each(function(){
//        $( this ).val($( this ).attr('placeholder'));
//    });    
//    $('input[type=text]').focus(function(){ 
//        if($( this ).val() === $( this ).attr('placeholder')){
//            $( this ).val('');
//        }
//    });
//    $('input[type=text]').blur(function(){
//        if($( this ).val() === ''){
//            $( this ).val($( this ).attr('placeholder'));
//        } 
//    });
//
//});



jQuery(document).ready(function() {
    
    //ensure if the panel is already down upon page refresh so it doesn't animate down
    already_foldown('#domain-options', jQuery('.price-calc input[name="domain"]'));
    already_foldown('#inquiry-fields', jQuery('.price-calc input[name="inquire"]'));
    
    //set the width of the foldown elements to prevent the 'jerk' at bottom of slidedown.
    jQuery('.price-calc .foldown').width(jQuery('.price-calc .foldown').parent().width());
    
    //fires just before page is refreshed
    calc();
    
    //fires when an input is entered or changed
    jQuery('.price-calc form input').change(function(){
        
        //animate foldown panels if checked
        option_foldown('#domain-options', jQuery('.price-calc input[name="domain"]'));
        option_foldown('#inquiry-fields', jQuery('.price-calc input[name="inquire"]'));
        
        calc();
    });

});

//only use 100% width when window resizes (otherzise width is calculated upon animation)
jQuery( window ).resize(function() {
    jQuery('.price-calc .foldown').width('100%');
});

//calculate cost from fields
function calc() {

    total = 0;

    //logo
    total += process_input('checkbox', jQuery('.price-calc input[name="logo"]'), 300);
        
    //domain .com 
    total += process_input('checkbox', jQuery('.price-calc input[name="domain-com"]'), 13);
        
    //domain .ca
    total += process_input('checkbox', jQuery('.price-calc input[name="domain-ca"]'), 16);
        
    //domain .us
    total += process_input('checkbox', jQuery('.price-calc input[name="domain-us"]'), 13);
        
    //domain .net
    total += process_input('checkbox', jQuery('.price-calc input[name="domain-net"]'), 13);
        
    //domain .org
    total += process_input('checkbox', jQuery('.price-calc input[name="domain-org"]'), 13);
        
    //domain .biz
    total += process_input('checkbox', jQuery('.price-calc input[name="domain-biz"]'), 13);
    
    //web hosting
    total += process_input('checkbox', jQuery('.price-calc input[name="web-hosting"]'), 84);
        
    //wordpress install
    total += process_input('checkbox', jQuery('.price-calc input[name="wordp-install"]'), 50);
        
    //home page
    total += process_input('checkbox', jQuery('.price-calc input[name="home-page"]'), 300);
        
    //landing pages
    total += process_input('text', jQuery('.price-calc input[name="landing-pages"]'), 175);
        
    //internal pages
    total += process_input('text', jQuery('.price-calc input[name="internal-pages"]'), 50);
        
    if(jQuery('.price-calc input[name="responsive"]').is(':checked') === true) {
        //add 15 percent total
        total += (total * 0.15);
    }
    if(jQuery('.price-calc input[name="analytics"]').is(':checked') === true) {
        total += 80;
    }
    if(jQuery('.price-calc input[name="maintenance"]').is(':checked') === true) {
        var discount = (total * 0.05);
        if (discount >= 100)
        {
            discount = 100
        }
        total -= discount;
    } 
        
    //total cost
    jQuery('.price-calc input[name="total"]').val(total);
    //update followins sidebox
    jQuery('#price-calc-side-follow .price').html(total);
        
}


//animate sliding panels
function option_foldown(element, controller){
        if(controller.is(':checked')) {
            if(jQuery(element).css('display') == 'none') {
                jQuery(element).slideDown();
            }
        }
        if(!controller.is(':checked')) {
            jQuery(element).slideUp();
        }
}

//prevent animation on panels on window refresh
function already_foldown(element, controller){
        if(controller.is(':checked')) {
            if(jQuery(element).css('display') == 'none') {
                jQuery(element).show();
            }
        }
        if(!controller.is(':checked')) {
            jQuery(element).hide();
        }
}

//make sure no letters are entered for number fields
function process_input(type, value, price){
    var subtotal = 0;
    if(type === 'text') {
        if(value.val()) {
            if(jQuery.isNumeric(value.val())) {
                value.removeClass('error-class');
                subtotal = (parseInt(value.val()) * price);
            } else {
                value.addClass('error-class');
//                alert('You must enter a number')
            }
        }
    } else if(type === 'checkbox') {
        if(value.is(':checked')) {
            subtotal += price;
        }
    }

    return subtotal;
}


            



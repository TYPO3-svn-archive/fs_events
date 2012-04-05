
jQuery(document).ready(function () {
    jQuery('.accordion .info').css('display','none');

    jQuery('div.accordion .open').click(function() {
        jQuery(this).css('outline','none');
        if(jQuery(this).parent().hasClass('current')) {
            jQuery(this).nextAll('.info').slideUp('slow',function() {
                jQuery(this).parent().removeClass('current');
                var mapId = jQuery(this).parent().find('.map_canvas').attr('id');
                jQuery('#'+ mapId + ' > div').hide('slow');
                //alert('test1');
                //$.scrollTo(this,1000);
            });
        } else {
            jQuery('div.accordion div.current .info').slideUp('slow',function() {
                jQuery(this).parent().removeClass('current');
                jQuery(this + '.map_canvas > div').hide('slow');
                //$('#'+ mapId +' > div').remove();
                //alert('test2');
            });
            jQuery(this).nextAll('.info').slideToggle('slow',function() {
                jQuery(this).parent().toggleClass('current');

                if(jQuery(this).parent().hasClass('current')) {
                    //alert(mapId);
                    var mapId = jQuery(this).parent().find('.map_canvas').attr('id');
                    var mapCoordinates = jQuery('#'+mapId).attr('rel');
                    //eval("if("+mapId+"_obj) { alert(); }");
                    //eval("alert();");
                    //initialize(mapId, mapCoordinates);
                    //alert('test');
                }
            });
            //$.scrollTo(this,1000);
        }
        return false;
    });

    jQuery(".ticket-hover").hover(function(){
        //alert('test ok');
        jQuery(this).find('.ticket-slideout').css({visibility: "visible",display: "none"}).slideDown(400);
    },function(){
        //alert('test out');
        jQuery(this).find('.ticket-slideout').stop(true,true).slideUp(400);
    })
});
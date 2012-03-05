
$(document).ready(function () {
    $('.accordion .info').css('display','none');

    $('div.accordion .open').click(function() {
        $(this).css('outline','none');
        if($(this).parent().hasClass('current')) {
            $(this).nextAll('.info').slideUp('slow',function() {
                $(this).parent().removeClass('current');
                var mapId = $(this).parent().find('.map_canvas').attr('id');
                $('#'+ mapId + ' > div').hide('slow');
                //alert('test1');
                //$.scrollTo(this,1000);
            });
        } else {
            $('div.accordion div.current .info').slideUp('slow',function() {
                $(this).parent().removeClass('current');
                $(this + '.map_canvas > div').hide('slow');
                //$('#'+ mapId +' > div').remove();
                //alert('test2');
            });
            $(this).nextAll('.info').slideToggle('slow',function() {
                $(this).parent().toggleClass('current');

                if($(this).parent().hasClass('current')) {
                    //alert(mapId);
                    var mapId = $(this).parent().find('.map_canvas').attr('id');
                    //eval("if("+mapId+"_obj) { alert(); }");
                    //eval("alert();");
                    initialize(mapId);
                    //alert('test');
                }
            });
            //$.scrollTo(this,1000);
        }
        return false;
    });
});
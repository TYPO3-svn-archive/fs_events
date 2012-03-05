//alert('deine mutter xD');

$(document).ready(function () {
    $('.accordion .info').css('display','none');

    $('div.accordion .open').click(function() {
        $(this).css('outline','none');
        if($(this).parent().hasClass('current')) {
            $(this).nextAll('.info').slideUp('slow',function() {
                $(this).parent().removeClass('current');
                //$.scrollTo(this,1000);
            });
        } else {
            $('div.accordion div.current .info').slideUp('slow',function() {
                $(this).parent().removeClass('current');
            });
            $(this).nextAll('.info').slideToggle('slow',function() {
                $(this).parent().toggleClass('current');
                if($(this).parent().hasClass('current')) {
                    var mapId = $(this).parent().find('.map_canvas').attr('id');
                    //alert(mapId);
                    initialize(mapId);
                    //alert('test');
                }

            });
            //$.scrollTo(this,1000);
        }
        return false;
    });
});
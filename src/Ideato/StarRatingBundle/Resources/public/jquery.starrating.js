jQuery(function($){
    $('.isr-rate').raty({
        path: '/bundles/ideatostarrating/images/',
        score: function() {
            return $(this).data('score');
        },
        click: function(score, evt) {
            var t = $(this);
            var url = t.data('route');
            var data = {
                contentId: t.data('contentid'),
                contentType: t.data('contenttype'),
                score: score
            };
            t.raty('readOnly', true);

            $.post(url, data)
                .done(function(result){
                    t.raty('score', result);
                    t.trigger('isr-rated', { score: score, average: result });
                })
                .fail(function(){
                    $('#msg').html('Please log in to vote');
                    t.raty('readOnly', false);
                });
        }
    });
});

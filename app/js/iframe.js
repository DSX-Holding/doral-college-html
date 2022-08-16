$(".open-text-block").click(function () {
    $(this).closest('.item--inner-content').find('.text-more').addClass('active');
    $(this).closest('.item--inner-content').addClass('active');
});

$(".open-text-block-2").click(function () {
    $(this).closest('.item--inner-content').find('.text-more').addClass('active-2');
    $(this).closest('.item--inner-content').addClass('active-2');
});

$(".close-text-block").click(function () {
    $(this).closest('.item--inner-content').find('.text-more').removeClass('active');
    $(this).closest('.item--inner-content').removeClass('active');
});
$(".close-text-block").click(function () {
    $(this).closest('.item--inner-content').find('.text-more').removeClass('active-2');
    $(this).closest('.item--inner-content').removeClass('active-2');
});

if ($(".various").length) {
    $(document).ready(function () {
        $(".various").fancybox({
            maxWidth: 2200,
            maxHeight: 1800,
            fitToView: false,
            width: '100%',
            height: '100%',
            autoSize: false,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none'
        });
    });
}
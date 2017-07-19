$( document ).ready(function() {
     $(".load-container").delay(100).fadeOut(250);
// menu
	$('.toggle-button').on('click', function() {
    slideout.toggle();
});
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70,
        'easing': 'cubic-bezier(.32,2,.55,.27)'
    });

// activemenu
var locations = window.location.href;
var cur_url = locations.split('/').pop();
 
    $('.menu-section-list li').each(function () {
        var link = $(this).find('a').attr('href');
 
        if (cur_url == link)
        {
            $(this).addClass('current');
        }
    });
// slick    



// $('.gallery-mob').slick({
//         // infinite: true,
//         // slidesToShow: 2,
//         // slidesToScroll: 2
// });
$('#filter').change(function()
 {
   $("#filter").submit(function() {
        // $(this).find(':input[type=submit]').prop('disabled', true);
        $.ajax({
            type: "GET",
            url: "catalog.php",
            data: $(this).serialize()
        }).done(function() {
            alert("lol");
        });
        return false;
    });
 });
});

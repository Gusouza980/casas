$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top,
                    },
                    1000,
                    function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) {
                            // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                    }
                );
            }
        }
    });

$(document).ready(() => {
    $(".s-hero").animate(
        {
            opacity: 1,
        },
        1500
    );

    $("select[name='pesquisa-casa'").select2();
});

$("._buttons ._next").click(function () {
    var cases = $(this).closest("div.container-fav").find("div._cases");
    cases.scrollLeft(cases.scrollLeft() + cases.width());
});

$("._buttons ._back").click(function () {
    var cases = $(this).closest("div.container-fav").find("div._cases");
    cases.scrollLeft(cases.scrollLeft() - cases.width());
});

// $(".s_details .container-fav ._showcase img").click((e) => {
//     if (document.fullscreenElement == null) e.target.requestFullscreen();
//     else document.exitFullscreen();
// });

$('button[name="toWhats"]').click(() => {
    window.open("https://api.whatsapp.com/send?phone=5535988326287&text=");
});

$("select[ name='pesquisa-casa']").change(() => {
    window.location.href = `/detalhe/${$("select[ name='pesquisa-casa']")
        .find(":selected")
        .attr("slug")}`;
});


var gallery_images = $('.s_details .container-fav ._showcase img');
var imageindex;

function getImage(image) {
    $('.fullscreen-image').toggleClass("showed")
    $('.fullscreen-image picture img').attr('src', $(image).attr('src'));

    imageindex = $(image).closest('div._picture').index();
    console.log(imageindex)
}






$(".fullscreen-image span").click(function() {
    $('.fullscreen-image').toggleClass("showed")
})

$(".s_details .container-fav ._showcase img").click(function() {
    getImage(this)
})

$(".fullscreen-image div button:nth-child(2)").click(() => {
    if(imageindex >= gallery_images.length - 1) return false;

    imageindex++;
    var source =  gallery_images[imageindex];


    $('.fullscreen-image picture img').attr('src', source.src);
})
$(".fullscreen-image div button:first-child").click(() => {
    if(imageindex <= 0) return false;

    imageindex--;
    var source =  gallery_images[imageindex];

    
    $('.fullscreen-image picture img').attr('src', source.src);
})
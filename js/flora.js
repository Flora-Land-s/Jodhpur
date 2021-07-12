$(document).ready(function () {

    $("img").click(function () {
        // Change src attribute of image

        var imgsrc = $(this).attr("src");
        if (imgsrc == $("#myimage").attr("src")) {
            console.log(imgsrc);
        } else {
            $("#myimage").attr("src", imgsrc);

            // $(this).css('box-shadow', '10px 10px 5px #000')
        }


    });

});
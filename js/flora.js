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

    $("#p-login").click(function () {
        if ($("#profile-login").is(":visible")) {
            $("#profile-login").hide();
        } else if ($("#profile-login").is(":hidden")) {
            $("#profile-login").show();
        }
    });


    $("#p-address").click(function () {
        if ($("#address").is(":visible")) {
            $("#address").hide();
        } else if ($("#address").is(":hidden")) {
            $("#address").show();
        }
    });

    // signup page

    $("#s-signup").click(function () {
            var s_name = $("#Name").val();
            var email = $("#Email").val();
            var phone = $("#Phone").val();
            var pass = $("#Password").val();
            var conf_pass = $("#Conf-password").val();
    });
});



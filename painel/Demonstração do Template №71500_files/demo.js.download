$(document).ready(function () {
    $(".btnSettingsToggle").click(function () {
        $('.settings').toggleClass("active");
    });
    $(".choose-theme").click(function (ele) {
        var curEle = $(this);
        var curTheme = $(this).attr("data-theme");

        $(".choose-theme").each(function (index, element) {
            $(element).removeClass("active");
            $('body').removeClass("theme-" + $(element).attr("data-theme"));
        });
        
        $.get("/Generics/ChangeTheme?theme=" + $(this).attr("data-theme"), function (data) {
            if (data === "OK") {
                //location.reload();
                $('body').addClass("theme-" + curTheme);
                $(curEle).addClass("active");
            }
        });
    });
    $(".btnSave").click(function (e) {
        if ($("#ID").val() !== 0) {
            e.preventDefault();
            alert("Disabled in demo mode");
        }
    });
});
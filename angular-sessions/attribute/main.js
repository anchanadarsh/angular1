// All custom codes with comment

$(document).ready(function () {
    $(".list-colleague li").click(function () {
        var getage = $(this).attr("setage");
        $(".show-age").text(getage);
    });
});

// window loading screen
$(window).on("load", function () {
    $(".table").hide();
    setInterval(() => {
        $(".loading").hide();
        $(".table").fadeIn("slow");
    }, 1000);
});

// create data action panel
$("#tombol-add").on("click", function (event) {
    event.preventDefault();
    $(".display-add").fadeIn("slow");
});

$(".tombol-edit").on("click", function (event) {
    event.preventDefault();
    $(".display-add").fadeIn("slow");
});

$("#tombol-guru").on("click", function (event) {
    event.preventDefault();
    $(".display-add").fadeIn("slow");
});

$("#tombol-kategori").on("click", function (event) {
    event.preventDefault();
    $(".display-kategori").fadeIn("slow");
});

// create pembayaran
$("#btn-add-pembayaran").on("click", function (event) {
    event.preventDefault();
    $(".display-add").fadeIn("slow");
    $(".table-pembayaran").hide();
});

$("#button-cancel").on("click", function () {
    $(".display-add").fadeOut("slow");
});
$("#button-cancel-edit").on("click", function () {
    $(".display-edit").fadeOut("slow");
});

$("#button-cancel-pembayaran").on("click", function () {
    $(".display-add").hide("slow");
    $(".table-pembayaran").fadeIn("slow");
});

$("#update-cancel").on("click", function () {
    $(".display-update").fadeOut("slow");
});

$("#button-cancel-kategori").on("click", function () {
    $(".display-kategori").fadeOut("slow");
});

setInterval(() => {
    $("#alertbox").hide("slow");
}, 4000);

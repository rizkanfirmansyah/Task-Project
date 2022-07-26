$(document).ready(function () {
    $("#btn-next").on("click", function () {
        let id = parseInt($(this).val());
        let btn = $(".button-wizard").length;
        console.log($(this).val());

        if (id <= 4) {
            $(".form-wizard").addClass("d-none");
            $(`#form-${id + 1}`).removeClass("d-none");
            $(`#wizard-btn-${id + 1}`).addClass("border-primary");
            $(`#wizard-btn-${id + 1}`).removeClass("border-secondary");
            $(`#wizard-btn-${id + 1} i`).removeClass("text-secondary");
            $(`#wizard-btn-${id + 1} i`).addClass("text-primary");
            $(this).val(id + 1);
            $("#btn-back").val(id + 1);

            if (id + 1 > 1) {
                $("#btn-back").removeClass("d-none");
            } else {
                $("#btn-back").addClass("d-none");
            }

            if (id + 1 === btn) {
                $("#btn-next").addClass("d-none");
                $("#btn-submit").removeClass("d-none");
            } else {
                $("#btn-next").removeClass("d-none");
                $("#btn-submit").addClass("d-none");
            }
        }
    });

    $("#btn-back").on("click", function () {
        let id = parseInt($(this).val());
        let btn = $(".button-wizard").length;

        console.log($(this).val());

        if (id > 0) {
            $(".form-wizard").addClass("d-none");
            $(`#form-${id}`).removeClass("d-none");

            if (id > 1) {
                $(`#wizard-btn-${id}`).addClass("border-secondary");
                $(`#wizard-btn-${id}`).removeClass("border-primary");
                $(`#wizard-btn-${id} i`).removeClass("text-primary");
                $(`#wizard-btn-${id} i`).addClass("text-secondary");
                $(this).val(id - 1);
                $("#btn-next").val(id - 1);
            }

            if (id > 1) {
                $("#btn-back").removeClass("d-none");
            } else {
                $("#btn-back").addClass("d-none");
            }

            if (id + 1 === btn) {
                $("#btn-next").addClass("d-none");
                $("#btn-submit").removeClass("d-none");
            } else {
                $("#btn-next").removeClass("d-none");
                $("#btn-submit").addClass("d-none");
            }
        }
    });
});

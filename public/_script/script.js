const btn = document.querySelector(".header__cart-button");
const aside = document.querySelector(".aside");
const closeBtn = document.querySelector(".aside__close-btn");

btn.addEventListener("click", function () {
    aside.classList.add("show");
    document.body.style.overflow = "hidden";
});

closeBtn.addEventListener("click", function () {
    aside.classList.remove("show");
    document.body.style.overflow = "auto";
});

aside.addEventListener("click", function (event) {
    if (event.target === aside) {
        aside.classList.remove("show");
        document.body.style.overflow = "auto";
    }
});

$(".btn-product-buy").on("click", function () {
    $(".popup-pay-fade").fadeIn();
    $(".popup-section").fadeIn();
});

// закрытие по нажатию на X
$(".popup-pay-close").click(function (e) {
    e.preventDefault();
    $("body").removeClass("modal-open");
    $(".popup-section").fadeOut();
    $(".popup-pay-fade").fadeOut();
});

// закрытие по нажатию на задний фон
$(".popup-pay-fade").click(function (e) {
    $(".popup-section").fadeOut();
    $(".popup-pay-fade").fadeOut();
});

// закрытие через esc
$(document).keydown(function (e) {
    if (e.keyCode === 27) {
        $(".popup-section").fadeOut();
        $(".popup-pay-fade").fadeOut();
        $("body").removeClass("modal-open");
    }
});


// авторизация

$(function(){
    $('#login_form').on('submit', function(e){
        e.preventDefault()
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            beforeSend: function(){
                $('.error-text').hide();
            },
            success:function(data){
                if (data.success) {
                    window.location.href = '/';
                }
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                $('.email_error').text(errors.email ? errors.email[0] : '');
                $('.email_error').css('display', 'flex');
            }
        })
    })
})


$(function() {
    $('#addJournal-form').on('submit', function(e) {
        e.preventDefault()
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            beforeSend: function(){
                $('.error-text').hide();
            },
            success:function(data){
                if (data.success) {
                    window.location.href = '/';
                }
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                console.log(errors)
                $('.name_error').text(errors.name ? errors.name[0] : '');
                $('.name_error').css('display', 'flex');
            }
        })
    })
})


$(window).load(function() {
    if ($('#form1 input').valid() === false) {
        $('.nxt__btn').prop('disabled', true);
    } else if ($('#form2 input').valid() === false) {
        $('.nxt__btn').prop('disabled', true);
    }

})
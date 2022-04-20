$('.qty-plus').on('click',function() {
    let thisQtyInput = $(this).parent().find('.qty');
    let thisMax = parseInt(thisQtyInput.attr('max'));
    let thisQtyVal = thisQtyInput.val();
    let thisQtyIncreased = parseInt(thisQtyVal) + 1;

    if($.isNumeric(thisMax) == true) {
        if (thisQtyIncreased <= thisMax) {
            thisQtyInput.val(thisQtyIncreased);
        }
    } else {
        thisQtyInput.val(thisQtyIncreased);
    }
});

$('.qty-minus').on('click', function() {
    let thisQtyInput = $(this).parent().find('.qty');
    let thisQtyVal = thisQtyInput.val();
    let thisQtyDecreased = parseInt(thisQtyVal) - 1;

    if(thisQtyDecreased > 0) {
        thisQtyInput.val(thisQtyDecreased);
    }
})

	// equal height on each elements 
    function eq_height(selector, correlation) {
        var maxHeight = 0;
        $(selector).each(function(){
            if ( $(this).height() > maxHeight ) {
                maxHeight = $(this).height() + correlation;
                console.log(selector + ":" + maxHeight);
            }
        });
        $(selector).height(maxHeight);
    }

    eq_height('.catalog-item', 20);
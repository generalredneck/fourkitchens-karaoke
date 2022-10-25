// Add class

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const letterQuery = urlParams.get('starts-with')

urlParams.has('starts-with')

jQuery(function($){
    $('#block-glossarylinks li a').each(function(){
        if ($(this).text() == letterQuery) {
            $(this).addClass('active');
        }
    });
});
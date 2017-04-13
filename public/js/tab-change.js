$(document).ready(function () {
    loadDataOnReady();
    loadDataOnClick();
});

function loadDataOnReady() {
    var wizardContent = $('.wizard-content');
    //Get "data-for" attribute and find element
    var dataFor = $('.wizard-menu .wizard-item.active').attr('data-for');
    var elementFor = $(dataFor);

    var dataLoad = elementFor.attr('data-load');

    //        Check if attribute does exist
    //        If true then load ajax, else load from div
    if (typeof dataLoad !== 'undefined' && dataLoad !== false) {
        //Load content ajax
        wizardContent.load(dataLoad);
    } else {
        wizardContent.html(elementFor.html());
    }
}

function loadDataOnClick() {
    var wizardButtons = $('.wizard-menu .wizard-item');
    var wizardContent = $('.wizard-content');

    wizardButtons.on('click', function (event) {
        event.preventDefault();
        //Change active state
        wizardButtons.removeClass('active');
        wizardButtons.parent('li').removeClass('active');
        $(this).addClass('active');
        $(this).parent('li').addClass('active');


        //Get "data-for" attribute and find element
        var dataFor = $(this).attr('data-for');
        var elementFor = $(dataFor);

        var dataLoad = elementFor.attr('data-load');

        //        Check if attribute does exist
        //        If true then load ajax, else load from div
        if (typeof dataLoad !== 'undefined' && dataLoad !== false) {
            //Load content ajax
            wizardContent.load(dataLoad);
        } else {
            wizardContent.html(elementFor.html());
        }
    });
}
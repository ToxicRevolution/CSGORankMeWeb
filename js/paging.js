$.fn.pageMe = function(opts){
var $this = this,
    defaults = {
        perPage: 10,
        showPrevNext: false,
        numbersPerPage: 5,
        hidePageNumbers: false,
        showFirstLast: true
    },
    settings = $.extend(defaults, opts);

var listElement = $this;
var perPage = settings.perPage; 
var children = listElement.children();
var pager = $('.pagination');

if (typeof settings.childSelector!="undefined") {
    children = listElement.find(settings.childSelector);
}

if (typeof settings.pagerSelector!="undefined") {
    pager = $(settings.pagerSelector);
}

var numItems = children.size();
var numPages = Math.ceil(numItems/perPage);

pager.data("curr",0);

if (settings.showFirstLast){
    $('<li><a href="#" class="first_link"><</a></li>').appendTo(pager);
}     
if (settings.showPrevNext){
    $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
}

var curr = 0;
while(numPages > curr && (settings.hidePageNumbers==false)){
    $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
    curr++;
}

if (settings.numbersPerPage>1) {
   $('.page_link').hide();
   $('.page_link').slice(pager.data("curr"), settings.numbersPerPage).show();
}

if (settings.showPrevNext){
    $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
}
if (settings.showFirstLast){
    $('<li><a href="#" class="last_link">></a></li>').appendTo(pager);
}  

pager.find('.page_link:first').addClass('active');
pager.find('.prev_link').hide();
if (numPages<=1) {
    pager.find('.next_link').hide();
}
pager.children().eq(2).addClass("active");

children.hide();
children.slice(0, perPage).show();

pager.find('li .page_link').click(function(){
    var clickedPage = $(this).html().valueOf()-1;
    goTo(clickedPage,perPage);
    return false;
});
pager.find('li .first_link').click(function(){
    first();
    return false;
});  

pager.find('li .prev_link').click(function(){
    previous();
    return false;
});
pager.find('li .next_link').click(function(){
    next();
    return false;
});
pager.find('li .last_link').click(function(){
    last();
    return false;
});    
function previous(){
    var goToPage = parseInt(pager.data("curr")) - 1;
    goTo(goToPage);
}

function next(){
    goToPage = parseInt(pager.data("curr")) + 1;
    goTo(goToPage);
}

function first(){
    var goToPage = 0;
    goTo(goToPage);
} 

function last(){
    var goToPage = numPages-1;
    goTo(goToPage);
} 

function goTo(page){
    var startAt = page * perPage,
        endOn = startAt + perPage;

    children.css('display','none').slice(startAt, endOn).show();

    if (page>=1) {
        pager.find('.prev_link').show();
    }
    else {
        pager.find('.prev_link').hide();
    }

if (page < (numPages - settings.numbersPerPage)) {
        pager.find('.next_link').show();
    }
    else {
        pager.find('.next_link').hide();
    }

    pager.data("curr",page);

if (settings.numbersPerPage > 1) {
    $('.page_link').hide();

    if (page < (numPages - settings.numbersPerPage)) {
        $('.page_link').slice(page, settings.numbersPerPage + page).show();
    }
    else {
        $('.page_link').slice(numPages-settings.numbersPerPage).show();
    }
}

    pager.children().removeClass("active");
    pager.children().eq(page+2).addClass("active");

}
};
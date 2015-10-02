jQuery(document).ready(function($) { //noconflict wrapper
    //Bootstrap style button for comment submit button.
    $('#commentform input#submit').addClass('btn btn-primary');
    // Bootstrap style button for comment reply link.
    $( '.comment-reply-link' ).addClass( 'btn btn-primary' );
    // Bootstrap style for SELECT
    $( type="select" ).addClass( 'form-control' );
    // Bootstrap style for Tables
    $( 'table' ).addClass( 'table' );
    // FitVids for responsive videos. Target your .container, .wrapper, .post, etc.
    $(".post, .comment-content").fitVids();


    var contentElem = $('#primary-right .entry-content');
    var contentElemP = $('#primary-right .nano');
    var contentElemtop = contentElem.offset().top; 
    var winH = $(window).height();
    var footerH = $('#colophon').outerHeight();
    var contentElemH = winH - 10 - footerH - contentElemtop;
    contentElemP.height(contentElemH + 10);
    contentElem.height(contentElemH);

    //$('#primary-right .entry-content').jScrollPane({
    //    contentWidth: '0px'
    //});
    $(".nano").nanoScroller({ alwaysVisible: true });
});//end noconflict

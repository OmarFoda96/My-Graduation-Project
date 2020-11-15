$(document).ready(function() {

  $('.booking').click(function()
                     {
                          window.location.href= 'booking.php';
                     });  
    $('.electronicArchive').click(function()
                     {
                          window.location.href= 'electronicArchive.php';
                     });  
    $('.bloodBank').click(function()
                     {
                          window.location.href= 'bloodBank.php';
                     });
    $('.bookingar').click(function()
                     {
                          window.location.href= 'bookingar.php';
                     });  
    $('.electronicArchivear').click(function()
                     {
                          window.location.href= 'electronicArchivear.php';
                     });  
    $('.bloodBankar').click(function()
                     {
                          window.location.href= 'bloodBankar.php';
                     });
    $('.mLogo').click(function()
                     {
                          window.location.href= 'index.php';
                     });
    $('.medicalrays').click(function()
                     {
                          window.location.href= 'medicalRays.php';
                     });
    $('.analysis').click(function()
                     {
                          window.location.href= 'analysis.php';
                     });
    $('.adweya').click(function()
                     {
                          window.location.href= 'adweya.php';
                     });
    $('.medicalraysar').click(function()
                     {
                          window.location.href= 'medicalraysar.php';
                     });
    $('.analysisar').click(function()
                     {
                          window.location.href= 'analysisar.php';
                     });
    $('.adweyaar').click(function()
                     {
                          window.location.href= 'adweyaar.php';
                     });
    
var customScripts = {
    onePageNav: function () {

        $('#mainNav').onePageNav({
            currentClass: 'active',
            changeHash: false,
            scrollSpeed: 950,
            scrollThreshold: 0.2,
            filter: '',
            easing: 'swing',
            begin: function () {
            },
            
        });
		
		$("a[href='#top']").click(function () {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });
			$("a[href='#basics']").click(function () {
                $("html, body").animate({ scrollTop: $('#services').offset().top - 75 }, "slow"); 
                return false;
            });
    }, 

    init: function () {
        customScripts.onePageNav();
    }
}
$('document').ready(function () {
    customScripts.init();
});

});


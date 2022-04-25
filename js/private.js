
$('.clc-tab').click(function(){
  var tab_id = $(this).attr('data-tab');
  $('.clc-tab').removeClass('active');
  $('.tab-content').removeClass('active');
  $(this).addClass('active');
  $("#"+tab_id).addClass('active');
})

$('.tab-form a').click(function(){
  var tab_id = $(this).attr('data-tab');
  $('.tab-form a').removeClass('active');
  $('.regis-acc').removeClass('active');
  $(this).addClass('active');
  $("#"+tab_id).addClass('active');
})


$(document).on("click", "i.del", function() {
    $(this).parent().remove();
});
$(function() {
    $(document).on("change", ".uploadFile", function() {
        var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; 

        if (/^image/.test(files[0].type)) { 
            var reader = new FileReader(); 
            reader.readAsDataURL(files[0]);

            reader.onloadend = function() { 
                uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url(" + this.result + ")");
                uploadFile.closest(".imgUp").addClass('active');
            }
        }

    });
});

$('.clc-menu').click(function(e){
  e.preventDefault();

  $('.nav-menu').removeClass('active');
  var target = $($(this).attr('href'));
  if(target.length){
    var scrollTo = target.offset().top - 80;
    $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
  }
});

$('.btn-bar-menu a').click(function(event) {
    $('.nav-menu').toggleClass('active');
});
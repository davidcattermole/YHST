!function ($) {

  $(function(){


    // Carousel
    $('#quoteCarousel').carousel()

    // Javascript to enable link to tab
    var hash = document.location.hash;
    var prefix = "";
    if (hash) {
        $('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
    } 

    // Change hash for page-reload
    $('.nav-tabs a').on('shown', function (e) {
        window.location.hash = e.target.hash.replace("#", "#" + prefix);
    });


    // Forgotten password link to tab
    $('.forgotLink').click(function (e) {
      e.preventDefault();
      $('.nav-tabs a').tab('show');
    });



    // Sign up form   
    $.urlParam = function(name){
      var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
      if(results) {
        return results[1] || 0;
      }
    
      return '';
    }

    function urldecode(url) {
      return decodeURIComponent(url.replace(/\+/g, ' '));
    }

    $(function() {

      $('#reg input').each(function(){
        var v = $.urlParam($(this).attr('name'));
        if(v) {
            $(this).val(urldecode(v));
        }
      });

      var err = $.urlParam('error_msg');
      if(err) {
        $('<div class="alert alert-error">').html(urldecode(err)).insertBefore('#reg');
      }
    });



    // Public ticket form

    $(function() {
      $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if(results) {
          return results[1] || 0;
        }
        return '';
      }
    
      $('#api-public-ticket form input').each(function(){
        var v = $.urlParam($(this).attr('name'));
        if(v) {
          $(this).val(decodeURIComponent(v.replace(/+/g, ' ')));
        }
      });

      var err = $.urlParam('error_msg');
      if(err) {
        $('<div class="alert alert-error">').html(decodeURIComponent(err.replace(/+/g, ' ')))
        .prependTo('#api-public-ticket');
      }
    });



    // Login form validation

    function echeck(str) {
      var err = "Please enter a valid email address";
      var at="@"
      var dot="."
      var lat=str.indexOf(at)
      var lstr=str.length
      var ldot=str.indexOf(dot)
      
      if (str.indexOf(at)==-1){
        alert(err)
        return false
      }

      if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
        alert(err)
        return false
      }

      if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
        alert(err)
        return false
      }

      if (str.indexOf(at,(lat+1))!=-1){
        alert(err)
        return false
      }

      if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
        alert(err)
        return false
      }

      if (str.indexOf(dot,(lat+2))==-1){
        alert(err)
        return false
      }

      if (str.indexOf(" ")!=-1){
        alert(err)
        return false
      }

      return true
    }

  function ValidateForm(){
    var emailID=document.controlLogin.email
    var ps=document.controlLogin.password

    if ((emailID.value==null)||(emailID.value=="")){
      alert("Please enter email address");
      emailID.focus();
      return false
    }
    
    if (echeck(emailID.value)==false){
      emailID.focus();
      return false
    }
    
    if (ps.value==''){
      ps.focus();
          alert("Please enter password");
      return false
    }
    return true
   }


  });

}(window.jQuery)
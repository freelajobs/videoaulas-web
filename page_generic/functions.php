<!-- scripts end here-->
<script type="text/javascript">

   // Start Loading Animation
   window.addEventListener('DOMContentLoaded', function()
   {
      new QueryLoader2(document.querySelector("body"), {
        barColor: "#efefef",
        backgroundColor: "#111",
        percentage: true,
        barHeight: 1,
        minimumTime: 200,
        fadeOutTime: 1000
      });

      new WOW().init();
   });
   // Start Wow Effect

   // Set year Copyright
   $("#footer_copyright").text("Todos os direitos reservados © - " + (new Date).getFullYear());

   // Function Scroll to Top Page
   function ScrollTop() {
      $("html, body").animate({ scrollTop: 0 }, "slow");
   }

   // Function Load Page
   function LoadUrl(name) {
      window.location.href = "https://" + name;
   }

   function LoadPage(name) {
      window.location.href = name + ".php";
   }

   function LoadAnotherPage(name) {
      window.location.href = name;
   }

   // Function Load Page
   function BackPage() {
      window.history.back();
   }
   
   function launchWindow(id) {
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({
            'width': maskWidth,
            'height': maskHeight
        });
        $('#mask').fadeIn(0);
        $('#mask').fadeTo("fast", 0.8);
        var winH = $(window).height();
        var winW = $(window).width();
        $(id).css('top', winH / 2 - $(id).height());
        $(id).css('left', winW / 2 - $(id).width() / 2);
        $(id).fadeIn(0);
    }

  function ReqServer(_url, _formData, _func, _post = "POST")
  {
      $.ajax({
          url: _url,
          type: _post,
          data: _formData,
          processData: false,
          contentType: false,
          success: function (response) {
              _func(true, response);
          },
          error: function (jqXHR, textStatus, errorMessage) {
              _func(false, errorMessage);
          }
      });
  }

  const BUTTON_WARNING = "warning";
  const BUTTON_SUCCESS = "success";
  const BUTTON_ERROR = "error";

  function Alert(_title, _text, _func = null, _warning = BUTTON_WARNING)
  {
      swal({
          title: _title,
          text: _text,
          icon: _warning,
          confirm: true,
          dangerMode: false
      }).then((confirm) => {
          if (_func !== null)
              _func(confirm);
      });
  }
    
  function OnHoverChangeImage(
      tag, 
      img_tag, 
      img_normal, 
      img_hover, 
      func_open = null, 
      func_close = null
  ) {
    $("#"+tag).hover(function() {
            $('#' + img_tag).css({
                content: 'url('+ img_hover +')'
            });
            if (func_open != null)
                func_open();
        }, function() {
            $('#' + img_tag).css({
                content: 'url('+ img_normal +')'
            });
            if (func_close != null)
            func_close();
        }
    );
  }

  function ApplyNeonButtonEffect(tag, radius, color, radiusBase = 10){
      ApplyNeon(tag, radius, color);
      $('#'+tag).mouseenter(function() {
          ApplyNeon(tag, radius + radiusBase, color);
      }).mouseleave(function() {
          ApplyNeon(tag, radius, color);
      });
  }

  function ApplyNeon(tag, radius, color){
      $("#"+tag).glow({
          radius: ""+radius,
          color: color
      });
  }

</script>

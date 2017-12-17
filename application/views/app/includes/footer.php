      </div> 
    </div>
  </div>
</div>

<script src="<?php echo ASSETS_URL ?>js/plugins.js" type="text/javascript"></script>
<script src="<?php echo ASSETS_URL ?>js/main.js" type="text/javascript"></script>
<!-- ========== DatetimeCall Start ========== -->
<script src="<?php echo ASSETS_URL ?>js/datetimecall.js" type="text/javascript"></script>
<!-- ======== Agenda JS START ========== -->
<script src="<?php echo ASSETS_URL ?>js/agenda.js" type="text/javascript"></script>
<!-- ========== Side Bar.JS ========== -->
<script src="<?php echo ASSETS_URL ?>js/sidebar.js" type="text/javascript"></script>

<!-- ========== Nav Menu Hide Show ========== -->
<script type="text/javascript">
  $(document).ready(function(){
   $(".visible").on('click',function(){
    $("#main").hide(500);
    $('.sidenav').parent().addClass('col-md-2').removeClass('col-md-1');
    $('.admin-content').addClass('col-md-10').removeClass('col-md-11');
   });
  $(".closebtn").on('click',function(){
    $("#main").show(500);
    $('.sidenav').parent().addClass('col-md-1').removeClass('col-md-2');
    $('.admin-content').addClass('col-md-11').removeClass('col-md-10');
    });
  });
</script> 

<script type="text/javascript">
  $(document).ajaxStart(function() { Pace.restart(); });

  $(document).ready(function(){

    $('.nav-pills li a').on('click',function (e) {
      
      var goToURL = $(this).attr('href');

      $.ajax({
        url: goToURL,
        type: 'POST',
        async: true,
        success: function(data, textStatus, xhr) {
          if(xhr.status===200) {
            document.getElementById("user").innerHTML = data;
            $('.admin-content').html(data);
            window.history.pushState({"html":data}, null, goToURL);
            if (/dashboard/.test(self.location.href)) {
              var c = new Cal("divCal");      
              c.showcurr();
              document.getElementById('btnNext').onclick = function() {
                c.nextMonth();
              };
              document.getElementById('btnPrev').onclick = function() {
                c.previousMonth();
              };
              document.getElementById("do-time").innerHTML = formatTime();
            } else {
              $('.admin-content').append('<p style="display:none;" id="do-time"></p>');
            }

          }
        },
        error: function(xhr, textStatus, errorThrown) {
          //called when there is an error
        }
      });
      
    
    });

  });

  window.onpopstate = function(e){
    Pace.restart();
    if(e.state){
        document.getElementById("user").innerHTML = e.state.html;
        if (/dashboard/.test(self.location.href)) {
          var c = new Cal("divCal");      
          c.showcurr();
          document.getElementById('btnNext').onclick = function() {
            c.nextMonth();
          };
          document.getElementById('btnPrev').onclick = function() {
            c.previousMonth();
          };
          document.getElementById("do-time").innerHTML = formatTime();
        } else {
            $('.admin-content').append('<p style="display:none;" id="do-time"></p>');
        }
    }
  };
</script>

    </body>
</html>

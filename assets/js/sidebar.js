function openNav() {
            document.getElementById("mySidenav").style.width = "220px";
            document.getElementById("main").style.marginLeft = "220px";
        }

function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }
       



$(document).ready(function()
          {
              var navItems = $('.admin-menu li > a');
              var navListItems = $('.admin-menu li');
              var allWells = $('.admin-content');
              var allWellsExceptFirst = $('.admin-content:not(:first)');
              
              allWellsExceptFirst.hide();
              navItems.click(function(e)
              {
                  e.preventDefault();
                  navListItems.removeClass('active');
                  $(this).closest('li').addClass('active');
                  
                  allWells.hide();
                  var target = $(this).attr('data-target-id');
                  $('#' + target).show();                 
              });
            });
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sora">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css_navbar.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>ABOUTUS</title>
  </head>
  <body>
    <!--Search Modal -->
    <div class="modal fade" id="searchmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="search-bar" action="/action_page.php">
                        <input class="input-search" type="text" placeholder="Search.." name="search">
                        <button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="cart_modal modal fade" id="CartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img src="https://img.icons8.com/material/28/000000/shopping-cart--v1.png"/>
                <h5 class="modal-title" style="margin-left: 10px;" id="exampleModalLabel">Cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!---Cart Card--->
                <div class="phone-card card mb-3" style="max-width: 765px;">
                    <div class="row no-gutters">
                        <div class="col-sm-2">
                            <center>
                            <img class="phone" src="asset/phone.png" width="60" height="70" alt="...">
                            </center>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body">
                                <h5>Title</h5>
                                <p class="price">x.xxx.xxx</p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                        <center>
                            <!--COUNTER-->
                            <div class="container">
                                <div class="count-input space-bottom">
                                    <a class="incr-btn" data-action="decrease" href="#">–</a>
                                    <input class="quantity" type="text" name="quantity" value="1"/>
                                    <a class="incr-btn" data-action="increase" href="#">&plus;</a>
                                </div>
                                <div class="trash">
                                    <img src="https://img.icons8.com/material-outlined/24/000000/trash--v1.png"/>
                                </div>
                            </div>    
                        </center>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal footer-->
            <div class="modal-footer">
                <div class="card mb-3" style="width: 765px;background-color:#22577A;">
                    <div class="row no-gutters" style="background-color: transparent;">
                        <div class="col-md-9 my-auto">
                            <p class="label">Total Price : </p> 
                            <p class="nominal">x.xxx.xxxx</p>
                        </div>
                        <div class="col-md-3">
                        <div class="card-body text-center mx-auto">
                            <button type="button" class="btn btn-light" style="background-color:#F8F8FA" >Check Out</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container" >
        <div class="content" style="margin-left:35px; margin-right:55px; margin-top: 140px">
            <H3 class="font-weight-bold" style="margin-bottom: -30px">About Us</H3>
            <center>
            <img src="<?php echo base_url(); ?>assets/logo/logohitam.png"  class="img-fluid" style="height: 250px; margin-top: 40px;">
            </center>

            <p>DinusShop adalah web buatan tim ManPro 02 yang berfokus di review elektronik terutama gadget. Berawal dari project tugas manajemen proyek, tim kami membuat website
jual beli yang membuat customer mudah dalam mencari gadget yang mereka butuhkan, atau sekedar melihat review dan spek dari gadget yang ada di pasaran. DinusShop terbuka untuk
seluruh kalangan masyarakat dalam memudahkan mencari dan membeli gadget sesuai budget yang dimiliki.</p>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>$('#myModal').modal({backdrop: 'static', keyboard: true})  </script>
    <script>
      /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>
    <script>
        $(".incr-btn").on("click", function (e) {
        var $button = $(this);
        var oldValue = $button.parent().find('.quantity').val();
        $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
        if ($button.data('action') == "increase") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below 1
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
                $button.addClass('inactive');
            }
        }
        $button.parent().find('.quantity').val(newVal);
        e.preventDefault();
    });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
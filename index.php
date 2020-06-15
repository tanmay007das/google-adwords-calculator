<?php
     # include('controller/loginform.php');
     $option ="";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Leads Information</title>
    
    <style>
     .wdt{
       width:160px !important;
     }
     .cusht{
       height:500px !important;
     }
     .restl{
       border:3px solid;
       padding: 5px 15px;
       height:30px;
     }
    </style>
     
    </head>
  <body>  
  <!--header-->   
   <header class="container-fluid">
    <div class="row bg-warning">
      <div class="col-md-12">
        <div class="display-3 text-center my-5">Google Adwords Calculator</div>
      </div>
    </div>
   </header>
<!--header ends-->  
  <main class="container mt-3">
    <div class="row">
      <div class="col-md-2 bg-secondary text-light cusht">
        <p class="text-center mt-3 font-weight-bold">Calculate</p>
        <button class="btn btn-primary mb-2 px-5 wdt" id="cpc">CPC</button>
        <button class="btn btn-primary mb-2 px-5 wdt" id="cpm">CPM</button>
        <button class="btn btn-primary mb-2 px-5 wdt" id="ctr">CTR</button>
        <button class="btn btn-primary mb-2 px-5 wdt" id="cpa">CPA</button>
        <button class="btn btn-primary mb-2 px-5 wdt" id="cr">CR </button>
        <button class="btn btn-primary mb-2 px-5 wdt" id="roi">ROI</button>
      </div>
      <div class="col-md-8">
        <!--Form-->
          <p class="mb-4 restl pb-3" id="output"></p>
          
          <div id="form">


        </div>
        <!--Form Ends-->
      </div>
      <div class="col-md-2 bg-secondary"></div>
    </div>
  </main>



    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>  
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
     <!--CPC-->
     <script>
      function cpc(){
        $.ajax({
                    url:"controller/load.php",
                    type:"POST",
                    
                success:function(d){
                $("#form").html(d);
                if(d){
                  $("#submitcpc").click(function(e){
                    e.preventDefault();
                    var spnd = $("#spend").val();
                    var totclks = $("#totalclicks").val();
                    $.ajax({
                      url:"controller/cpccal.php",
                      type:"POST",
                      data:{
                        spend:spnd,
                        totalclk:totclks
                      },
                      success:function(x){
                        $("#output").html(x);
                      }
                    });
                    
                  });
                }
             }  
          });      
      }
      cpc();
      </script>
      
      <script>
      //CPC Button click load
      $("#cpc").click(function(e){
        e.preventDefault();
        cpc();
        
      });
      </script>
      
      <script>
      $("#cpm").click(function(e){
        e.preventDefault();
        $.ajax({
                    url:"controller/loadcpm.php",
                    type:"POST",
                    
                success:function(d){
                $("#form").html(d);
                if(d){
                  $("#submitcpm").click(function(k){
                    k.preventDefault();
                    var totspnd = $("#totspnd").val();
                    var totimpr = $("#totimprs").val();
                    $.ajax({
                      url:"controller/cpmcal.php",
                      type:"POST",
                      data:{
                        totspnd:totspnd,
                        totimpr:totimpr
                      },
                      success:function(x){
                        $("#output").html(x);
                      }
                    });
                  });
                }
             }  
          }); 
      });
     </script>
      <script>
      $("#ctr").click(function(e){
        e.preventDefault();
        $.ajax({
                    url:"controller/loadctr.php",
                    type:"POST",
                    
                success:function(d){
                $("#form").html(d);
                if(d){
                  $("#submitctr").click(function(k){
                    k.preventDefault();
                    var totclks = $("#totclks").val();
                    var totimprs = $("#totimprs").val();
                    $.ajax({
                      url:"controller/ctrcal.php",
                      type:"POST",
                      data:{
                        totclks:totclks,
                        totimprs:totimprs
                      },
                      success:function(x){
                        $("#output").html(x);
                      }
                    });
                  });
                }
             }  
          }); 
      });
      </script>
      <script>
      $("#cpa").click(function(e){
        e.preventDefault();
        $.ajax({
                    url:"controller/loadcpa.php",
                    type:"POST",
                    
                success:function(d){
                $("#form").html(d);
                if(d){
                  $("#submitcpa").click(function(k){
                    k.preventDefault();
                    var totspnd   = $("#totspnd").val();
                    var totconver = $("#totconver").val();
                    $.ajax({
                      url:"controller/cpacal.php",
                      type:"POST",
                      data:{
                        totspnd:totspnd,
                        totconver:totconver
                      },
                      success:function(x){
                        $("#output").html(x);
                      }
                    });
                  });
                }
             }  
          }); 
      });
      </script>
      <script>
      $("#cr").click(function(e){
        e.preventDefault();
        $.ajax({
                    url:"controller/loadcr.php",
                    type:"POST",
                    
                success:function(d){
                $("#form").html(d);
                if(d){
                  $("#submitcr").click(function(k){
                    k.preventDefault();
                    var totlconv = $("#totlconv").val();
                    var totlclks = $("#totlclks").val();
                    $.ajax({
                      url:"controller/crcal.php",
                      type:"POST",
                      data:{
                        totlconv:totlconv,
                        totlclks:totlclks
                      },
                      success:function(x){
                        $("#output").html(x);
                      }
                    });
                  });
                }
             }  
          }); 
      });
      </script>
      <script>
      $("#roi").click(function(e){
        e.preventDefault();
        $.ajax({
                    url:"controller/loadroi.php",
                    type:"POST",
                    
                success:function(d){
                $("#form").html(d);
                if(d){
                  $("#submitroi").click(function(k){
                    k.preventDefault();
                    var rev = $("#rev").val();
                    var cost = $("#cost").val();
                    $.ajax({
                      url:"controller/roical.php",
                      type:"POST",
                      data:{
                        rev:rev,
                        cost:cost
                      },
                      success:function(x){
                        $("#output").html(x);
                      }
                    });
                  });
                }
             }  
          }); 
      });
      
     </script>
     <!--
     <script>
        $(document).ready(function(){
         $("#submitcpc").click(function(e){
          e.preventDefault();
          alert("Coding sucks");
         });
    });
    </script>
    
    <script>
        $(document).ready(function(){
         $("#submitcpc2").click(function(e){
          e.preventDefault();
          alert("Coding doesn't suck");
         });
    });
    </script>
    <!--<script src="controller/login.js"></script>
    <script>
            
      $(document).ready(function(){
      // $("#submit").click(function(e){
        $("#frm").submit(function(e){
        e.preventDefault();
        var name = $('#busname').val();
        var about = $('#about').val();
        var categ = $('#category').val();
        var phn = $('#phone').val();
        var addr = $('#address').val();
        var url = $('#url').val();
        var country = $('#country').val();
      
   
        if($('#check').is(":checked")){
            if(name=="" || url==""){
                alert("Please enter all the mandatory fields");
            }
            else{
                // Look for "Phone Number"
                //var num = /^['0-9']+$/;
                var phoneno = /^[0-9][0-9]{9}$/;
                
                if(phoneno.test(phn) || phn==""){
                    $.ajax({
                    url:"controller/registerdata.php",
                    type:"POST",
                    data:{
                        bisname: name,
                        about: about,
                        category: categ,
                        phn: phn,
                        address: addr,
                        url: url,
                        country: country
                },
                success:function(d){
                alert(d);
             }  
          });         
       }else{
           alert("Not a valid Phone number");
       }
               
         }
        }
        else{
            alert("Select Checkbox");
        }  
      });	
     });

    </script>
    -->
  </body>
</html>
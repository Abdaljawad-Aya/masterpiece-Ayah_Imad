 <!-- Footer Section Begin -->
 <section class="footer-section">
     <div class="container">
         <div class="row">
             <div class="col-lg-4">
                 <div class="fs-about">
                     <div class="fa-logo">
                         <a href="#"> <img src="img/logo4.png" alt="">
                         </a>
                     </div>
                     <p>a website to provide the needed information or the acknowledg a out a specific sport
                         withschedule template
                         to track your fitness goals </p>
                     <div class="fa-social">
                         <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                         <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                         <a href="https://youtube.com/"><i class="fa fa-youtube-play"></i></a>
                         <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
                         <a href=""><i class="fa  fa-envelope-o"></i></a>
                         <a href="register.php"><i class="fa fa-sign-in"></i></a>

                     </div>
                 </div>
             </div>
             <div class="col-lg-2 col-md-3 col-sm-6">
                 <div class="fs-widget">
                     <h4>Useful links</h4>
                     <ul>
                         <li><a href="about-us.php">About</a></li>
                         <li><a href="#">Blog</a></li>
                         <li><a href="#">Classes</a></li>
                         <li><a href="#">Contact</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-2 col-md-3 col-sm-6">
                 <div class="fs-widget">
                     <h4>Support</h4>
                     <ul>
                         <li><a href="#">Login</a></li>
                         <li><a href="#">My account</a></li>
                         <li><a href="#">Subscribe</a></li>
                         <!-- <li><a href="#">Contact</a></li> -->
                     </ul>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="fs-widget">
                     <h4>Tips & Guides</h4>
                     <div class="fw-recent">
                         <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                         <ul>
                             <li>3 min read</li>
                             <li>20 Comment</li>
                         </ul>
                     </div>
                     <div class="fw-recent">
                         <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                         <ul>
                             <li>3 min read</li>
                             <li>20 Comment</li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </section>
 <!-- Footer Section End -->

 <!-- Search model Begin -->
 <div class="search-model">
     <div class="h-100 d-flex align-items-center justify-content-center">
         <div class="search-close-switch">+</div>
         <form class="search-model-form">
             <input type="text" id="search-input" placeholder="Search here.....">
         </form>
     </div>
 </div>
 <!-- Search model end -->

 <!-- Js Plugins -->
 <script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.magnific-popup.min.js"></script>
 <script src="js/masonry.pkgd.min.js"></script>
 <script src="js/jquery.barfiller.js"></script>
 <script src="js/jquery.slicknav.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/main.js"></script>
 <script src="custom.js"></script>



 <script>
// paypal.Buttons({
//   createOrder: function(data, actions) {
//     // This function sets up the details of the transaction, including the amount and line item details.
//     return actions.order.create({
//       purchase_units: [{
//         amount: {
//           // value: ['39.0', '59.0', '99.0']
//           value: '39.0'

//         }
//       }]
//     });
//   },
//   onApprove: function(data, actions) {
//     // This function captures the funds from the transaction.
//     return actions.order.capture().then(function() {
//       // details ==> for the function 

//       // // This function shows a transaction success message to your buyer.
//       // alert('Transaction completed by ' + details.payer.name.given_name);
//       // sportinvein / transaction - completed
//       window.location = "/transaction-completed.php?&orderID" + data.orderID;
//     });
//   }
// }).render('#paypal-button-container');
// //This function displays Smart Payment Buttons on your web page.
 </script>

 <script type="text/javascript">
// if (window.history.replaceState) {
//     window.replaceState(null, null, window.location.href);
// }
 </script>

 <script>
     $(document).ready(function (){
         $('.btn-primary').click(function(e){
             e.preventDefault();
             var dob    = $('#dob').val();
             var feet   = $('#feet').val();
             var inch   = $('#inch').val();
             var gender = $('#gender').val();
             var weight = $('#weight').val();
             $.ajax
             ({
                 type: "POST",
                 url: "bmr-calculator.php",
                 dataType: 'json',
                 header:("Content-type: application/json"),
                 data: {"dob": dob, "feet": feet, "inch":inch, "gender":gender, "weight": weight},
                 success: function (data){
                     $('.result').html(data);
                     $('#bmrForm')[0].reset();
                     console.log(data)
                    }
                });
            });
        });
  

    // $(document).ready(function(){
    //     $("#bmrForm").submit(function(event) {
    //         event.preventDefault();

    //          var dob = $('#dob').val();
    //          var feet = $('#feet').val();
    //          var inch = $('#inch').val();
    //          var gender = $('#gender').val();
    //          var weight = $('#weight').val();

    //         // make a post request by ajax 

    //         $.post("bmr-calculator.php",{dob: dob, feet:feet, inch: inch, gender: gender, weight: weight}, 
    //         function(data){
    //             $('.result').html(data);
    //             $('#bmrForm')[0].reset();
    //             console.log(data)
    //         });
    //     });
    // });
 </script>

 </body>

 </html>

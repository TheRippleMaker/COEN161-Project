<?php
/* Allows parents to register their children for camp

   Child's full name

   Date of birth

   Parents' name

   Parents' contact info and phone

   Grade level and school

   Special instructions (allergies, etc)

   Camp duration (1 or 2 weeks)

   Fee (automatically calculated based on duration ^)

   Payment information (payment by credit card)

   Confirmation should be display upon successful registration

   Page also creates an account based on the account information taken in (requires database)

 */
 include 'header.php'
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <br>
 	 <br>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
   <div class="container">

     <div class="row">
         <div class="col-lg-12">
             <h1 class="page-header">Catalog
                 <small>EduCamps Programs</small>
             </h1>
         </div>
     </div>
     <!-- /.row -->

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Introduction to Web Programming</a></h3>
             <p>This camp covers basic HTML, CSS, and Javascript.</p>
             <p>June 19, 2017 - July 7, 2017</p>
             <p>Cost: $499</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <!-- /.row -->

     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Introduction to Python</a></h3>
             <p>This camp covers all the basic elements of Python.</p>
             <p>July 10, 2017 - July 28, 2017</p>
             <p>Cost: $499</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <!-- /.row -->

     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Introduction to Java</a></h3>
             <p>This camp covers all the basic elements of Java.</p>
             <p>July 31, 2017 - August 18, 2017</p>
             <p>Cost: $499</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Physics</a></h3>
             <p>This introductory physics camp covers all the basics of Mechanics and includes laboratory work. Safety equipment included in price.</p>
             <p>June 19, 2017 - July 7, 2017</p>
             <p>Cost: $699</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Chemistry</a></h3>
             <p>This introductory chemistry camp covers all the basics of chemistry and includes laboratory work. Safety equipment included in price.</p>
             <p>July 10, 2017 - July 28, 2017</p>
             <p>Cost: $699</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Biology</a></h3>
             <p>This introductory biology camp covers all the basics of the biological world and includes laboratory work. Safety equipment included in price.</p>
             <p>July 31, 2017 - August 18, 2017</p>
             <p>Cost: $699</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Geometry</a></h3>
             <p>This introductory geometry camp covers all the material covered in high school geometry courses.</p>
             <p>June 19, 2017 - July 7, 2017</p>
             <p>Cost: $499</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <!-- Blog Post Row -->
     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Algebra</a></h3>
             <p>This introductory algebra camp covers all the material covered in high school Algebra 1 and Algebra 2 courses.</p>
             <p>July 10, 2017 - July 28, 2017</p>
             <p>Cost: $499</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Calculus</a></h3>
             <p>This introductory calculus camp covers all the material covered in a standard high school Calculus AB course.</p>
             <p>July 31, 2017 - August 18, 2017</p>
             <p>Cost: $499</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Swimming</a></h3>
             <p>Swimming camp. Available for swimmers of all levels.</p>
             <p>June 19, 2017 - August 18, 2017</p>
             <p>Cost: $499</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
     <hr>

     <div class="row">
         <div class="col-md-5">
             <a href="blog-post.html">
                 <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
             </a>
         </div>
         <div class="col-md-6">
             <h3><a href="blog-post.html">Basketball</a></h3>
             <p>Basketball camp. Open to campers of all levels.</p>
             <p>June 19, 2017 - August 18, 2017</p>
             <p>Cost: $499</p>
             <a class="btn btn-primary" href="blog-post.html">Add to Cart <i class="fa fa-angle-right"></i></a>
         </div>
     </div>
    </div>
    <hr>



   <div class="form-style-2">
   <div class="form-style-2-heading"><strong>Register your Child for $499</strong></div>
   <form action= "pay.php" method="post" style="padding-left: 20px;">
     <label for="field1"><span>Child name<span class="required">*</span></span><input id = "childName" required data-validation-required-message="Child Name Required."/></label>
     <br>
     <br>
     <label for="field2"><span>Date of Birth<span class="required">*</span></span><input id = "childDOB" type="date" class="input-field" name="field2" value="" required data-validation-required-message="Date Of Birth Required" /></label>
     <br>
     <br>
     <label for="field1"><span>Parent name<span class="required">*</span></span><input id = "parentName"type="text" class="input-field" name="field1" value="" required data-validation-required-message="Parent Name Required." /></label>
     <br>
     <br>
     <label for="field1"><span>Parent's Email<span class="required">*</span></span><input id = "parentEmail" type="text" class="input-field" name="field1" value="" required data-validation-required-message="Parent Email Required." /></label>
     <br>
     <br>
     <label><span>Parent's Telephone</span><input type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="4" >-<input type="text" class="tel-number-field" name="tel_no_2" value="" maxlength="4"  />-<input type="text" class="tel-number-field" name="tel_no_3" value="" maxlength="10"/></label>
    <br>
    <br>
     <label for="field4"><span>Child's Grade*</span><br><select id = "childGrade" required data-validation-required-message="Child Grade Required." name="field4" class="select-field">
       <option value="General Question">6th grade</option>
       <option value="Advertise">7th grade</option>
       <option value="Partnership">8th grade</option>
     </select></label>
     <br>
     <br>
     <label for="field5"><span>Camp Duration*</span><br><select id = "campDuration" name="field4" class="select-field" required data-validation-required-message="Camp Duration Required.">
       <option>1 week</option>
       <option>2 weeks</option>
     </select></label>
     <br>
     <br>
     <label for="field5"><span>Special Instructions<span class="required">*</span></span><br><textarea id="special" name="field5" class="textarea-field" placeholder='allergies, medicines, or any exta details' required data-validation-required-message="Please enter information."></textarea></label>

     <label><input type="submit" value="Continue"/></label>
   </form>
   </div>
   <!-- jQuery -->
   <script src="js/jquery.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>

 </body>
 </html>
 <?php
 include 'footer.php'
 ?>

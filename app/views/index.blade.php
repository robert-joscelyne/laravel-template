<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
   <title>Evac Guide</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta content="JavaScript" name="vs_defaultClientScript" />
   <link href="css/index-evacguide.css" rel="stylesheet" type="text/css" />
   <link href="/css/index-bootstrap.css" rel="stylesheet" />
   <link href="/css/index-style.css" rel="stylesheet" />
   <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.js"></script>

   <style>
      #blanket {
         background-image:url(img/popupBg.png);
         background-repeat:repeat;
         position:absolute;
         z-index: 9001;
         top:0px;
         left:0px;
         width:100%;
         height:100%;
         padding-top:90px;
      }
      #popUpDiv {
         width:500px;
         z-index: 9002;
         margin:auto;
      }
   </style>
   <script>
      function clicker(){
         var thediv=document.getElementById('blanket');
         if(thediv.style.display == "none"){
            thediv.style.display = "";
            /*thediv.innerHTML = "<table width='100%' height='100%'><tr><td align='center' valign='middle' width='100%' height='100%'><br><br><a href='#' onclick='return clicker();'>CLOSE WINDOW</a></td></tr></table>";*/
            document.getElementById('popHeader').innerHTML="Visit Evac Guide Application For Free";
            document.getElementById('popHeader').style.paddingLeft="75px";
            document.getElementById('note').innerHTML="Submit this form to receive preview access of the Evac Guide Application. One of our friendly team members will email you shortly with the login details.";
            document.getElementById('myTest').style.overflow="hidden";
            document.getElementById('blanket').style.height='1020px';
         }else{
            thediv.style.display = "none";
         }
         return false;
      }
      function clickerSignUp(){
         var thediv=document.getElementById('blanket');
         if(thediv.style.display == "none"){
            thediv.style.display = "";
            /*thediv.innerHTML = "<table width='100%' height='100%'><tr><td align='center' valign='middle' width='100%' height='100%'><br><br><a href='#' onclick='return clicker();'>CLOSE WINDOW</a></td></tr></table>";*/
            document.getElementById('popHeader').innerHTML="Sign Up to Evac Guide";
            document.getElementById('popHeader').style.paddingLeft="140px";
            document.getElementById('note').innerHTML="Submit this form and one of our friendly team members will contact you shortly to discuss a package suitable to your requirements.";
            document.getElementById('myTest').style.overflow="hidden";
            document.getElementById('blanket').style.height='1020px';

         }else{
            thediv.style.display = "none";
         }
         return false;
      }
      function checkFirstName() {

         if(document.getElementById('first_name2').value.length==0)
         {
            document.getElementById('first_name2').value="First Name";
            document.getElementById('first_name2').className="tempValueRed";
         }
      }
      function checkLastName() {

         if(document.getElementById('last_name2').value.length==0)
         {
            document.getElementById('last_name2').value="Last Name";
            document.getElementById('last_name2').className="tempValueRed";
         }
      }
      function checkEmail() {
         var x=document.getElementById('email2').value;
         var atpos=x.indexOf("@");
         var dotpos=x.lastIndexOf(".");
         if(document.getElementById('email2').value.length==0)
         {
            document.getElementById('email2').value="Email";
            document.getElementById('email2').className="tempValueRed";
         }

         if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
         {
            alert("Not a valid E-mail Address\nPlease enter valid E-mail Address");
            return false;
         }
         document.getElementById('email2').focus();
      }
      function checkPhone() {
         var x = document.getElementById('phone2').value;
         if(document.getElementById('phone2').value.length==0)
         {
            document.getElementById('phone2').value="Phone";
            document.getElementById('phone2').className="tempValueRed";
         }
         if(isNaN(x)||x.indexOf(" ")!=-1)
         {
            alert("Enter Numeric Value")
            return false;
         }
      }
      function checkComments() {

         if(document.getElementById('comments').value.length==0)
         {
            document.getElementById('comments').value="Comments";
            document.getElementById('comments').className="taCommentsRed";
         }
      }

      function screenRes() {
         var height = screen.height;

      }

   </script>


   <script language="javascript">
      function SingleSelect(regex,current)
      {
         re = new RegExp(regex);

         for(i = 0; i < document.forms[0].elements.length; i++) {

            elm = document.forms[0].elements[i];

            if (elm.type == 'radio') {

               if (re.test(elm.name)) {

                  elm.checked = false;

               }
            }
         }

         current.checked = true;

      }
   </script>

   <!-- this code is for check the checkbox is whether selected or not -->
   <script type="text/javascript">

      $(document).ready(function(){

         $("#isCheck").click(function () {

            if($('input:checkbox[name=checkme]').is(':checked') == false)
               alert("Please accept the terms and conditions");
            else
               document.forms[0].submit();


         })

      });
   </script>

   <!-- <link href="css/index-style.css" rel="stylesheet" type="text/css">-->
   <script type="text/javascript" src="js/jquery.min.js"></script>
   <script language="javascript" type="text/javascript" src="js/vpb_script.js"></script>






</head>
<body>
<!--bg sign-->
<div id="vpb_pop_up_background"></div>
<!-- General Pop-up Background -->
<!--sign up div-->
<div id="vpb_signup_pop_up_box">
   <div align="left" style="font-family:Arial, Helvetica, sans-serif; color:#249b44; font-size:18px; font-weight:bold;">Sign Up
      For
      <span style="color:#83c140">EVAC</span>
      <span style="color:#666">GUIDE</span></div>
   <br clear="all" />
   <div align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;"></div>
   <form action="/send_form_email2.php" method="post" name="contactform2" id="contactform2">
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">First Name:</div>
      <div style="width:300px;float:left;" align="left">
         <input name="first_name2" id="first_name2" type="text" value="" class="vpb_textAreaBoxInputs" />
      </div>
      <br clear="all" />
      <br clear="all" />
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Last Name:</div>
      <div style="width:300px;float:left;" align="left">
         <input name="last_name2" id="last_name2" type="text" value="" class="vpb_textAreaBoxInputs" />
      </div>
      <br clear="all" />
      <br clear="all" />
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Email Address:</div>
      <div style="width:300px;float:left;" align="left">
         <input name="email3" id="email3" type="text" value="" class="vpb_textAreaBoxInputs" />
      </div>
      <br clear="all" />
      <br clear="all" />
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Phone Number:</div>
      <div style="width:300px;float:left;" align="left">
         <input name="telephone2" id="phone2" type="text" value="" class="vpb_textAreaBoxInputs" />
      </div>
      <br clear="all" />
      <br clear="all" />
      <div style="width:400px; padding-top:10px;margin-left:0px;float:left;">
         <input type="checkbox" name="checkme" id="checkmark" /> I agree to Evac Guide
         <a href="/terms.html">Terms &amp; Conditions</a>
         <br />
         <br />Enjoy access to the full range of Evac Guide features for 30 days at no cost. If you decide to continue use after
         this trial, we will contact you to discuss a package most suitable to your requirements.
         <br />
         <br /></div>
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left"></div>
      <div style="width:300px;float:left;" align="left">
         <button type="button" id="isCheck" class="vpb_general_button button">Submit</button>
         <a href="javascript:void(0);" class="vpb_general_button button" onclick="vpb_hide_popup_boxes();">Cancel</a></div>
   </form>
   <br clear="all" />
   <br clear="all" />
</div>
<!--signup end-->
<!-- contact Box starts Here -->
<div id="vpb_pop_up_background"></div>
<!-- General Pop-up Background -->
<div id="vpb_contact_pop_up_box">
   <div align="left" style="font-family:Arial, Helvetica, sans-serif;font-size:18px; color:#249b44; font-weight:bold;">Contact
      Evac Guide</div>
   <br clear="all" />
   <div align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;"></div>
   <form action="/send_form_email3.php" method="post" name="contactform2" id="contactform2">
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">First Name:</div>
      <div style="width:300px;float:left;" align="left">
         <input name="first_name2" id="first_name2" type="text" value="" class="vpb_textAreaBoxInputs" />
      </div>
      <br clear="all" />
      <br clear="all" />
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Last Name:</div>
      <div style="width:300px;float:left;" align="left">
         <input name="last_name2" id="last_name2" type="text" value="" class="vpb_textAreaBoxInputs" />
      </div>
      <br clear="all" />
      <br clear="all" />
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Email Address:</div>
      <div style="width:300px;float:left;" align="left">
         <input name="email2" id="email2" type="text" value="" class="vpb_textAreaBoxInputs" />
      </div>
      <br clear="all" />
      <br clear="all" />
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Phone Number:</div>
      <div style="width:300px;float:left;" align="left">
         <input name="telephone2" id="phone2" type="text" value="" class="vpb_textAreaBoxInputs" />
      </div>
      <br clear="all" />
      <br clear="all" />
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Comments:</div>
      <div style="width:300px;float:left;" align="left">
         <textarea name="job" id="comments" value="" class="vpb_textAreaBoxInputs" cols="25" rows="6"></textarea>
      </div>
      <div style="width:400px; padding-top:10px;margin-left:10px;float:left;" align="left">Submit this form and one of our
         friendly team members will contact you shortly.
         <br />
         <br /></div>
      <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left"></div>
      <div style="width:300px;float:left;" align="left">
         <button type="submit" class="vpb_general_button button">Submit</button>
         <a href="javascript:void(0);" class="vpb_general_button button" onclick="vpb_hide_popup_boxes();">Cancel</a></div>
   </form>
   <br clear="all" />
   <br clear="all" />
</div>
<!-- contact Box Ends Here -->
<div class="menu-bg absolute"></div>
<div class="banner-bg absolute"></div>
<div class="container">
<!--header start-->
<div class="row header">
   <div class="span12 relative">
      <div class="logo absolute">
         <a href="/home.html">
            <img src="/img/logo-main.png" alt="Evac" />
         </a>
      </div>
      <div class="contact absolute">
         <!--
                                             <p>For more info, call us...</p>
                                             <p class="number">1300 101 900</p>
                                             -->
         <img src="/img/number.jpg" alt="" />
      </div>
      <ul class="main-menu absolute">
         <li class="active">
            <a href="/home.html">Evac Guide</a>
         </li>
         <li>
            <a href="/features.html">Features</a>
         </li>
         <li>
            <a href="/tour.html">Tour</a>
         </li>
         <li>
            <a href="/#">Customers</a>
         </li>
      </ul>
   </div>
</div>
<!--header end-->
<!--banner start-->
<div class="row banner">
   <div class="span12 relative">
      <div class="self absolute">
         <img src="/img/self-banner.png" alt="" />
      </div>
      <!--
                                    <div class="content absolute">
                                            <h4>The App that's revolutionising workplace auditing just got better...</h4>
                                            <p>Way better! Fully customisable workplace audits for every industry and application are now in your hands, where you need them most.</p>
                                    </div>
                                    -->
      <div class="monitor absolute">
         <img src="/img/monitor.png" alt="" />
      </div>
      <div class="mascot absolute">
         <img src="/img/mascot.png" alt="" />
      </div>
      <div class="video absolute">
         <a href="/#myModal" role="button" data-toggle="modal">
            <img src="/img/watch-video.png" alt="" />
         </a>
      </div>
      <!--Video modal start-->
      <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã</button>
            <h3 id="myModalLabel">Evacguide_Explainer</h3>
         </div>
         <div class="modal-body">
            <p>
               <!--<iframe src="http://player.vimeo.com/video/61086654" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> <p><a href="http://vimeo.com/61086654">EvacGuide Explainer</a> from <a href="http://vimeo.com/evacguide">Evac Guide</a> on <a href="http://vimeo.com">Vimeo</a>-->

               <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000"
                       codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=10,1,1,0" width="32" height="32">
                  <param name="src" value="img/evacguide_explainer_640x360.mp4" />
                  <embed src="img/evacguide_explainer_640x360.mp4" pluginspage="http://www.adobe.com/shockwave/download/" width="530"
                         height="300" />
               </object></p>
         </div>
      </div>
      <!--Video modal end-->
      <div class="account signin absolute">
         <span>Already have an account?</span>
         <a href="/login" class="vpb_general_button button">SIGN IN NOW</a>
      </div>
      <div class="or absolute">or</div>
      <div class="account signup absolute">
         <span>New Customer?</span>
         <a href="javascript:void(0);" style="margin-right:60px;" class="vpb_general_button button"
            onclick="vpb_show_sign_up_box();">TRY IT FOR FREE</a></div>
   </div>
</div>
<!--banner end-->
<!--content start-->
<div class="row content">
   <div class="span12">
      <h2 class="homeTitle center">Complete our short checklist to determine if Evac Guide can help you</h2>
      <table class="table table-bordered">
         <tbody>
         <tr>
            <td><i class="icon-hand-right"></i> Are you conducting regular emergency planning meetings</td>
            <td>YES
               <input name="Yes" type="radio" value="Yes" id="Yes" style="margin-bottom:6px;" /></td>
            <td>NO
               <input name="Yes" type="radio" value="Yes" id="No" style="margin-bottom:6px;" /></td>
         </tr>
         <tr>
            <td><i class="icon-hand-right"></i> Do you have an up-to-date register of emergency contact numbers</td>
            <td>YES
               <input name="1" type="radio" value="Yes" id="Yes" style="margin-bottom:6px;" /></td>
            <td>NO
               <input name="1" type="radio" value="Yes" id="No" style="margin-bottom:6px;" /></td>
         </tr>
         <tr>
            <td><i class="icon-hand-right"></i> Do you keep an accurate register of all Emergency Control Organisation members (wardens)</td>
            <td>YES
               <input name="1" type="radio" value="Yes" id="Yes" style="margin-bottom:6px;" /></td>
            <td>NO
               <input name="1" type="radio" value="Yes" id="No" style="margin-bottom:6px;" /></td>
         </tr>
         <tr>
            <td><i class="icon-hand-right"></i> Are your emergency response procedures readily accessible</td>
            <td>YES
               <input name="1" type="radio" value="Yes" id="Yes" style="margin-bottom:6px;" /></td>
            <td>NO
               <input name="1" type="radio" value="Yes" id="No" style="margin-bottom:6px;" /></td>
         </tr>
         <tr>
            <td><i class="icon-hand-right"></i> Are evacuation diagrams valid and compliant</td>
            <td style="margin:6px 0px 0px 0px;">YES
               <input name="1" type="radio" value="Yes" id="Yes" style="margin-bottom:6px;" /></td>
            <td>NO
               <input name="1" type="radio" value="Yes" id="No" style="margin-bottom:6px;" /></td>
         </tr>
         <tr>
            <td><i class="icon-hand-right"></i> Is there a scheduled emergency response training program for staff</td>
            <td style="margin:6px 0px 0px 0px;">YES
               <input name="1" type="radio" value="Yes" id="Yes" style="margin-bottom:6px;" /></td>
            <td>NO
               <input name="1" type="radio" value="Yes" id="No" style="margin-bottom:6px;" /></td>
         </tr>
         </tbody>
      </table>
      <h3 class="homeSubTitle center">If you answered
         <u>NO</u> to any of these,
         <strong>Evac Guide</strong> can help!</h3>
      <div class="divider"></div>
      <p class="highlight">Evac Guide incorporates a multitude of tools and resources aimed specifically to assist the
         Emergency Planning Committee, Chief Fire Warden and any delegates to conduct the many tasks associated with emergency
         preparedness. Once logged in to Evac Guide, registered users gain unlimited access to ALL features within the
         application.</p>
      <img src="/img/responsive-design2.jpg" class="alignright" alt="" />
      <h3>Desktop, Laptop, mobile phone, Ipad... Youâre always connected!</h3>
      <p>Accessible from any web enabled device, Evac Guide ensures your information is available when itâs needed
         most!</p>
      <h3>With many standards, regulations and legislations in force, often it is difficult to keep up with current
         requirements.</h3>
      <p>Evac Guideâs team of expert emergency preparedness consultants have developed a unique series of tools and
         processes specifically designed to assist your organisation achieve compliance.</p>
      <p>Not only will you achieve compliance in the short term, Evac Guide will continue to offer support, updating our tools
         and processes in line with any new releases.</p>
      <h2>
         <img src="/img/evacuation2.png" class="alignright" alt="" />Build lists of emergency contact details, upload emergency
         response procedures and evacuation diagrams, generate evacuation reports and training plans...</h2>
      <p>
         <strong>To view a full description of the many tools within the Evac Guide application
            <a href="/features.html">Click Here</a></strong>
      </p>
   </div>
</div>
<!--content end-->
<!--Footer start-->
<div class="row footer">
   <div class="span12">
      <div class="row">
         <div class="span6">
            <h4 class="title">Compliant in Australia</h4>
            <div class="block">
               <p>Evac Guide understands the importance of Emergency Planning in the workplace. Our suite of easy to use tools and
                  resources have been specifically designed to meet the requirements of Australian organisations!</p>
            </div>
         </div>
         <div class="span6">
            <div class="logo pull-right">
               <img src="/img/logo-trans.png" alt="" />
            </div>
         </div>
      </div>
      <hr />
      <div class="row">
         <div class="span6">
            <div class="copyright pull-left">Copyright © 2013, Uniformed Fire Safety Pty Ltd (trading as Evac Guide). All rights
               reserved.</div>
         </div>
         <div class="span6">
            <ul class="menu pull-right">
               <li class="li">
                  <a href="/terms.html">Terms</a>
               </li>
               <li class="li">
                  <a href="/privacy.html">Privacy</a>
               </li>
               <li class="li">
                  <a href="javascript:void(0);" class="#" onclick="vpb_show_contact_up_box();">Contact Us</a>
               </li>
               <li class="li">
                  <a href="/partnerwithevac.html">Partner With Evac Guide</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!--Footer End-->
</div>
<div class="footer-bg absolute"></div>
</body>
</html>

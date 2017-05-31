<?php include('_banner.php'); ?>
<?php $b = $_GET['vacancy'];  ?>

<div class="container container--fixed top-spacer allspark-subpages contact" style="padding: 100px 0">
  <div class="row" style="margin: 0;">
    <div class="col col-md-3">
      <div class="side-menu">
        <ul class="list-group sidebar-nav-v1 nav nav-tabs">
          <li><a href="#"></a></li>
          <li class="list-group-item list-toggle active">
            <a href="#" target="_self">Contact Form</a>
            <ul class="list-group sidebar-nav-v1" id="sidebar-nav">
              <li class="active"><a data-toggle="tab" href="#Product" >Interest in Product</a></li>
              <li><a data-toggle="tab" href="#data">Interest in Data</a></li>
              <li><a data-toggle="tab" href="#team">Joining the team</a></li>
              <li><a data-toggle="tab" href="#media">Media Queries</a></li>
              <li><a data-toggle="tab" href="#others">Others</a></li>
            </ul>
          </li>
          <li><a href="#"></a></li>
        </ul>
        <form>
        <select id='myselect' class="form-control">
          <option value='#product'>Interest in Product</option>
          <option value='#data'>Interest in Data</option>
          <option value='#team'>Joining the team</option>
          <option value='#media'>Media Queries</option>
          <option value='#others'>Others</option>
         
        </select>
      </form>
      </div>
    </div>

    <div class="col col-md-9">
      <div class="col col-md-12 custom-banner row perspective" style="padding:0; margin: 0;-webkit-justify-content: flex-end; justify-content: flex-end;"> 
<div class="tab-content col-md-12">
 
  <div class="space"></div>
  <div id="Product" class="tab-pane in active">
    <form class="custom-form" action="<?php echo SITE_URL; ?>form/process-form.php" method="post">
            <div class="form-group margin-bottom col-md-12 row">
            <div class="col-md-6 row">
              <input type="text" id="name" name="name" required  placeholder="Name*" class="form-control" aria-describedby="nameHelp">
            </div>
            <div class="col-md-6 row">
              <input type="text" id="location" name="location" placeholder="Location" class="form-control" aria-describedby="nameHelp">
            </div>
            </div>

        <div class="form-group margin-bottom col-md-12 row">
          <div class="col-md-6 row">
            <input type="email" id="email" name="email" required placeholder="Business Email*" class="form-control" aria-describedby="emailHelp" >
          </div>
          <div class="col-md-6 row">
            <input type="text" id="company" name="company" required placeholder="Company*">
          </div>
        </div>

       
        <div class="form-group margin-bottom col-md-12 row">
          <textarea class="form-control" d="message" name="message" rows="5" placeholder="Query / Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>



  <div id="data" class="tab-pane">
    <form action="<?php echo SITE_URL; ?>form/data-process-form.php" method="post" enctype="multipart/form-data" class="custom-form" role="form">
      <div class="form-group margin-bottom col-md-12 row">
        <div class="col-md-6 row">
          <input id="username" type="text" name="name"  class="form-control" aria-describedby="nameHelp" required placeholder="Name">
        </div>
        <div class="col-md-6 row">
        <input  id="email" type="email" name="email"  class="form-control" aria-describedby="emailHelp" required placeholder="Email Address">
          </div>
        </div>
      <div class="form-group margin-bottom col-md-12 row">
   
    <div class="col-md-6 row">
     <input id="company" type="text" name="company" required placeholder="company"  class="form-control"> 
    </div>
    <div class="col-md-6 row">
     <textarea id="message" style="margin-right:0px;" name="message" class="form-control" placeholder="Query / Message" rows="4"></textarea>
       </div>
  </div>

   <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>



  <div id="team" class="tab-pane">
    <form  action="<?php echo SITE_URL; ?>form/resume-process-form.php" class="custom-form" method="post" enctype="multipart/form-data" onSubmit="document.getElementById('career-form-submit-loader').style.display='inline';">
      <div class="form-group margin-bottom col-md-12 row">
      <div class="col-md-6 row">
        <input type="text" id="name" name="name" class="form-control" aria-describedby="Your first and last name" placeholder="Name*" required>
       
      </div>
      <div class="bfh-selectbox bfh-countries col-md-6 row" data-country="IN" data-flags="true">
        <input id="location" name="location" required type="hidden" value="">
        <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
          <span class="bfh-selectbox-option input-medium" data-option=""></span>
          <b class="caret"></b>
        </a>
        <div class="bfh-selectbox-options">
          <input type="text" class="bfh-selectbox-filter">
          <div role="listbox">
            <ul role="option">
            </ul>
          </div>
        </div>
      </div>

      </div>

  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="email" id="email" name="email" required class="form-control" aria-describedby="We will respond to this address" placeholder="Email*">
    </div>
    <div class="col-md-6 row">
      <input type="text"  name="position" id="position" class="form-control" aria-describedby="jobHelp" placeholder="Job Title">
    </div>
  </div>

  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="text" id="phone"  class="form-control" name="phone"  aria-describedby="If you prefer a phone call" required placeholder="Contact Number*">
    </div>
    <div class="col-md-6 row">
      <input type="text" id="vacancy" name="vacancy" required class="form-control" aria-describedby="textHelp" placeholder="How did you find us">
    </div>
  </div>
  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="text" id="github" name="github" placeholder="GitHub Username"  class="form-control"  aria-describedby="Github">
    </div>
    <div class="col-md-6 row">
      <input type="text" id="stackoverflow" name="stackoverflow" placeholder="StackOverflow Username"  class="form-control" aria-describedby="textHelp" >
    </div>
  </div>
  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="file" id="cv" name="cv" required placeholder="Upload Resume"  class="form-control"  aria-describedby="textHelp">
    </div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <img alt="" id="career-form-submit-loader" src="<?php echo SITE_URL; ?>form/images/loader.gif" style="margin: 0 0 -12px 15px;display:none;" />
</form>
  </div>



  <div id="media" class="tab-pane">
    <form action="<?php echo SITE_URL; ?>form/research-process-form.php" method="post" enctype="multipart/form-data" class="custom-form" role="form">
      <div class="form-group margin-bottom col-md-12 row">
        <div class="col-md-6 row">
          <input id="name" type="text" name="name"  class="form-control" aria-describedby="nameHelp" required placeholder="Name">
        </div>
        <div class="col-md-6 row">
        <input  d="email" type="email" name="email" placeholder="Company Email"  class="form-control" aria-describedby="emailHelp" required >
          </div>
        </div>
      <div class="form-group margin-bottom col-md-12 row">
   
    <div class="col-md-6 row">
     <input id="phone" type="text" name="phone" placeholder="Phone Number"  required   class="form-control"> 
    </div>
    <div class="col-md-6 row">
    <input id="country" type="text" name="country" placeholder="Country" class="form-control" required> 
    </div>
    </div>
     <div class="form-group margin-bottom col-md-12 row">
      <div class="col-md-6 row">
        <input id="research" type="text" name="pdf" placeholder="Research" class="form-control" required> 
      </div>
    
  </div>

   <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>



  <div id="others" class="tab-pane">
    <form class="custom-form">
      <div class="form-group margin-bottom col-md-12 row">
      <div class="col-md-6 row">
        <input type="name" class="form-control" aria-describedby="nameHelp" placeholder="Name">
      </div>
      <div class="bfh-selectbox bfh-countries col-md-6 row" data-country="IN" data-flags="true">
        <input type="hidden" value="">
        <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
          <span class="bfh-selectbox-option input-medium" data-option=""></span>
          <b class="caret"></b>
        </a>
        <div class="bfh-selectbox-options">
          <input type="text" class="bfh-selectbox-filter">
          <div role="listbox">
            <ul role="option">
            </ul>
          </div>
        </div>
      </div>

      </div>

  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email Address">
    </div>
    <div class="col-md-6 row">
      <input type="job" class="form-control" aria-describedby="jobHelp" placeholder="Job Title">
    </div>
  </div>

  <div class="form-group margin-bottom col-md-12 row">
    <div class="col-md-6 row">
      <input type="tel" class="form-control" aria-describedby="telHelp" placeholder="Contact Number">
    </div>
    <div class="col-md-6 row">
      <input type="text" class="form-control" aria-describedby="textHelp" placeholder="How did you find us">
    </div>
  </div>
  <div class="form-group margin-bottom col-md-12 row">
    <textarea class="form-control" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>




        </div>
      </div>

<div class="col col-md-12 row perspective contact_addresses"> 
<div class="col-6 col-md-4">
  <div class="col-md-10">
    <h2>USA<span>San Francisco</span></h2> 
    <hr />

    <p><b>Near Americas Inc.</b><br>228 Hamilton Ave, 3<sup>rd</sup> Floor Palo Alto, CA 94301 
    </p>
    </div>
  </div>
  <div class="col-6 col-md-4">
  <div class="col-md-10">
    <h2>USA<span>New York</span></h2> 
    <hr />
    <p><b>Near Americas Inc.</b><br>222 Broadway, 19<sup>th</sup> Floor New York, NY 10038 
    </p>
    </div>
  </div>
  <div class="col-6 col-md-4">
  <div class="col-md-10">
    <h2>UK<span>London</span></h2> 
    <hr />
    <p><b>Near Europe Limited</b><br>4<sup>th</sup> Floor, Rex House 4-12 Regent Street London, SW1Y 4PE 
    </p>
    </div>
  </div>
  <div class="col-6 col-md-4">
  <div class="col-md-10">
    <h2>India<span>Bangalore</span></h2> 
    <hr />
    <p><b>Near India Private limited</b><br>No. 71/72, 4<sup>th</sup> Floor JNC Rd, Koramangala 5<sup>th</sup> B<br>
     Bangalore 560 095<br>
    </p>
    </div>
  </div>
  <div class="col-6 col-md-4">
    <div class="col-md-10">
    <h2>Singapore <span>(Headquarters)</span></h2>
    <hr />
    <p><b>Near Pte. Ltd</b><br>
      #36-30/32, UOB Plaza 1  80 Raffles Place Singapore 048624<br>
    </p>
    </div>
  </div>
    <div class="col-6 col-md-4">
    <div class="col-md-10">
    <h2>Tokyo <span>Japan</span></h2>
    <hr />
    <p><b>Near Japan K.K.</b><br>
      Regus Ebisu Business Center, 8F Humax Ebisu building, Ebisu minami 1-1-1, Shibuya-ku, Tokyo 150-0022
    </p>
    </div>
  </div>
  <div class="col-6 col-md-4">
  <div class="col-md-10">
    <h2>Australia<span>Sydney</span></h2> 
    <hr />
    <p><b>Near Australia Pty Limited</b><br>Level 21, 201 Sussex St. Sydney NSW 2000<br>
    </p>
    </div>
  </div>

  
  
  
</div>


    </div>
  </div>
</div>





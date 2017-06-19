<?php include('_banner.php'); ?>
<?php $b = $_GET['vacancy'];  ?>

<div class="container container--fixed top-spacer allspark-subpages contact" style="padding: 100px 0">
  <div class="row" style="margin: 0;">
    <div class="col col-md-3">
      <div class="side-menu">
        <ul class="list-group sidebar-nav-v1 contact-nav nav-tabs">
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
          <option value='#Product'>Interest in Product</option>
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
      <iframe src="<?php echo SITE_URL; ?>contact/contact-form.php" frameborder="0" style="width: 100%; height: 450px; overflow: hidden;" ></iframe>
  </div>



  <div id="data" class="tab-pane">
  <iframe src="<?php echo SITE_URL; ?>contact/data-form.php" frameborder="0" style="width: 100%; height: 450px; overflow: hidden;" ></iframe>

  </div>



  <div id="team" class="tab-pane">
  <iframe src="<?php echo SITE_URL; ?>contact/career-form.php" frameborder="0" style="width: 100%; height: 450px; overflow: hidden;" ></iframe>
   
  </div>



  <div id="media" class="tab-pane">
    <iframe src="<?php echo SITE_URL; ?>contact/media-form.php" frameborder="0" style="width: 100%; height: 450px; overflow: hidden;" ></iframe>
  </div>



  <div id="others" class="tab-pane">
    <iframe src="<?php echo SITE_URL; ?>contact/others-form.php" frameborder="0" style="width: 100%; height: 450px; overflow: hidden;" ></iframe>
  </div>




        </div>
      </div>

<div class="col col-md-12 row perspective contact_addresses"> 
<div class="col-6 col-md-4">
  <div class="col-md-10">
    <h2>USA<span>San Francisco</span></h2> 
    <hr />

    <p><b>Near Americas Inc.</b><br />228 Hamilton Ave,<br>3<sup>rd</sup> Floor Palo Alto,<br> CA 94301 
    </p>
    </div>
  </div>
  <div class="col-6 col-md-4">
  <div class="col-md-10">
    <h2>USA<span>New York</span></h2> 
    <hr />
    <p><b>Near Americas Inc.</b><br />222 Broadway,<br> 19<sup>th</sup> Floor New York,<br> NY 10038 
    </p>
    </div>
  </div>
  <div class="col-6 col-md-4">
  <div class="col-md-10">
    <h2>UK<span>London</span></h2> 
    <hr />
    <p><b>Near Europe Limited</b><br />4<sup>th</sup> Floor, Rex House 4-12 Regent Street London,<br> SW1Y 4PE 
    </p>
    </div>
  </div>
  <div class="col-6 col-md-4">
  <div class="col-md-10">
    <h2>India<span>Bangalore</span></h2> 
    <hr />
    <p><b>Near India Private limited</b><br />No. 71/72, 4<sup>th</sup> Floor JNC Rd, <br>Koramangala 5<sup>th</sup> Block<br />
     Bangalore 560 095<br>
    </p>
    </div>
  </div>
  <div class="col-6 col-md-4">
    <div class="col-md-10">
    <h2>Singapore<span>&nbsp;</span></h2>
    <hr />
    <p><b>Near Pte. Ltd</b><br/>
      #36-30/32, UOB Plaza 1  <br/>80 Raffles Place<br> Singapore 048624<br>
    </p>
    </div>
  </div>
    <div class="col-6 col-md-4">
    <div class="col-md-10">
    <h2>Tokyo <span>Japan</span></h2>
    <hr />
    <p><b>Near Japan K.K.</b><br>
      Regus Ebisu Business Center,<br> 8F Humax Ebisu building, <br>Ebisu minami 1-1-1,<br> Shibuya-ku, Tokyo 150-0022
    </p>
    </div>
  </div>
  <div class="col-6 col-md-4">
  <div class="col-md-10">
    <h2>Australia<span>Sydney</span></h2> 
    <hr />
    <p><b>Near Australia Pty Limited</b><br>Level 21, 201 Sussex St.<br> Sydney NSW 2000<br>
    </p>
    </div>
  </div>

  
  
  
</div>


    </div>
  </div>
</div>





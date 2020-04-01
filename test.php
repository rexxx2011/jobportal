<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
			     <form action="createjob.php" method="post" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 font-weight-bold">Job Title</div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <select name="job_position" class="col-md-12 mb-3 mb-md-0 form-control">
                    <option>---------------------</option>
                    <option>Website Developer </option>
                        <option>Java Develope</option>
                        <option>Architect</option>
                        <option>Graphic Designer</option>
                  </select>                  
                </div>
              </div>   

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <img style="width: 100%;height: 100%;" src="<?php echo $img; ?>">
              
            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3"><?php echo "".$fname." ".$lname;?></h3>
              <p class="font-weight-bold"><?php echo $mailid;?></p>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>






<div>
						<!-- 		<div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3">'.$applicantdet["first_name"].' ' .$applicantdet["last_name"].'</h2>
                       </div>
                       </div>
                <div class="job-post-item-body d-block d-md-flex">
                  
              
              <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <img style="width: 100%;height: 100%;" src=" '.$img.'">
              
            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">'.$fname.' '.$lname.'</h3>
              <p class="font-weight-bold">'. $mailid.'</p>
              <p></p>
            </div>
          </div>
            </div>
          </div>
					</div> -->
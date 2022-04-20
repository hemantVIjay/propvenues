<div class="row gx-2 mb-4">
	<div class="col-sm-4 mb-3">
		<div class="card">
			<div class="card-body">
				<span class="badge bg-success fw-bold">3.5/5<i class="bi bi-star-fill ms-2"></i></span>
				<p class="my-3">Nice builder floor apartment. I have very good experience with the builder, good communication, good service, and nice people, flats are nice and basic facilities, metro connectivity is also there.</p>
				<div class="d-flex">
					<span class="rwsn text-center rounded-circle fw-bold fs-6">AB</span>
					<div>
						<div class="rwnm fw-bold">Amit Bharadwaj</div>
						<div class="rwdt text-gray">20-Apr-2022</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="col-sm-4 mb-3">
		<div class="card">
			<div class="card-body">
				<span class="badge bg-danger fw-bold">1.5/5<i class="bi bi-star-fill ms-2"></i></span>
				<p class="my-3">Nice builder floor apartment. I have very good experience with the builder, good communication, good service, and nice people, flats are nice and basic facilities, metro connectivity is also there.</p>
				<div class="d-flex">
					<span class="rwsn text-center rounded-circle fw-bold fs-6">RY</span>
					<div>
						<div class="rwnm fw-bold">Rajkumar Yadav</div>
						<div class="rwdt text-gray">20-Apr-2022</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-4 mb-3">
		<div class="card">
			<div class="card-body">
				<span class="badge bg-success fw-bold">4.5/5<i class="bi bi-star-fill ms-2"></i></span>
				<p class="my-3">Nice builder floor apartment. I have very good experience with the builder, good communication, good service, and nice people, flats are nice and basic facilities, metro connectivity is also there.</p>
				<div class="d-flex">
					<span class="rwsn text-center rounded-circle fw-bold fs-6">RS</span>
					<div>
						<div class="rwnm fw-bold">Rini Saini</div>
						<div class="rwdt text-gray">20-Apr-2022</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<form id="reviews" action="<?= base_url('home/save_review'); ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
   <input type="hidden" name="listing_id" id="listing_id" value="<?= _slugID($this->uri->segment(1)); ?>">
   <div class="rtnrvw">
      <div class="row">
         <div class="col-xl-8 col-lg-9 col-md-10">
            <div class="d-flex mb-3">
               <div class="rtstr">
                  <h6 class="rtttl">Rate us</h6>
                  <fieldset class="rating"> 
                     <input type="radio" id="star5" name="rating" value="5" />
                     <label class="full" for="star5" title="5 stars"></label> 
                     <input type="radio" id="star4half" name="rating" value="4.5" />
                     <label class="half" for="star4half" title="4.5 stars"></label> 
                     <input type="radio" id="star4" name="rating" value="4" />
                     <label class="full" for="star4" title="4 stars"></label> 
                     <input type="radio" id="star3half" name="rating" value="3.5" />
                     <label class="half" for="star3half" title="3.5 stars"></label> 
                     <input type="radio" id="star3" name="rating" value="3" />
                     <label class="full" for="star3" title="3 stars"></label> 
                     <input type="radio" id="star2half" name="rating" value="2.5" />
                     <label class="half" for="star2half" title="2.5 stars"></label> 
                     <input type="radio" id="star2" name="rating" value="2" />
                     <label class="full" for="star2" title="2 stars"></label> 
                     <input type="radio" id="star1half" name="rating" value="1.5" />
                     <label class="half" for="star1half" title="1.5 stars"></label> 
                     <input type="radio" id="star1" name="rating" value="1" />
                     <label class="full" for="star1" title="1 star"></label> 
                     <input type="radio" id="starhalf" name="rating" value="0.5" />
                     <label class="half" for="starhalf" title="0.5 stars"></label> 
                     <input type="radio" class="reset-option" name="rating" value="reset" /> 
                  </fieldset>
               </div>
               <span class="myratings">0.0</span>
            </div>
            <?php if(!isset($_SESSION['login'])){ ?>
            <div class="mb-2">
               <input type="text" name="review_name" class="form-control" id="review_name" placeholder="Full Name">
            </div>
            <div class="row gx-2 mb-2">
               <div class="col-md-6 col-sm-6 col-6">
                  <input type="text" name="review_phone" class="form-control" id="review_phone" placeholder="Phone/Mobile Number" >
               </div>
               <div class="col-md-6 col-sm-6 col-6">
                  <input type="text" name="review_email" class="form-control" id="review_email" placeholder="Email Address">
               </div>
            </div>
            <?php } ?>
            <textarea class="form-control" rows="4" name="message" placeholder="Comment type here..."></textarea>
            <br>
            <div style="text-align:right;">
               <button class="btn btn-primary" type="button" onclick="saveReview(this);">Submit</button>
               <!--<?php if(isset($_SESSION['login']) && $_SESSION['login']['user_id']!=''){ ?>
                  <button class="btn btn-primary" type="button" onclick="saveReview(this);">Submit</button>
                  <?php }else{ ?>
                  <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#pvMdlLogin">Submit</a><?php } ?>-->
            </div>
         </div>
      </div>
   </div>
</form>
 
<div class="container">
  <div class="row">
     <?php if(!empty($detail)){foreach($detail as $rod){?>
      


        <div class="col-lg-12 col-md-12 col-sm-12">
          
          <div class="registration-form">
            <div class="form-registration-details">
              <label class="form-text" for="first-name">First Name *</label>
              <input class="input-text" id="first-name" name="fname" type="text" value="<?php echo trim($rod->first_name ?? "");?>" />
            <input type="hidden" name="oldfn" value="<?php echo trim($rod->first_name ?? "");?>">
              <p class="error first-name"></p>
            </div>
            <div class="form-registration-details">
              <label class="form-text" for="middle-name">Middle Name</label>
              <input class="input-text" id="middle-name" name="mname" type="text" value="<?php echo trim($rod->mid_name ?? "");?>"/>
              <input type="hidden" name="oldmn" value="<?php echo trim($rod->mid_name ?? "");?>">
              <p class="error middle-name"></p>
            </div>
            <div class="form-registration-details">
              <label class="form-text" for="last-name">Last Name *</label>
              <input class="input-text" id="last-name" name="lname" type="text" value="<?php echo trim($rod->last_name ?? "");?>"/>
            <input type="hidden" name="oldln" value="<?php echo trim($rod->last_name ?? "");?>">
               <p class="error last-name"></p>
            </div>
          </div>

          <div class="registration-form">
            <!-- <div class="form-registration-details">
              <label class="form-text" for="telephone">Telephone Number</label>
              <input id="telephone" class="input-text" name="tele_no" type="number" />
            </div> -->
            <div class="form-registration-details">
              <label class="form-text" for="mobile">Mobile Number *</label>
              
              <input id="mobile" class="input-text" type="number" name="mobile"  value="<?php echo trim($rod->mobile ?? "");?>"/>
              <input type="hidden" name="oldmob" value="<?php echo trim($rod->mobile ?? "");?>">
               <p class="error mobile"></p>
            </div>
            <div class="form-registration-details">
              <label class="form-text" for="email">Email *</label>
              <input id="email" type="email" class="input-text" name="email"  value="<?php echo $rod->email;?>" style="background: lightgrey;" readonly/>
               <p class="error email"></p>
            </div>
          </div>
          
          <div class="registration-form">
            <div class="form-address-text">
              <label class="form-text" for="address">Address *</label>
              <input type="hidden" name="oldadr" value="<?php echo trim($rod->address ?? "");?>">
              <textarea class="input-text" rows="3" id="address" name="address" ><?php echo trim($rod->address ?? "");?></textarea>
              <!-- <p class="error">Please enter a email</p> -->
               <p class="error address"></p>
            </div>
           <div class="form-registration-details">
              <label class="form-text">Country *</label>
               <input type="hidden" name="oldcon" value="<?php echo trim($rod->country_id ?? "");?>">
              <select id="country" name="country"  class="select-option">
                <option value="" class="margin">Select Country</option>
                <?php if(!empty($country)){foreach($country as $roc){?>
                  <option value="<?php echo $roc->id;?>"<?php if($rod->country_id==$roc->id){?>selected<?php }?> class="margin"><?php echo $roc->name;?></option>
                <?php } }?>
              </select>
              <!-- <p class="error">Please enter a email</p> -->
               <p class="error country"></p>
            </div>
          </div>
          <div class="registration-form">
            
            <div class="form-registration-details">
              <label class="form-text">State *</label>
               <input type="hidden" name="oldst" value="<?php echo trim($rod->state_id ?? "");?>">
              <select id="state" name="state"  class="select-option">
                <option value="" class="margin">Select state</option>
                <?php if(!empty($state)){foreach($state as $ros){?>
                  <option value="<?php echo $ros->id;?>"<?php if($rod->state_id==$ros->id){?>selected<?php }?> class="margin"><?php echo $ros->name;?></option>
                <?php } }?>
              </select>
              <!-- <p class="error">Please enter a email</p> -->
              <p class="error state"></p>
            </div>
            <div class="form-registration-details">
              <label class="form-text" for="city">City *</label>
               <input type="hidden" name="oldcit" value="<?php echo trim($rod->city_id ?? "");?>">
               <select id="city" name="city" class="select-option" name="city" id="city">
                <option value="">Select City</option>
                 <?php if(!empty($city)){foreach($city as $roct){?>
                  <option value="<?php echo $roct->id;?>"<?php if($rod->city_id==$roct->id){?>selected<?php }?> class="margin"><?php echo $roct->name;?></option>
                <?php } }?>
              </select>
              <!-- <p class="error">Please enter a email</p> -->
              <p class="error city"></p>
            </div>
            <div class="form-registration-details">
              <label class="form-text" for="postal">Zip Code *</label>
          <input type="hidden" name="oldzip" value="<?php echo trim($rod->zip_code ?? "");?>">     
              <input class="input-text" id="postal" name="zip"  value="<?php echo trim($rod->zip_code ?? "");?>"/>
              <p class="error postal"></p>
            </div>
          </div>
        
          <div class="registration-form">
            <div class="form-registration-details">
              <label for="Birthdate" class="form-text">Birthdate *</label>
          <input type="hidden" name="oldbth" value="<?php echo trim($rod->birth_date ?? "");?>">
              <input type="date" id="Birthdate" name="bdate" max="<?php echo date('Y-m-d');?>" class="select-option" value="<?php echo $rod->birth_date;?>" />
              <p class="error Birthdate"></p>
            </div>
            
            <div class="form-registration-details">
              <label class="form-text">Blood Group</label>
               <input type="hidden" name="oldbg" value="<?php echo trim($rod->bld_grp ?? "");?>">
              <select id="bld_grp" name="bld_grp" class="select-option">
               
                <option value="">Select Blood Group</option>
                  <option value="A+" <?php if(trim($rod->bld_grp ?? "")=="A+"){?>selected<?php }?>>A+</option>
                 <option value="A-"<?php if(trim($rod->bld_grp ?? "")=="A-"){?>selected<?php }?>>A-</option>
                 <option value="B+"<?php if(trim($rod->bld_grp ?? "")=="B+"){?>selected<?php }?>>B+</option>
                 <option value="B-"<?php if(trim($rod->bld_grp ?? "")=="B-"){?>selected<?php }?>>B-</option>
                 <option value="AB+"<?php if(trim($rod->bld_grp ?? "")=="AB+"){?>selected<?php }?>>AB+</option>
                 <option value="AB-"<?php if(trim($rod->bld_grp ?? "")=="AB-"){?>selected<?php }?>>AB-</option>
                 <option value="O+" <?php if(trim($rod->bld_grp ?? "")=="O+"){?>selected<?php }?>>O+</option>
                 <option value="O-"<?php if(trim($rod->bld_grp ?? "")=="O-"){?>selected<?php }?>>O-</option>
              </select>
              <p class="error bld_grp"></p>
            </div>
            <div class="form-registration-details">
              <label class="form-text">Marital Status *</label>
              <input type="hidden" name="oldms" value="<?php echo trim($rod->mrg_status ?? "");?>">
              <select class="select-option" name="marital" id="marital">
                <option value="">Select Marital Status</option>
                 <option value="Single" <?php if(trim($rod->mrg_status ?? "")=="Single"){?>selected<?php }?>>Single</option>
                <option value="Married" <?php if(trim($rod->mrg_status ?? "")=="Married"){?>selected<?php }?>>Married</option>
                <option value="Widowed" <?php if(trim($rod->mrg_status ?? "")=="Widowed"){?>selected<?php }?>>Widowed</option>
                <option value="Separated" <?php if(trim($rod->mrg_status ?? "")=="Separated"){?>selected<?php }?>>Separated</option>
                <option value="Divorced" <?php if(trim($rod->mrg_status ?? "")=="Divorced"){?>selected<?php }?>>Divorced</option>
              </select>
              <p class="error mrs"></p>
            </div>
            
          </div>
        
          <div class="registration-form">
            <div class="form-registration-details">
              <label class="form-text">Education *</label>
          <input type="hidden" name="oldedu" value="<?php echo trim($rod->edu_id ?? "");?>">
          <input type="hidden" name="oldednm" value="<?php echo trim($rod->education ?? "");?>">
              <select id="education" name="education"  class="select-option">
                <option value="">Select Education</option>
                <?php if(!empty($rod->edu_id)){?>
                  <?php if(!empty($education)){foreach($education as $roe){?>
                  <option value="<?php echo $roe->id;?>" <?php if($roe->id==trim($rod->edu_id ?? "")){?>selected<?php }?>><?php echo $roe->name;?></option>
                <?php } }?>
                <option value="Other">Other</option>
                <?php }else{?>
                  <?php if(!empty($education)){foreach($education as $roe){?>
                  <option value="<?php echo $roe->id;?>" ><?php echo $roe->name;?></option>
                <?php } }?>
                <option value="Other" selected>Other</option>
                <?php }?>
                
               
              </select>
              <?php if(!empty($rod->edu_id)){?>
              <input type="text" id="othr" name="edu_other" style="display:none;" class="select-option" placeholder="Enter Education">
            <?php }else{?>
              <input type="text" id="othr" name="edu_other" style="display:block;" class="select-option" placeholder="Enter Education" value="<?php echo $rod->education;?>">
            <?php }?>
              <p class="error education"></p>
            </div>

            <div class="form-registration-details">
              <label class="form-text">Profession *</label>
              <input type="hidden" name="oldprof" value="<?php echo trim($rod->prof_id ?? "");?>">
              <input type="hidden" name="oldprofnm" value="<?php echo trim($rod->profession ?? "");?>">
             <!--  <select id="prof" name="profession"  class="select-option">
                <option value="" class="margin">Select Profession</option>
              </select> -->
              <input list="profes" autocomplete="off" id="prof" onkeyup="firstCapitalAlways(event);" name="profession" class="select-option"  placeholder="Profession" value="<?php echo $rod->profession;?>" />
  <datalist id="profes">
  <?php if(!empty($profession)){ foreach($profession as $rop){ if($rop->edu_id==$rod->edu_id){?>
    <option value="<?php echo $rop->name;?>">
  <?php } } }?>
</datalist>
              <p class="error prof"></p>
            </div>
            <div class="form-registration-details">
              <input type="hidden" name="oldexp" value="<?php echo trim($rod->expertise ?? "");?>">
              <label class="form-text">Expertise </label>
              <input type="text" id="Birthdate" name="expertise" class="select-option" value="<?php echo trim($rod->expertise ?? "");?>" />
             <p class="error expertise"></p>
            </div>
            
          </div>
        
          <div class="About-section">
            <div class="form-address-text">
              <label class="form-text" for="about-you">About (Brief Information)</label>
              <textarea class="input-text" rows="3" id="about" name="about_you"><?php echo trim($rod->abt_you ?? "");?></textarea>
            <input type="hidden" name="oldabt" value="<?php echo trim($rod->abt_you ?? "");?>">
              <!-- <p class="error">Please enter a email</p> -->
               <span id="myWordCount" style="text-align: right;font-style: italic;">(300 Words left)</span>
            </div>
            <div class="form-registration-details">
              <div class="input-image">
                <label class="form-text" for="imageUpload">Profile Photo</label>
                <div class="file-area">
                  <div>
            <input type="hidden" name="oldpic" value="<?php echo trim($rod->pro_pic ?? "");?>">
                  <input type="file" id="imgInp" name="pimg" accept="image/*" class="img" />
                  <?php if(!empty($rod->pro_pic)){?>
                   <p style="display: none;">&plus;</p>
                  <img id="blah" src="<?php echo base_url();?>upload/profile/<?php echo trim($rod->pro_pic ?? "");?>" class="img-con" style="display: block;"> 
                <?php }else{?>
                  
                   <img src="<?php echo base_url();?>assets/images/user_prof.png" alt="Profile" class="img-con" /> 
                <?php }?>
                </div>
                </div>
                
                
               <!-- <p class="error imgin"></p> -->
                <span class="text-danger" id="error"></span>
              </div>
            </div>
          </div>
        </div>


        <div class="location-container">
          <div>
            <h2 class="heading-primary">Social Media</h2>
          </div>
          <div class="registration-form" >
            <div class="form-registration-details" style="width: 100%;">
              <label class="form-text">Facebook</label>
              <input type="hidden" name="oldfb" value="<?php echo trim($rod->facebook ?? "");?>">
              <input type="text" id="fb" name="facebook" class="select-option"   value="<?php echo trim($rod->facebook ?? "");?>" />
             <p class="error facebook"></p>
            </div>
            <div class="form-registration-details" style="width: 100%;">
              <label class="form-text">Instagram</label>
              <input type="hidden" name="oldins" value="<?php echo trim($rod->instagram ?? "");?>">
              <input type="text" id="insta" name="instagram" class="select-option"  value="<?php echo trim($rod->instagram ?? "");?>"/>
             <p class="error instagram"></p>
            </div>
            <div class="form-registration-details" style="width: 100%;">
              <label class="form-text">Linkedin</label>
              <input type="hidden" name="oldlin" value="<?php echo trim($rod->linkedin ?? "");?>">
              <input type="text" id="linkin" name="linkedin" class="select-option"  value="<?php echo trim($rod->linkedin ?? "");?>"/>
             <p class="error linkedin"></p>
            </div>
          </div>
          
        </div>

        <div class="location-container">
          <div>
            <h2 class="heading-primary">Chh Gaam Details</h2>
          </div>
          <div class="registration-form">
            <div class="form-registration-details">
              <label class="form-text" for="select-village">Village Name *</label>
<input type="hidden" name="oldvil" value="<?php echo trim($rod->vlg_id ?? "");?>">
              <select id="village" name="village"  class="select-option">
                <option value="" class="margin">Select Village</option>
                 <?php if(!empty($village)){foreach($village as $rov){?>
                  <option value="<?php echo $rov->id;?>" <?php if($rod->vlg_id==$rov->id){?>selected<?php }?>><?php echo $rov->name;?></option>
                <?php } }?>
              </select>
             <p class="error village"></p>
            </div>
          
            <div class="form-registration-details">
              <label class="form-text">Khadki </label>
              <input type="hidden" name="oldkhd" value="<?php echo trim($rod->khad_id ?? "");?>">
              <select id="khadki" name="khadki"  class="select-option">
                <option value="">Select Khadki</option>
                 <?php if(!empty($khadki)){foreach($khadki as $rok){?>
                  <option value="<?php echo $rok->id;?>" <?php if($rod->khad_id==$rok->id){?>selected<?php }?>><?php echo $rok->name;?></option>
                <?php } }?>
              </select>
              <!-- <p class="error">Please enter a email</p> -->
              <p class="error khadki"></p>
            </div>
            
          </div>
          
        </div>

        <div class="location-container">
           <div>
            <h2 class="heading-primary">Reference</h2>
          </div>
          <div class="registration-form">
            <div class="form-registration-details">
              <label class="form-text" for="name">Name </label>
              <input type="text" id="rnm" name="rname" class="select-option"  value="<?php echo trim($rod->ref_name ?? "");?>" />
              <input type="hidden" name="oldrnm" value="<?php echo trim($rod->ref_name ?? "");?>">
             <p class="error rname"></p>
            </div>
            <div class="form-registration-details">
              <label class="form-text" for="select-village">Village Name </label>
<input type="hidden" name="oldrvl" value="<?php echo trim($rod->ref_vilid ?? "");?>">
              <select id="villager" name="villager"  class="select-option">
                <option value="" class="margin">Select Village</option>
                 <?php if(!empty($village)){foreach($village as $rov){?>
                  <option value="<?php echo $rov->id;?>" <?php if($rod->ref_vilid==$rov->id){?>selected<?php }?>><?php echo $rov->name;?></option>
                <?php } }?>
              </select>
             <p class="error villager"></p>
            </div>            
            <div class="form-registration-details">
              <label class="form-text">Khadki </label>
          <input type="hidden" name="oldrkd" value="<?php echo trim($rod->ref_khdid ?? "");?>">
              <select id="khadkir" name="khadkir"  class="select-option">
                <option value="">Select Khadki</option>
                 <?php if(!empty($khadkiref)){foreach($khadkiref as $khr){?>
                  <option value="<?php echo $khr->id;?>" <?php if($rod->ref_khdid==$khr->id){?>selected<?php }?>><?php echo $khr->name;?></option>
                <?php } }?>
              </select>
              <p class="error khadkir"></p>
            </div>
           
          </div>
        </div>

    <?php } }?>
    </div>
    </div>

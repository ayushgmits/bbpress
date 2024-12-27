<?php
/**
* Template Name: Edit Profile
*
*/

get_header();
wp_enqueue_script('md-edit-profile-script', get_stylesheet_directory_uri() . '/assets/js/edit-profile.js', array('jquery'), '1.0', true);
$owner_get = apply_filters('owner_get', ['status' => false, 'message' => 'Error']);
if($owner_get['status']){
    $owner_data = $owner_get['response']->Owner_GetResult->Owner;

    $ID = isset($owner_data->ID) ? $owner_data->ID : '';
    $FirstName = isset($owner_data->FirstName) ? $owner_data->FirstName : '';
    $LastName = isset($owner_data->LastName) ? $owner_data->LastName : '';
    $Email = isset($owner_data->Email) ? $owner_data->Email : '';
    $Phone1 = isset($owner_data->Phone1) ? $owner_data->Phone1 : '';
    $Phone2 = isset($owner_data->Phone2) ? $owner_data->Phone2 : '';
    $Fax = isset($owner_data->Fax) ? $owner_data->Fax : '';
    $StreetAddress = isset($owner_data->StreetAddress) ? $owner_data->StreetAddress : '';
    $City = isset($owner_data->City) ? $owner_data->City : '';
    $PostalCode = isset($owner_data->PostalCode) ? $owner_data->PostalCode : '';
    $State = isset($owner_data->State) ? $owner_data->State : '';
    $Country = isset($owner_data->Country) ? $owner_data->Country : '';

}
?>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-4">
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <div class="profile-img position-relative profile-logo profile-logo1">
                                <img src="<?php echo MD_PATH; ?>/assets/images/avatars/profile.png" alt="User-Profile"
                                    class="theme-color-default-img img-fluid rounded-pill avatar-140" loading="lazy">
                            </div>
                            <div>
                                <h5 class="mb-1" ><?php if(isset($FirstName)) echo $FirstName; ?></h5>
                                <a href="mailto:<?php if(isset($Email)) echo $Email; ?>" class="text-body" ><?php if(isset($Email)) echo $Email; ?></a>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="<?php echo get_option('md_options')['user_profile_url']; ?>" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mb-0">
                <div class="card-body">
                    <form id="editProfileForm">
                        <div class="pb-5 mb-5 border-bottom">
                            <h5 class="mb-4">Profile Information</h5>
                            <div class="row">
                                <input type="hidden" name="ID" value="<?php if(isset($ID)) echo $ID; ?>"  class="form-control">
                                <div class="col-md-6 ">
                                    <div class="form-group mb-0">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="FirstName" value="<?php if(isset($FirstName)) echo $FirstName; ?>"  class="form-control" placeholder="Enter first name" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-md-0">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" name="LastName" value="<?php if(isset($LastName)) echo $LastName; ?>"  class="form-control" placeholder="Enter last name" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" name="Email" value="<?php if(isset($Email)) echo $Email; ?>"  class="form-control" placeholder="Enter email address" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Phone</label>
                                        <input type="text" value="<?php if(isset($Phone1)) echo $Phone1; ?>"  class="form-control" placeholder="Enter phone number" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-4">Owner Information</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Owner ID</label>
                                        <input type="text" name="OwnerNumber" value="<?php if(isset($OwnerNumber)) echo $OwnerNumber; ?>"  class="form-control" placeholder="Enter first name" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Spouse Name</label>
                                        <input type="text" name="SpouseName" value="<?php if(isset($SpouseName)) echo $SpouseName; ?>"  class="form-control" placeholder="Enter spouse name" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Spouse Last Name</label>
                                        <input type="text" name="SpouseLastName" value="<?php if(isset($SpouseLastName)) echo $SpouseLastName; ?>"  class="form-control" placeholder="Enter spouse last name" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Phone Number 1</label>
                                        <input type="text" name="Phone1" value="<?php if(isset($Phone1)) echo $Phone1; ?>"  class="form-control" placeholder="Enter phone number" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Phone Number 2</label>
                                        <input type="text" name="Phone2" value="<?php if(isset($Phone2)) echo $Phone2; ?>"  class="form-control" placeholder="Enter phone number" >
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Fax</label>
                                        <input type="text" name="Fax" value="<?php if(isset($Fax)) echo $Fax; ?>"  class="form-control" placeholder="Enter fax number" >
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Street Address</label>
                                        <input type="text" name="StreetAddress" value="<?php if(isset($StreetAddress)) echo $StreetAddress; ?>"  class="form-control" placeholder="Enter address" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">City</label>
                                        <input type="text" name="City" value="<?php if(isset($City)) echo $City; ?>"  class="form-control" placeholder="Enter city" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Zip Code</label>
                                        <input type="text" name="PostalCode" value="<?php if(isset($PostalCode)) echo $PostalCode; ?>"  class="form-control" placeholder="Enter code" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">State</label>
                                        <input type="text" name="State" value="<?php if(isset($State)) echo $State; ?>"  class="form-control" placeholder="Enter state" >
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Country</label>
                                        <input type="text" name="Country" value="<?php if(isset($Country)) echo $Country; ?>"  class="form-control" placeholder="Enter country" >
                                    </div>
                                </div>
                                <!-- Add more fields as necessary -->
                                <div class="col-md-12 mt-5">
                                    <div class="d-flex align-items-center justify-content-end gap-3">
                                        <button type="submit" class="btn btn-primary" id="saveChangesButton">Save Changes</button>
                                        <button type="button" class="btn btn-outline-primary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn"
        aria-labelledby="shareBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <div class="d-flex flex-wrap align-items-center">
                <div class="text-center me-3 mb-3">
                    <img src="<?php echo MD_PATH; ?>/assets/images/brands/08.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>Facebook</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="<?php echo MD_PATH; ?>/assets/images/brands/09.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>Twitter</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="<?php echo MD_PATH; ?>/assets/images/brands/10.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>Instagram</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="<?php echo MD_PATH; ?>/assets/images/brands/11.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>Google Plus</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="<?php echo MD_PATH; ?>/assets/images/brands/13.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>In</h6>
                </div>
                <div class="text-center me-3 mb-3">
                    <img src="<?php echo MD_PATH; ?>/assets/images/brands/12.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
                    <h6>YouTube</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
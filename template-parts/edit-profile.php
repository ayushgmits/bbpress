<?php
/**
* Template Name: Edit Profile
*
*/
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
                                <h5 class="mb-1">Cameron Williamson</h5>
                                <a href="mailto: cameronwilli1212@gmail.com"
                                    class="text-body">cameronwilli1212@gmail.com</a>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="../app/user-profile.html" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="pb-5 mb-5 border-bottom">
                        <h5 class="mb-4">Profile Information</h5>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group mb-0">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter first name"
                                        value="Cameron">
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0">
                                <div class="form-group mb-0">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter last name"
                                        value="Williamson">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control" placeholder="Enter email address"
                                        value="cameronwilli1212@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" placeholder="Enter phone number"
                                        value="1234567890">
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
                                    <input type="text" class="form-control" placeholder="Enter first name" value="54">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Spouse Name</label>
                                    <input type="text" class="form-control" placeholder="Enter spouse name"
                                        value="test">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Spouse Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter spouse last name"
                                        value="user">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Phone Number 1</label>
                                    <input type="text" class="form-control" placeholder="Enter phone number"
                                        value="1234567890">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Phone Number 2</label>
                                    <input type="text" class="form-control" placeholder="Enter phone number"
                                        value="1234567890">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Fax</label>
                                    <input type="text" class="form-control" placeholder="Enter fax number"
                                        value="1234-5678-9101">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Street Address</label>
                                    <input type="text" class="form-control" placeholder="Enter address"
                                        value="9062 Morris Run, Armstrongfort, OK 01173">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" placeholder="Enter city" value="California">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" placeholder="Enter code" value="90001">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" placeholder="Enter state"
                                        value="California">
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control" placeholder="Enter country" value="USA">
                                </div>
                            </div>
                            <div class="col-md-12 mt-5">
                                <div class="d-flex align-items-center justify-content-end gap-3">
                                    <button class="btn btn-primary">Save Changes</button>
                                    <button class="btn btn-outline-primary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
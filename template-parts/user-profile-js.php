<?php
get_header();
wp_enqueue_script('md-user-profile-script', get_stylesheet_directory_uri() . '/assets/js/user-profile.js', array('jquery'), '1.0', true);
?>
<div id="loader" class="loader_inner">
    <div class="loader_inner"></div>
</div>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12 profile-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-4">
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <div class="profile-img position-relative profile-logo profile-logo1">
                                <img src="<?php echo MD_PATH; ?>/assets/images/avatars/profile.png" alt="User-Profile"
                                    class="theme-color-default-img img-fluid rounded-pill avatar-140" loading="lazy">
                            </div>
                            <div>
                                <div class="input-wrapper">
                                    <h5 class="mb-1" soap_api_fetch_owner_data>{{FirstName}}</h5>
                                    <div class="placeholder-animation"></div>
                                </div>
                                <div class="input-wrapper">
                                    <a href="mailto:{{Email}}" class="text-body" soap_api_fetch_owner_data>{{Email}}</a>
                                    <div class="placeholder-animation"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="<?php echo get_permalink( get_page_by_path( 'edit-profile' ) ); ?>" class="btn btn-primary">Edit Profile</a>
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
                                    <div class="input-wrapper">
                                        <input type="text" value="{{FirstName}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter first name" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0">
                                <div class="form-group mb-0">
                                    <label class="form-label">Last Name</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{LastName}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter last name" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">E-mail</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{Email}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter email address" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Phone</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{Phone1}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter phone number" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
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
                                    <div class="input-wrapper">
                                        <input type="text" value="{{OwnerNumber}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter first name" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Spouse Name</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{SpouseName}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter spouse name" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Spouse Last Name</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{SpouseLastName}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter spouse last name" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Phone Number 1</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{Phone1}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter phone number" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Phone Number 2</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{Phone2}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter phone number" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Fax</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{Fax}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter fax number" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Street Address</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{StreetAddress}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter address" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">City</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{City}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter city" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Zip Code</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{PostalCode}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter code" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">State</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{State}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter state" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="form-group mb-0">
                                    <label class="form-label">Country</label>
                                    <div class="input-wrapper">
                                        <input type="text" value="{{Country}}" soap_api_fetch_owner_data class="form-control" placeholder="Enter country" disabled>
                                        <div class="placeholder-animation"></div>
                                    </div>
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
<?php
get_footer();
?>
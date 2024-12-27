jQuery(document).ready(function($) {
    jQuery('#editProfileForm').on('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const formDataObject = {};
        formData.forEach((value, key) => {
            if(value != ''){
                formDataObject[key] = value;
            }
        });

        // Send the data via AJAX
        jQuery.ajax({
            url: mdData.ajax_url, // WordPress provides this variable
            type: 'POST',
            data: { action: 'Owner_Update', formData: formDataObject },
            success: function(response) {
                if(response.status){
                    console.log('Success:', response.response);
                    window.location.href = mdData.user_profile_url;
                }else{
                    console.error('Update Error:', response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('Ajax Error:', error);
            }
        });
    });
});
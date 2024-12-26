jQuery(document).ready(function($) {
    // Show loader
    jQuery('#loader').show();

    // Fetch data using AJAX
    jQuery.ajax({
        url: mdData.ajax_url,
        method: 'GET',
        data: { action: 'fetch_owner_data' },
        success: function(response) {
            if (response.status) {
                // Iterate over each element with a soap-api attribute
                jQuery('[soap_api_fetch_owner_data]').each(function() {
                    var element = jQuery(this);

                    // Replace text content
                    if (element.contents().length && element.contents()[0].nodeType === Node.TEXT_NODE) {
                        var textContent = element.text();
                        var newText = textContent.replace(/{{(.*?)}}/g, function(match, key) {
                            return response.data[key] || '';
                        });
                        element.text(newText);
                    }

                    // Replace value for input elements
                    if (element.is('input, textarea')) {
                        var inputValue = element.val();
                        var newValue = inputValue.replace(/{{(.*?)}}/g, function(match, key) {
                            return response.data[key] || '';
                        });
                        element.val(newValue);
                    }

                    // Replace placeholders in attributes
                    jQuery.each(element[0].attributes, function(index, attr) {
                        if (attr.value.includes('{{')) {
                            var newAttrValue = attr.value.replace(/{{(.*?)}}/g, function(match, key) {
                                return response.data[key] || '';
                            });
                            element.attr(attr.name, newAttrValue);
                        }
                    });
                });
            } else {
                console.error(response.message);
            }
        },
        error: function(error) {
            console.error('Error:', error);
        },
        complete: function() {
            // Hide loader
            jQuery('#loader').hide();
            jQuery('.placeholder-animation').hide();
        }
    });
});
jQuery(document).ready(function($) {
    "use strict";

    $('#ashe-demo-import').on( 'click', function() {

        $('#ashe-demo-import').text( 'Please Wait...' );
        $(this).append( '<span class="dashicons dashicons-update-alt spin"></span>' );

        // Checked Plugins
        var elementor           = $('#elementor').is( ':checked' ),
            contact_from_7      = $('#contact_from_7').is( ':checked' ),
            instagram_feed      = $('#instagram_feed').is( ':checked' ),
            wysija_newsletter   = $('#wysija_newsletter').is( ':checked' ),
            recent_posts        = $('#recent_posts').is( ':checked' );

        var elementor_active = false,
            cf7_active = false,
            instagram_active = false,
            newsletter_active = false,
            recent_posts_active = false;

        var startImport = true;

        // Activate Elementor
        if ( true == elementor ) {
            wp.updates.installPlugin({
                slug: 'elementor',
                success: function() {
                    ajaxPluginInstall( 'ashextra_elementor_activation', elementor );
                    elementor_active = true;
                },
                error: function( xhr, ajaxOptions, thrownerror ) {
                    console.log(xhr.errorCode)
                    elementor_active = true;
                    if ( 'folder_exists' === xhr.errorCode ) {
                        ajaxPluginInstall( 'ashextra_elementor_activation', elementor );
                    }
                },
            });
        }

        // Activate Contact Form 7
        if ( true == contact_from_7 ) {
            wp.updates.installPlugin({
                slug: 'contact-form-7',
                success: function() {
                    ajaxPluginInstall( 'ashextra_contact_from_7_activation', contact_from_7 );
                    cf7_active = true;
                },
                error: function( xhr, ajaxOptions, thrownerror ) {
                    console.log(xhr.errorCode)
                    cf7_active = true;
                    if ( 'folder_exists' === xhr.errorCode ) {
                        ajaxPluginInstall( 'ashextra_contact_from_7_activation', contact_from_7 );
                    }
                },
            });
        }
            
        // Activate Instagram Feed
        if ( true == instagram_feed ) {
            wp.updates.installPlugin({
                slug: 'instagram-feed',
                success: function() {
                    ajaxPluginInstall( 'ashextra_instagram_feed_activation', instagram_feed );
                    instagram_active = true;
                },
                error: function( xhr, ajaxOptions, thrownerror ) {
                    console.log(xhr.errorCode)
                    instagram_active = true;
                    if ( 'folder_exists' === xhr.errorCode ) {
                        ajaxPluginInstall( 'ashextra_instagram_feed_activation', instagram_feed );
                    }
                },
            });
        }
            
        // Activate Mailpoet 2
        if ( true == wysija_newsletter ) {
            wp.updates.installPlugin({
                slug: 'wysija-newsletters',
                success: function() {
                    ajaxPluginInstall( 'ashextra_wysija_newsletter_activation', wysija_newsletter );
                    newsletter_active = true;
                },
                error: function( xhr, ajaxOptions, thrownerror ) {
                    console.log(xhr.errorCode)
                    newsletter_active = true;
                    if ( 'folder_exists' === xhr.errorCode ) {
                        ajaxPluginInstall( 'ashextra_wysija_newsletter_activation', wysija_newsletter );
                    }
                },
            });
        }

        // Activate Recent Posts Widget
        if ( true == recent_posts ) {
            wp.updates.installPlugin({
                slug: 'recent-posts-widget-with-thumbnails',
                success: function() {
                    ajaxPluginInstall( 'ashextra_recent_posts_activation', recent_posts );
                    recent_posts_active = true;
                },
                error: function( xhr, ajaxOptions, thrownerror ) {
                    console.log(xhr.errorCode)
                    recent_posts_active = true;
                    if ( 'folder_exists' === xhr.errorCode ) {
                        ajaxPluginInstall( 'ashextra_recent_posts_activation', recent_posts );
                    }
                },
            });
        }

        var pluginsInstalled = setInterval(function() {
            if ( elementor ) {
                startImport = false;
                if  ( elementor_active ) {
                    startImport = true;
                }
            }

            if ( contact_from_7 ) {
                startImport = false;
                if  ( cf7_active ) {
                    startImport = true;
                }
            }

            if ( instagram_feed ) {
                startImport = false;
                if  ( instagram_active ) {
                    startImport = true;
                }
            }

            if ( wysija_newsletter ) {
                startImport = false;
                if  ( newsletter_active ) {
                    startImport = true;
                }
            }

            if ( recent_posts ) {
                startImport = false;
                if  ( recent_posts_active ) {
                    startImport = true;
                }
            }

            // Import Demo Content
            if ( startImport ) {
                setTimeout(function() {
                $.ajax({
                    type: 'POST',
                    url: ajaxurl,
                    data: {
                        action: 'ashextra_import_xml'
                    },
                    success: function(data, textStatus, XMLHttpRequest){
                        console.log(data)
                        console.log(textStatus.responseText)
                        console.log(XMLHttpRequest)
                        setTimeout(function() {
                            var importButton = $('#ashe-demo-import');

                            importButton.remove( '.dashicons' );
                            importButton.text( 'Import Completed!' );
                            importButton.attr( 'disabled', 'disabled' );
                            $( '.after-import-notice' ).show();
                        }, 5000 );
                    },
                    error: function(MLHttpRequest, textStatus, errorThrown){
                        console.log(MLHttpRequest);
                        console.log(textStatus.responseText);
                        console.log(errorThrown);
                    }
                });

                console.log('Demo Import Started!');
                }, 10000);

                clearInterval( pluginsInstalled );
            }
        }, 1000);

    });

    function ajaxPluginInstall( action, plugin ) {
        $.post(
            ajaxurl,
            {
                action: action,
                ashextra_plugin_checked: plugin,
            },
            function(response) {}
        )
    }


}); // end dom ready
<?php

return [

    'stache' => 'The "Stache"',
    'stache_instruct' => 'Our affectionate name for Statamic\'s internal cache.',

    'stache_always_update' => 'Update the Stache on every request?',
    'stache_always_update_instruct' => 'Updating on every request will allow changes directly to files be detected, but it comes with a performance hit.
                                       If you\'re using the control panel to manage content, you can disable this as the Stache will get updated when you publish.',

   'static_caching' => 'Static Page Caching',
   'static_caching_instruct' => 'Static Page Caching allows your web pages to be saved as flat HTML files for incredible speed benefits.',

   'static_caching_enabled' => 'Enable',

   'static_caching_length' => 'Default Cache length',
   'static_caching_length_instruct' => 'How long should each page be cached, in seconds.',

   'static_caching_type' => 'Caching Type',
   'static_caching_type_instruct' => 'Saving to file will generate html files at `static`, and you will need to set up your htaccess.
                                      Otherwise, the standard cache will be used.',

];

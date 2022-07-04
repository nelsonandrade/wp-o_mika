<?php
// strings for all pages

$TvrLang = array(

	'google_font' => esc_html__('Google Font...', 'microthemer'),
	'browse_gf' => esc_html__('Browse fonts...', 'microthemer'),

	'slim' => esc_html__('slim', 'microthemer'),
	'medium' => esc_html__('medium', 'microthemer'),
	'wide' => esc_html__('wide', 'microthemer'),

	'recent' => esc_html__('Recent', 'microthemer'),
	'suggestions' => esc_html__('Suggestions', 'microthemer'),
	'add_mt_suggestions' => esc_html__('Add MT suggestions', 'microthemer'), // (hold shift for all properties)
	'clear_mt_suggestions' => esc_html__('Clear MT suggestions (keeps recent & saved)', 'microthemer'),
	'clear_single_suggestion' => esc_html__('Clear suggestion', 'microthemer'),
	'save_single_suggestion' => esc_html__('Save suggestion', 'microthemer'),
	'unsave_single_suggestion' => esc_html__('Un-save suggestion', 'microthemer'),
	'sampled' => esc_html__('Sampled values', 'microthemer'),
	'sampled_variables' => esc_html__('Site variables', 'microthemer'),
	'clear_sampled' => esc_html__("Clear sampled %s values", 'microthemer'),
	'clear_sampled_variables' => esc_html__("Clear sampled %s variables", 'microthemer'),
	'resample' => esc_html__("Resample %s values from the page", 'microthemer'), //
	'resample_variables' => esc_html__("Resample variables from the page", 'microthemer'),

	'multi_tab_short' => esc_html__('Multiple tabs/users issue', 'microthemer'),
	'multi_tab_long' => esc_html__('MT settings were updated more recently by another user or browser tab. Saving from this outdated tab could cause data loss. Please reload the page instead of saving from this tab (to get the latest changes).',  'microthemer'),

	'inline_animation_short' => esc_html__('Animation fails with display:inline', 'microthemer'),
	'inline_animation_long' => esc_html__('Microthemer\'s animate.css animations do not always work well when elements have a display value of inline. To fix, go to the Behaviour property group and set the Display property to e.g. inline-block', 'microthemer'),

	'notify_folder_limit_short' => esc_html__('Max selectors per folder reached (%s)', 'microthemer'),
	'notify_folder_limit_long' => esc_html__('Your last selector was added to an auto-generated folder (%s) because your "%s" folder reached the limit of 40 selectors.', 'microthemer'),

	'learn_more' => esc_html__('Learn more', 'microthemer'),
	'slow_styles_tab' => esc_html__('Styles tab slows the browser: %s sec (avg)', 'microthemer'),

	'base_styles' => esc_html__('Starter styles', 'microthemer'),
	'add_base_styles' => esc_html__('Add starter styles', 'microthemer'),
	'remove_base_styles' => esc_html__('Remove starter styles', 'microthemer'),

	'drag_picker' => esc_html__('Drag to move color picker', 'microthemer'),
	'parents' => esc_html__('Parents', 'microthemer'),
	'parent' => esc_html__('Go to parent', 'microthemer'),
	'prev_sibling' => esc_html__('Go to previous sibling', 'microthemer'),
	'next_sibling' => esc_html__('Go to next sibling', 'microthemer'),

	'all_devices' => esc_html__('all devices', 'microthemer'),
	'inherited_from' => esc_html__('Inherited from', 'microthemer'),
	'mt_stylesheet' => esc_html__('(Microthemer Stylesheet)', 'microthemer'),
	// strings for main script: ../js/tvr-microthemer.js
	'invalid_sel' => esc_html__('Invalid selector', 'microthemer'),
	'invalid_sel_long' => esc_html__('Microthemer found the selector to be invalid. It will not target any elements on the page.', 'microthemer'),
	'n_els' => esc_html__('Targets %s element', 'microthemer'),
	'n_els_plural' => esc_html__('Targets %s elements', 'microthemer'),
	'interface' => esc_html__('Microthemer interface', 'microthemer'),
	'frontend' => esc_html__('Frontend preview', 'microthemer'),
	'css_parse_error' => esc_html__('CSS processing error', 'microthemer'),
	'css_parse_error_long' => esc_html__('The selected CSS has an incomplete structure. Please check curly braces etc', 'microthemer'),
	'enter_css_source' => esc_html__('You have selected the option to "Make relative URLs absolute" and/or "Copy remote images to WP media library". Please enter an URL for the original CSS stylesheet above the editor so Microthemer can auto-adjust file paths (even if you do not wish to use the "LOAD STYLESHEET" button).', 'microthemer'),
	'more' => esc_html__('more', 'microthemer'),
	'imp_css_folder' => esc_html__('Imported CSS', 'microthemer'),
	'imp_css_empty' => esc_html__('Nothing found. Please highlight the code you would like to import.'),
	'already_exists_folder' => esc_html__('A folder with that name already exists. Please enter a unique name.', 'microthemer'),
	'already_exists_selector' => esc_html__('A selector with that name already exists. Please enter a unique name.', 'microthemer'),
	'already_exists_misc' => esc_html__('A %s with that name already exists. Please enter a unique name.', 'microthemer'),
	'popup_blocked' => esc_html__('Preview window blocked', 'microthemer'),
	'popup_blocked_long' => esc_html__('Microthemer tried to load the preview in a new window, as per your "Detach preview" setting in the VIEW menu. But your browser blocked this. Please use the option in your address bar to allow popups on this site, then refresh the page.', 'microthemer'),
	'untitled' => esc_html__('Untitled', 'microthemer'),
	'untitled_folder' => esc_html__('Untitled folder', 'microthemer'),
	'custom_code' => esc_html__('Full code editor', 'microthemer'),
	'item' => esc_html__('item', 'microthemer'),
	'too_much_css' => esc_html__('The current page loads too much CSS for Microthemer to routinely analyse on this tab.', 'microthemer'),
	'force_styles_analysis' => esc_html__('Force one-time analysis', 'microthemer'),
	'too_much_css_2' => esc_html__('Please use the "Computed" tab or browser dev tools instead.', 'microthemer'),
	'sample_css_confirm' => esc_html__("It may take Microthemer several seconds to scan for CSS values (%d CSS rules detected). Your browser will be unresponsive during the scan, but the information collected may be useful. OK to proceed?"),

	//'same_domain' => esc_html__('Domain name mismatch', 'microthemer'),
	//'same_domain_long' => esc_html__('Microthemer can only load pages that start with your domian name', 'microthemer'),

	'edit_elsewhere_short' => esc_html__('Edit selector elsewhere', 'microthemer'),
	'edit_elsewhere_long' => esc_html__('Only the area between the opening and closing braces is editable { ... }. Please edit the CSS selector code by clicking the name of the selector in the top toolbar. Updating this will auto-update the custom code editors across all tabs.', 'microthemer'),
	'imp_sels_too' => esc_html__('To import styles, import selectors must be set to Yes', 'microthemer'),
	'css_import_short' => esc_html__('Only use .css files', 'microthemer'),
	'css_import_long' => esc_html__('Please enter the full URL to a CSS stylesheet. These always end with the extension \'.css\'.', 'microthemer'),
	'scss_import_long' => esc_html__('Mirothemer doesn\'t currently support importing .scss stylesheets. Only plain CSS stylesheets. Please import directly from the CSS file generated by the SCSS file you entered.', 'microthemer'),

	'toggle_highlighting' => esc_html__('Selector highlighting', 'microthemer'),
	'update_selector' => esc_html__('Update selector', 'microthemer'),
	'current_selector' => esc_html__('Current selector', 'microthemer'),
	'update_selector_tt' => esc_html__('NOTE: current selector will be renamed/reorganised if you change the Name or Folder fields above.', 'microthemer'),
	'folder_disabled' => esc_html__('Current folder is disabled', 'microthemer'),
	'editor_updated' => esc_html__('code editor updated', 'microthemer'),
	'selector_disabled' => esc_html__('Current selector is disabled', 'microthemer'),
	'group_disabled' => esc_html__('Group disabled', 'microthemer'),
	'enable_with_icon' => esc_html__('Click the un/disable icon in the folders and selectors menu to re-enable it.', 'microthemer'),
	'enter_folder_name' => esc_html__('Please enter a value for the folder name', 'microthemer'),
	'enter_name_misc' => esc_html__('Please enter a value for the %s name', 'microthemer'),
	'load_after_moving' => esc_html__('load selector after moving', 'microthemer'),
	'trial_notice' => esc_html__('Please enter your license key to unlock the full program! With the free trial you are limited to editing or creating 15 Selectors. And not all style options are available e.g. masks, flexbox, grid, animation, transition, transform', 'microthemer'),
	'complete_media_fields' => esc_html__('Please complete all media query fields or delete empty ones.', 'microthemer'),
	'load_style_opt' => esc_html__('Loading style options', 'microthemer'),
	'load_style_opt_failed' => esc_html__('Options failed to load', 'microthemer'),
	'load_failed_explain' => esc_html__('The styling options failed to load into the interface. This sometimes happens if WordPress silently logs you out or because your "nonce" expires as a result of inactivity. Please refresh the page and try to log back in if necessary.', 'microthemer'),
	'load_before_retargeting' => esc_html__('Loading selector before re-targeting', 'microthemer'),
	'load_before_modifying' => esc_html__('Loading selector before modifying', 'microthemer'),
	'load_before_clearing' => esc_html__('Loading selector before clearing', 'microthemer'),
	'load_before_iterating' => esc_html__('Loading selector before navigating', 'microthemer'),
	'load_before_copying' => esc_html__('Loading selector before copying', 'microthemer'),
	'copy' => esc_html__('Copy', 'microthemer'),
	'moved' => esc_html__('Moved', 'microthemer'),
	'sec_disable' => esc_html__('Loading folder before disabling', 'microthemer'),
	'sec_rename' => esc_html__('Loading folder before modifying', 'microthemer'),
	'sec_copy' => esc_html__('Loading folder before copying', 'microthemer'),
	'sec_clear' => esc_html__('Loading folder before clearing', 'microthemer'),
	'fields_sync' => esc_html__('fields synchronized', 'microthemer'),
	'select_enter_folder' => esc_html__('Select folder, or enter new name', 'microthemer'),
	'original_label' => esc_html__('Original label', 'microthemer'),
	'label_suggestions' => esc_html__('Label suggestions', 'microthemer'),
	//'save_settings' => esc_html__('Save settings', 'microthemer'),
	'settings_saved_and_published' => esc_html__('Settings saved and published', 'microthemer'),
	'settings_saved' => esc_html__('Draft saved', 'microthemer'),
	'save_settings' => esc_html__('Saving settings', 'microthemer'),
	'save_settings_error' => esc_html__('Save error', 'microthemer'),
	'initial_welcome' => esc_html__('Click to style anything', 'microthemer'),
	'publish' => esc_html__('Publish', 'microthemer'),
	'published' => esc_html__('Published', 'microthemer'),
	'ready_to_publish' => esc_html__('Ready to publish', 'microthemer'),
	'publishing_settings' => esc_html__('Publishing settings', 'microthemer'),
	'settings_published' => esc_html__('Settings published', 'microthemer'),
	'settings_published_long' => esc_html__('Your latest changes are live.', 'microthemer'),
	'settings_published_long_p2' => esc_html__('Remember to clear your cache if you use a caching plugin.', 'microthemer'),
	'publish_failed' => esc_html__('Publish failed', 'microthemer'),
	//'draft_mode' => esc_html__('draft mode', 'microthemer'),
	'draft_enabled' => esc_html__('draft mode enabled', 'microthemer'),
	'draft_disabled' => esc_html__('draft mode disabled (changes published)', 'microthemer'),
	'keyboard_shortcut' => esc_html__('keyboard shortcut', 'microthemer'),
	'qedit_current_folder' => esc_html__('Quick edit - current folder', 'microthemer'),
	'qedit_current_selector' => esc_html__('Quick edit - current selector', 'microthemer'),
	'load_revisions_table' => esc_html__('Loading revisions table', 'microthemer'),
	'load_revisions_table_failed' => esc_html__('Revisions failed to load', 'microthemer'),
	'retrieve_css' => esc_html__('Retrieving CSS', 'microthemer'),
	'retrieve_css_failed' => esc_html__('CSS failed to load', 'microthemer'),
	'remove_builder_edit_lock' => esc_html__('Removing %s edit lock', 'microthemer'),
	'remove_builder_edit_lock_failed' => esc_html__('%s edit lock could not be removed', 'microthemer'),
	'loading_sass_import' => esc_html__('Fetching Sass import', 'microthemer'),
	'loading_sass_import_failed' => esc_html__('Sass import failed to load', 'microthemer'),
	'scss_error' => esc_html__('Sass error - compilation failed', 'microthemer'),
	'scss_error_long' => esc_html__('An error in your Sass code prevented it from being compiled to CSS', 'microthemer'),
	'scss_error_line' => esc_html__('View the error line (Ctrl + Alt + G)', 'microthemer'),
	'compile_scss' => esc_html__('Compiling SCSS', 'microthemer'),
	'color_var_label' => esc_html__('Enter variable', 'microthemer'),
	'save_fonts' => esc_html__('Saving font settings', 'microthemer'),
	'save_fonts_failed' => esc_html__('Font settings failed to save', 'microthemer'),
	'load_script' => esc_html__('Loading Javascript', 'microthemer'),
	'load_script_failed' => esc_html__('Script failed to load', 'microthemer'),
	'load_script_failed_p' => esc_html__('The %s failed to load.', 'microthemer'),
	'delete_folder_confirm' => esc_html__('Are you sure you want to delete your "%s" folder?', 'microthemer'),
	'clear_folder_confirm' => esc_html__('Are you sure you want to clear your "%s" folder?', 'microthemer'),
	'reset_settings_confirm' => esc_html__('Are you sure you want to reset all settings?', 'microthemer'),
	'reset_empty_folders' => esc_html__('Resetting empty folders', 'microthemer'),
	//'clear_styles_confirm' => esc_html__('Are you sure you want to clear all styles?', 'microthemer'),
	'beaver_builder_confirm' => esc_html__('Beaver Builder is active. You will lose any unsaved Beaver Builder changes. Continue anyway?', 'microthemer'),
	'page_reload_aborted' => esc_html__('Settings were saved. But you may need to reload the Microthemer interface to see the effects', 'microthemer'),
	'current_page' => esc_html__('current page', 'microthemer'),
	'halted' => esc_html__('halted', 'microthemer'),
	//'clear_styles' => esc_html__('Clearing styles', 'microthemer'),
	'value_cleared' => esc_html__('value cleared', 'microthemer'),
	'previous_name' => esc_html__('Previous name', 'microthemer'),
	'previous_code' => esc_html__('Previous code', 'microthemer'),
	'new_name' => esc_html__('New name', 'microthemer'),
	'new_code' => esc_html__('New code', 'microthemer'),
	'selector_created' => esc_html__('Create selector', 'microthemer'),
	'selector_modified' => esc_html__('Modify selector', 'microthemer'),

	'restore_settings_confirm' => esc_html__('Are you sure you want to restore previous settings?', 'microthemer'),
	'restore_settings' => esc_html__('Restoring settings', 'microthemer'),

	'refresh_styles' => esc_html__('Refreshing frontend styles', 'microthemer'),
	'refresh_js' => esc_html__('Refreshing page for JavaScript', 'microthemer'),
	'error_connection' => esc_html__('Connection error. Request failed. Please try again.', 'microthemer'),
	'error_404' => esc_html__('Requested URL not found.', 'microthemer'),
	'error_500' => esc_html__('Internet Server Error.', 'microthemer'),
	'error_parser' => esc_html__('Error.\nParsing JSON Request failed.', 'microthemer'),
	'error_timeout' => esc_html__('Request timed out.', 'microthemer'),
	'error_unknown' => esc_html__('Unknown error. WordPress may have logged you out. Try refreshing the page.', 'microthemer'),
	'send_error' => esc_html__('Sending error report', 'microthemer'),
	'send_error_failed' => esc_html__('Error sending failed', 'microthemer'),
	'select_design_pack' => esc_html__('Please select a design pack from the list', 'microthemer'),
	'choose_import_method' => esc_html__('Please choose an import method (overwrite or merge with your current settings)', 'microthemer'),
	'import_settings' => esc_html__('Importing settings (%s)', 'microthemer'),
	'select_settings_pack' => esc_html__('Please select an existing settings pack or name a new one to export to', 'microthemer'),
	'enter_selector_name' => __('Please enter a value for the Selector name', 'tvr-microthemer'),
	'saving_preferences' => esc_html__('Saving preferences', 'microthemer'),
	'saving_mqs' => esc_html__('Saving media queries', 'microthemer'),
	'saving_enqjs' => esc_html__('Saving enqueued scripts', 'microthemer'),
	'enter_css' => esc_html__('Please enter some CSS selector code e.g. #header', 'microthemer'),
	'null_selector' => esc_html__('(selector targets nothing)', 'microthemer'),
	'value_varies' => esc_html__('(value varies)', 'microthemer'),
	'style_not_applicable' => esc_html__('(style not applicable)', 'microthemer'),
	'not_knowable' => esc_html__('(style not knowable)', 'microthemer'),
	'highest_specificity' => esc_html__(' (highest specificity)', 'microthemer'),
	'wizard_folder' => esc_html__('Enter new or select a folder...', 'microthemer'),
	'wizard_folder_alert' => esc_html__('Please select an existing folder or enter a new folder name', 'microthemer'),
	//'wizard_selector_alert' => esc_html__('Please enter a selector name', 'microthemer'),
	'load_wp' => esc_html__('Loading WordPress site', 'microthemer'),
	'loading_builder' => esc_html__('Loading builder', 'microthemer'),
	'mt_targeting_disabled' => esc_html__('MT targeting is OFF', 'microthemer'),
	'mt_targeting_enable' => esc_html__('Microthemer targeting has been switched off to allow for the builder targeting controls. To turn this back on, use the "Targeting mode" switch at the bottom right of the interface. Alternatively, use the keyboard shortcut (Ctrl + Alt + T)', 'microthemer'),
	'exiting_builder' => esc_html__('Exiting builder', 'microthemer'),
	'auto_conversion_performed' => esc_html__('Microthemer performed an auto-conversion of your input', 'microthemer'),
	'auto_values_rounded' => esc_html__('Note: values in the fields are rounded to 3 decimal places if necessary.', 'microthemer'),
	'something_wrong' => esc_html__('Something\'s wrong', 'microthemer'),
	'something_wrong_intro' => esc_html__('%s took more than %s seconds. A JavaScript error may be preventing the action from completing.', 'microthemer'),
	'js_error_site' => esc_html__('Microthemer discovered a JavaScript error on your site', 'microthemer'),
	'something_wrong_discovered' => esc_html__('The following errors were detected:', 'microthemer'),
	'something_wrong_no_errors' => esc_html__('Microthemer hasn\'t discovered any yet though.', 'microthemer'),
	'something_wrong_tips_heading' => esc_html__('Quick self-help tips', 'microthemer'),
	//'something_wrong_online' => esc_html__('more details online', 'microthemer'),
	'something_wrong_console_article' => esc_html__('Search for JavaScript errors using your browser\'s console.',
		'microthemer'),
	'something_wrong_reliable' => esc_html__('for the most reliable/detailed debug info.',
		'microthemer'),
	'something_wrong_disable' => esc_html__('If the JavaScript error URL hints at a particular plugin, disable it. If the Microthemer problem goes away, you know the source.', 'microthemer'),
	'something_wrong_clueless' => esc_html__('If you have no clue, disable all plugins. If the error goes away, it’s a case of re-enabling half of the plugins, then half again until you zero in on the culprit. ','microthemer'),
		'something_wrong_configure' => esc_html__('Plugins that concatenate, minify, or re-order CSS and JavaScript cause problems sometimes. Try playing around with the settings of such plugins.','microthemer'),
	'something_wrong_other' => wp_kses (
		sprintf(
			__('If plugins aren’t the cause, it\'s likely your theme or Microthemer itself. At this stage you might prefer to send us login details for your site via our <a %s>secure contact form</a>. If we can\'t isolate the issue from there we may ask for a backup of your site to test on without interfering with the live version.', 'microthemer'),
			'target="_blank" href="https://themeover.com/support/contact/"'
		),
		array( 'a' => array( 'href' => array(), 'target' => array() ) )
	),
	'something_wrong_priority' => wp_kses (
		sprintf(
			__('<b>Note:</b> any bugs or plugin conflicts you <a %s>report</a> get top priority and will be fixed within one or two days.', 'microthemer'),
			'target="_blank" href="https://themeover.com/support/contact/"'
		),
		array( 'a' => array( 'href' => array(), 'target' => array() ), 'b' => array() )
	),


	// frontend
	// text strings used by both parent and iframe

	// iframe only strings
	'update_jquery' => esc_html__('Update your jQuery! (1.9+)', 'microthemer'),
	'update_jquery_long' => esc_html__('Your WordPress install is running a version of jQuery older than 1.9. This means Microthemer can\'t retrieve the existing computed CSS values elements on your web page. Please update to the latest version of WordPress (which should also update jQuery). If this doesn\'t help please check your code for any functions that deregister the default version of jQuery. You can ask Themeover to help you with this. Thanks.', 'microthemer'),
	'highlighting_capped' => esc_html__('Highlighting capped', 'microthemer'),
	'highlighting_capped_long' => esc_html__('If your selector targets more than 20 elements on the page, Microthemer will only highlight and analyse the first 20 elements on the page. This is to avoid overworking your browser.', 'microthemer'),
	'navigate_wp_admin' => esc_html__('Admin area uneditable.', 'microthemer'),
	'navigate_wp_admin_long' => esc_html__('Navigating to the WP admin area from within a Microthemer preview is best avoided. Conceivably, you could end up editing a Microthemer interface from within a Microthemer interface. Think of the universe.', 'microthemer'),
	'navigate_mt' => esc_html__('You are already in MT', 'microthemer'),
	'navigate_mt_long' => esc_html__('Editing a Microthemer interface from within a Microthemer interface is best avoided!', 'microthemer'),
	'wizard_mode' => esc_html__("the 'Close wizard' link in the top toolbar.", 'microthemer'),
	'regular_mode' => esc_html__('the icon with horizontal green lines in the top toolbar.', 'microthemer'),
	'quick_create' => esc_html__('Create new', 'microthemer'),
	'quick_create_long' => esc_html__('Create a new selector', 'microthemer'),
	'quick_go' => esc_html__('Go to', 'microthemer'),
	'quick_go_long' => esc_html__('Go to a selector you have already created', 'microthemer'),
	'num_els_n' => esc_html__('The number of elements a selector targets', 'microthemer'),
	'equiv_sels' => esc_html__('Equivalent selectors', 'microthemer'),
	'choose_suggestion' => esc_html__('Choose suggestion', 'microthemer'),
	'choose_selector' => esc_html__('Choose selector', 'microthemer'),
	'targets_x_els' => esc_html__('Targets %d element', 'microthemer'),
	'targets_x_els_plural' => esc_html__('Targets %d elements', 'microthemer'),
	'custom' => esc_html__('Custom', 'microthemer'),
	'refresh_suggestions' => esc_html__('Refresh suggestions', 'microthemer'),
	'set' => esc_html__('set %d', 'microthemer'),

	// note, if changing key text - must update $this->css_filters = array
	'cur_pid_filter' => esc_html__('page-id', 'microthemer'),
	'cur_pname_filter' => esc_html__('page-name', 'microthemer'),

	// manage packs
	'theme_skin' => esc_html__('Theme Skin', 'microthemer'),
	'plugin_skin' => esc_html__('Plugin Skin', 'microthemer'),
	'theme_scaffold' => esc_html__('Theme Scaffold', 'microthemer'),
	'plugin_scaffold' => esc_html__('Plugin Scaffold', 'microthemer'),
	'select_zip' => esc_html__('Please select a design pack zip file to upload', 'microthemer'),
	'download_failed' => esc_html__('Microthemer was not able to download the design pack', 'microthemer'),
	'delete_pack_confirm' => esc_html__('Are you sure you want to delete this design pack?', 'microthemer'),
	'delete_pack_failed' => esc_html__('Microthemer was not able to delete the design pack', 'microthemer'),
	'external_notice' => esc_html__("Warning: this theme links to external images. If someone else installs your zipped theme the background images won't show.", 'microthemer'),
	'delete_file_confirm' => esc_html__('Are you sure you want to delete this file?', 'microthemer'),
	'view_pack_failed' => esc_html__('This file could not be opened in a browser.', 'microthemer'),
	'delete_failed' => esc_html__('Delete failed', 'microthemer'),
	'unable_load' => esc_html__('Microthemer was not able to load: ', 'microthemer'),

);




// main script
if ($_GET['page'] == $this->microthemeruipage){

	// we now use TvrLang in the mt-spectrum file so set the handle to tvr_deps when minified
	// so the var has loaded before the deps.js script
	$load_before_handle = TVR_DEV_MODE ? 'tvr_core' : 'tvr_deps';
	wp_localize_script( $load_before_handle, 'TvrLang', $TvrLang);
}
// any other page - add load deps.js (e.g. detached preview, manage packs etc)
else { // if ($_GET['page'] == $this->preferencespage) // stand alone prefs page needs too

	//wp_die('kill the script here');

	$load_before_handle = TVR_DEV_MODE ? 'tvr_core' : 'tvr_deps';
	wp_localize_script( $load_before_handle, 'TvrLang', $TvrLang); // tvr_man now
}

?>

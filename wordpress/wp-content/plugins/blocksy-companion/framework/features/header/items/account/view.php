<?php

if (! isset($device)) {
	$device = 'desktop';
}

$current_user_id = get_current_user_id();

if (is_customize_preview()) {
	if (blocksy_akg('account_state', $atts, 'in') === 'out') {
		$current_user_id = null;
	}
}

$icon = apply_filters('blocksy:header:account:icons', [
	'type-1' => '<svg class="ct-icon" width="15" height="15" viewBox="0 0 15 15"><path d="M7.5 0C3.4 0 0 3.4 0 7.5S3.4 15 7.5 15 15 11.6 15 7.5 11.6 0 7.5 0zm0 1.5c3.3 0 6 2.7 6 6 0 1.2-.4 2.4-1 3.2l-.6-.5C10.8 9.4 8.6 9 7.5 9s-3.3.4-4.4 1.2l-.6.5c-.6-.9-1-2-1-3.2 0-3.3 2.7-6 6-6zm0 1.4C6.1 2.9 5.1 4 5.1 5.3s1.1 2.5 2.4 2.5 2.4-1.1 2.4-2.5-1-2.4-2.4-2.4zm0 1.3c.5 0 .9.4.9.9 0 .6-.5.9-.9.9s-.9-.3-.9-.8.4-1 .9-1zm0 6.3c2.4 0 3.6.9 4.1 1.4-1 1-2.5 1.6-4.1 1.6s-3.1-.6-4.1-1.6c.5-.5 1.7-1.4 4.1-1.4zm-4.4 1c0 .1.1.2.3.3-.2-.1-.3-.2-.3-.3zm8.8 0c-.1 0-.1.1-.2.3.1-.1.2-.2.2-.3z"/></svg>',

	'type-2' => '<svg class="ct-icon" width="15" height="15" viewBox="0 0 15 15"><path d="M6.2 0C3.8 0 1.6 2 1.7 4.5v3.1c-.4.3-.7.8-.7 1.5 0 .8.4 1.4.9 1.7.3.2.3.1.5.2 1 2 2.9 3.7 5 4h.2c2.1-.3 4-2 5-4 .1 0 .2 0 .4-.1.5-.3 1-.9 1-1.8 0-.8-.4-1.4-.9-1.7-.2-.1-.2-.1-.4-.1V3.9c0-1.4-1.1-2.6-2.6-2.6h-.7S8.8 0 6.2 0zm1.6 5.2h1.6c1 0 1.9.8 1.9 1.9v1.4h.7s.1 0 .3.1c.1.1.2.1.2.5s-.1.4-.2.5c-.1.1-.3.1-.3.1h-.4l-.1.3c-.7 1.7-2.4 3.2-4.1 3.5-1.6-.2-3.3-1.7-4.1-3.5v-.2h-.4s-.1 0-.3-.1c-.2-.1-.3-.2-.3-.6 0-.4.1-.4.2-.5.1-.1.3-.1.3-.1h.7v-2h1.9c1.1 0 2-.5 2.4-1.3z"/></svg>',

	'type-3' => '<svg class="ct-icon" width="15" height="15" viewBox="0 0 15 15"><path d="M14.3 12.8v1.5c0 .4-.3.7-.7.7-.4 0-.7-.3-.7-.7v-1.5c0-1.3-1-2.4-2.4-2.4h-6c-1.3 0-2.4 1-2.4 2.4v1.5c0 .4-.3.7-.7.7s-.7-.3-.7-.7v-1.5c0-2 1.6-3.7 3.7-3.7h6.1c2.1 0 3.8 1.6 3.8 3.7zM3.8 3.7C3.8 1.6 5.5 0 7.5 0s3.7 1.6 3.7 3.7-1.6 3.7-3.7 3.7-3.7-1.6-3.7-3.7zm1.4 0C5.2 5 6.2 6 7.5 6s2.4-1 2.4-2.3-1-2.4-2.4-2.4-2.3 1.1-2.3 2.4z"/></svg>',

	'type-4' => '<svg class="ct-icon" width="15" height="15" viewBox="0 0 15 15"><path d="M7.5 0C3.4 0 0 3.4 0 7.5S3.4 15 7.5 15 15 11.6 15 7.5 11.6 0 7.5 0zm0 2.1c1.4 0 2.5 1.1 2.5 2.4S8.9 7 7.5 7 5 5.9 5 4.5s1.1-2.4 2.5-2.4zm0 11.4c-2.1 0-3.9-1-5-2.6C3.4 9.6 6 9 7.5 9s4.1.6 5 1.9c-1.1 1.6-2.9 2.6-5 2.6z"/></svg>',

	'type-5' => '<svg class="ct-icon" width="15" height="15" viewBox="0 0 15 15"><path d="M7.5 0C3.4 0 0 3.4 0 7.5S3.4 15 7.5 15 15 11.6 15 7.5 11.6 0 7.5 0zm0 1.2c3.5 0 6.3 2.8 6.3 6.3 0 1.6-.6 3.1-1.7 4.3-.4-.8-1.7-1.4-3.1-1.7 0 0-.6-.2-.4-.8.6-.6.8-1.2.8-1.3 0 0 .6-.5.6-1.2.1-.6-.1-.7-.1-.7.2-.8.3-3.6-1.5-3.2-.3-.6-2.2-1-3 .5-.4.8-.6 1.9-.2 2.7 0 0-.1-.1-.2.3 0 .4.2 1 .4 1.2.1.1.2.2.3.2 0 0 .1.7.6 1.3.1.6-.4.9-.4.9-1.4.3-2.7.9-3.1 1.7-1-1.1-1.6-2.6-1.6-4.2C1.2 4 4 1.2 7.5 1.2z"/></svg>',

	'type-6' => '<svg class="ct-icon" width="15" height="15" viewBox="0 0 15 15"><path d="M14.1 4.9L7.9.1c-.2-.1-.6-.1-.8 0L.9 4.9c-.1.1-.2.3-.2.5V13c0 1.1.9 2 2 2h9.6c1.1 0 2-.9 2-2V5.5c0-.2-.1-.4-.2-.6zm-5.2 8.7H6.1V8.2h2.8v5.4zm4.1-.7c0 .4-.3.7-.7.7h-2V7.5c0-.4-.3-.7-.7-.7H5.4c-.4 0-.7.3-.7.7v6.1h-2c-.4 0-.7-.3-.7-.7V5.8l5.6-4.2L13 5.8v7.1z"/></svg>',
]);

$path = 'login';

if (! $current_user_id) {
	$path = 'logout';
}

$attr['class'] = trim('ct-header-account ' . blocksy_visibility_classes(
	blocksy_default_akg(
		'header_account_visibility',
		$atts,
		[
			'tablet' => true,
			'mobile' => true,
		]
	)
));

echo blocksy_render_view(
	dirname(__FILE__) . '/views/' . $path . '.php',
	[
		'atts' => $atts,
		'attr' => $attr,
		'icon' => $icon,
		'device' => $device,
		'current_user_id' => $current_user_id
	]
);


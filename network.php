<?php
variables([
	'link-to-section-home' => true,
	'link-to-site-home' => true,
	'assistantEmail' => 'commonplanet1+assistant@gmail.com',
]);

function setNetworkSocial() {
	$site = variable('safeName');
	$op = [];
	if ($site == 'commonplanet-adelina') {
		$op = [
			[ 'type' => 'fa-brands fa-redhat bg-success', 'url' => pageUrl('whoami'), 'name' => 'Adelina Bajrami' ],
		];
	}

	$op = array_merge($op, [
		'----',
		[ 'type' => 'fa-brands fa-redhat bg-info', 'url' => replaceNetworkUrls('%urlOf-imran%') . 'whoami/', 'name' => 'Imran' ],
		[ 'type' => 'fa-brands fa-redhat bg-primary', 'url' => replaceNetworkUrls('%urlOf-remzi%') . 'whoami/', 'name' => 'Remzi' ],
	]);

	variable('social', $op);
};

function network_before_render() {
	setNetworkSocial();
}
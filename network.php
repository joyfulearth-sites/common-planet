<?php
variables([
	'no-sections-in-footer' => true,
	'link-to-site-home' => true,

	'assistantEmail' => 'commonplanet1+assistant@gmail.com',
	'email' => 'team@common-planet.org',
	'phone' => '+1-503-882-7500',
	'whatsapp' => '919841223313' //'18604880545',
]);

function network_before_file() {
	echo '<div class="m-4"></div>' . NEWLINE; //TODO: not when using a slider...
}

setupSiteVars();

function setupSiteVars() {
	$vars = [];
	$social = [];
	$allLinks = true;
	if (SITENAME == 'adelina') {
		$social = [
			[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/adelina-bajrami-952130347/', 'name' => 'Adelina Bajrami' ],
		];
		variables(['email' => 'adebajrami@common-planet.org']);
	} else if (SITENAME == 'remzi') {
	} else if (SITENAME == 'team') {
		$vars['sections-have-files'] = true;
	}

	variables($vars);
	if ($allLinks) variables([
		'link-to-section-home' => true,
		'link-to-node-home' => true,
		'link-to-sub-node-home' => true,
	]);

	if (count($social)) $social[] = '----';

	variable('social', array_merge($social, [
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/remzib/', 'name' => 'Remzi Bajrami' ],
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/imran-ali-namazi/', 'name' => 'Imran Ali Namazi' ],
		'----',
		[ 'type' => 'fa-brands fa-redhat bg-primary', 'url' => replaceNetworkUrls('%urlOf-remzi%') . 'whoami/', 'name' => 'Remzi' ],
		[ 'type' => 'fa-brands fa-redhat bg-success', 'url' => replaceNetworkUrls('%urlOf-adelina%') . 'whoami/', 'name' => 'Adelina' ],
		/*
		[ 'type' => 'fa-brands fa-redhat bg-warning', 'url' => replaceNetworkUrls('%urlOf-cpimran%') . 'whoami/', 'name' => 'Imran' ],
		*/
	]));
};

<?php
class config{
	// Welcome to the 4get configuration file
	// When updating your instance, please make sure this file isn't missing
	// any parameters.
	
	// 4get version. Please keep this updated
	const VERSION = 8;
	
	// Will be shown pretty much everywhere.
	const SERVER_NAME = __SERVER_NAME__;
	
	// Will be shown in <meta> tag on home page
	const SERVER_SHORT_DESCRIPTION = __SERVER_SHORT_DESCRIPTION__;
	
	// Will be shown in server list ping (null for no description)
	const SERVER_LONG_DESCRIPTION = __SERVER_LONG_DESCRIPTION__;
	
	// Add your own themes in "static/themes". Set to "Dark" for default theme.
	// Eg. To use "static/themes/Cream.css", specify "Cream".
	const DEFAULT_THEME = __DEFAULT_THEME__;
	
	// Enable the API?
	const API_ENABLED = __API_ENABLED__;
	
	//
	// BOT PROTECTION
	//
	
	// 0 = disabled, 1 = ask for image captcha, @TODO: 2 = invite only (users needs a pass)
	// VERY useful against a targetted attack
	const BOT_PROTECTION = 0;
	
	// if BOT_PROTECTION is set to 1, specify the available datasets here
	// images should be named from 1.png to X.png, and be 100x100 in size
	// Eg. data/captcha/birds/1.png up to 2263.png
	const CAPTCHA_DATASET = [
		// example:
		//["birds", 2263],
		//["fumo_plushies", 1006],
		//["minecraft", 848]
	];
	
	// If this regex expression matches on the user agent, it blocks the request
	// Not useful at all against a targetted attack
	const HEADER_REGEX = '/bot|wget|curl|python-requests|scrapy|go-http-client|ruby|yahoo|spider|qwant|meta/i';
	
	// Block clients who present any of the following headers in their request (SPECIFY IN !!lowercase!!)
	// Eg: ["x-forwarded-for", "x-via", "forwarded-for", "via"];
	// Useful for blocking *some* proxies used for botting
	const FILTERED_HEADER_KEYS = [
		//"x-forwarded-for",
		//"x-cluster-client-ip",
		//"x-client-ip",
		//"x-real-ip",
		//"client-ip",
		//"real-ip",
		//"forwarded-for",
		//"forwarded-for-ip",
		//"forwarded",
		//"proxy-connection",
		//"remote-addr",
		//"via"
	];
	
	// Block SSL ciphers used by CLI tools used for botting
	// Basically a primitive version of Cloudflare's browser integrity check
	// ** If curl can still access the site (with spoofed headers), please make sure you use the new apache2 config **
	// https://git.lolcat.ca/lolcat/4get/docs/apache2.md
	const DISALLOWED_SSL = [
		// "TLS_AES_256_GCM_SHA384" // used by WGET and CURL
	];
	
	// Maximal number of searches per captcha key/pass issued. Counter gets
	// reset on every APCU cache clear (should happen once a day).
	// Only useful when BOT_PROTECTION is NOT set to 0
	const MAX_SEARCHES = 100;
	
	// List of domains that point to your servers. Include your tor/i2p
	// addresses here! Must be a valid URL. Won't affect links placed on
	// the homepage.
	const ALT_ADDRESSES = [
		//"https://4get.alt-tld",
		//"http://4getwebfrq5zr4sxugk6htxvawqehxtdgjrbcn2oslllcol2vepa23yd.onion"
	];
	
	// Known 4get instances. MUST use the https protocol if your instance uses
	// it. Is used to generate a distributed list of instances.
	// To appear in the list of an instance, contact the host and if everyone added
	// eachother your serber should appear everywhere.
	const INSTANCES = __INSTANCES__;
	
	// Default user agent to use for scraper requests. Sometimes ignored to get specific webpages
	// Changing this might break things.
	const USER_AGENT = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:145.0) Gecko/20100101 Firefox/145.0";
	
	// Proxy pool assignments for each scraper
	// false = Use server's raw IP
	// string = will load a proxy list from data/proxies
	// Eg. "onion" will load data/proxies/onion.txt
	const PROXY_DDG = __PROXY_DDG__; // duckduckgo;
	const PROXY_YAHOO = __PROXY_YAHOO__;
	const PROXY_YAHOO_JAPAN = __PROXY_YAHOO_JAPAN__;
	const PROXY_BRAVE = __PROXY_BRAVE__;
	const PROXY_FB = __PROXY_FB__; // facebook;
	const PROXY_GOOGLE = __PROXY_GOOGLE__;
	const PROXY_GOOGLE_API = __PROXY_GOOGLE_API__;
	const PROXY_GOOGLE_CSE = __PROXY_GOOGLE_CSE__;
	const PROXY_MULLVAD_GOOGLE = __PROXY_MULLVAD_GOOGLE__;
	const PROXY_MULLVAD_BRAVE = __PROXY_MULLVAD_BRAVE__;
	const PROXY_STARTPAGE = __PROXY_STARTPAGE__;
	const PROXY_QWANT = __PROXY_QWANT__;
	const PROXY_BAIDU = __PROXY_BAIDU__;
	const PROXY_COCCOC = __PROXY_COCCOC__;
	const PROXY_GHOSTERY = __PROXY_GHOSTERY__;
	const PROXY_MARGINALIA = __PROXY_MARGINALIA__;
	const PROXY_MOJEEK = __PROXY_MOJEEK__;
	const PROXY_SC = __PROXY_SC__; // soundcloud;
	const PROXY_SWISSCOWS = __PROXY_SWISSCOWS__;
	const PROXY_SPOTIFY = __PROXY_SPOTIFY__;
	const PROXY_SOLOFIELD = __PROXY_SOLOFIELD__;
	const PROXY_WIBY = __PROXY_WIBY__;
	const PROXY_CURLIE = __PROXY_CURLIE__;
	const PROXY_YT = __PROXY_YT__; // youtube;
	const PROXY_ARCHIVEORG = __PROXY_ARCHIVEORG__;
	const PROXY_SEPIASEARCH = __PROXY_SEPIASEARCH__;
	const PROXY_ODYSEE = __PROXY_ODYSEE__;
	const PROXY_VIMEO = __PROXY_VIMEO__;
	const PROXY_YEP = __PROXY_YEP__;
	const PROXY_PINTEREST = __PROXY_PINTEREST__;
	const PROXY_SANKAKUCOMPLEX = __PROXY_SANKAKUCOMPLEX__;
	const PROXY_FLICKR = __PROXY_FLICKR__;
	const PROXY_FIVEHPX = __PROXY_FIVEHPX__;
	const PROXY_VSCO = __PROXY_VSCO__;
	const PROXY_SEZNAM = __PROXY_SEZNAM__;
	const PROXY_NAVER = __PROXY_NAVER__;
	const PROXY_GREPPR = __PROXY_GREPPR__;
	const PROXY_CROWDVIEW = __PROXY_CROWDVIEW__;
	const PROXY_MWMBL = __PROXY_MWMBL__;
	const PROXY_FTM = __PROXY_FTM__; // findthatmeme;
	const PROXY_IMGUR = __PROXY_IMGUR__;
	const PROXY_CARA = __PROXY_CARA__;
	const PROXY_YANDEX_W = __PROXY_YANDEX_W__; // yandex web;
	const PROXY_YANDEX_I = __PROXY_YANDEX_I__; // yandex images;
	const PROXY_YANDEX_V = __PROXY_YANDEX_V__; // yandex videos;
	
	//
	// Scraper-specific parameters
	//
	
	// GOOGLE CSE & GOOGLE API
	const GOOGLE_CX_ENDPOINT = "d4e68b99b876541f0";
	
	// MARGINALIA
	// Use "null" to default out to HTML scraping OR specify a string to
	// use the API (Eg: "public"). API has less filters.
	const MARGINALIA_API_KEY = __MARGINALIA_API_KEY__;
}

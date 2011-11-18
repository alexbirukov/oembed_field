<?php

	if (!defined('__IN_SYMPHONY__')) die('<h2>Symphony Error</h2><p>You cannot directly access this file</p>');


	class serviceQik extends ServiceDriver {

		public function __construct() {
			parent::__construct('Qik', 'qik.com');
		}

		public function about() {
			return array(
				'name'			=> $this->Name,
				'version'		=> '1.1',
				'release-date'	=> '2011-11-17',
				'author'		=> array(
					'name'			=> 'Andrew Minton',
					'website'		=> 'http://andrewminton.co.uk/',
					'email'			=> 'moonoo dot am (at) gmail.com'
				)
	 		);
		}

		public function getOEmbedXmlApiUrl($params) {
			$url = trim($params['url']);

			return 'http://qik.com/api/oembed.xml?url=' . $url;
		}

		//Qik Service uses "hash" as root node.
		public function getRootTagName() {
			return 'hash';
		}

	}
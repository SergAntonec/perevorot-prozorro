<?php

return [

	[
		'name'=>'Public Bid',
		'slug'=>'pb',
		'href'=>'https://public-bid.com.ua/?TenderID={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'level1'=>true,
		'level2'=>true,
		'level3'=>false,
		'level4'=>false,
	],
	[
		'name'=>'Smart Tender',
		'slug'=>'smart-tender',
		'href'=>'https://smarttender.biz/tenders?mode=gov&TenderID={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],
	[
		'name'=>'Newtend',
		'slug'=>'newtend',
		'href'=>'https://newtend.com/gos-zakupki/?TenderID={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'level1'=>true,
		'level2'=>true,
		'level3'=>false,
		'level4'=>false,		
	],
	[
		'name'=>'E-tender',
		'slug'=>'etender',
		'href'=>'https://bid.e-tender.biz/tender?tenderid={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'level1'=>true,
		'level2'=>true,
		'level3'=>false,
		'level4'=>false,		
	],
	[
		'name'=>'ПриватМаркет<br>(тільки для учасників)',
		'slug'=>'privatmarket',
		'href'=>'https://privatmarket.ua/business/tenders?TenderID={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'level1'=>false,
		'level2'=>true,
		'level3'=>false,
		'level4'=>true,		
	],
	[
		'name'=>'Zakupki.prom.ua',
		'slug'=>'zakupki',
		'href'=>'http://zakupki.prom.ua/dz_redirect?TenderID={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,
	],
	[
		'name'=>'Держзакупівлі онлайн',
		'slug'=>'netcast',
		'href'=>'http://www.dzo.com.ua/tenders/TenderID?TenderID={tenderID}',
		'public'=>'http://www.dzo.com.ua/',
		'contractor'=>true,
		'tender'=>true,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],
	[
		'name'=>'zakupki.com.ua<br>(тільки для замовників)',
		'slug'=>'lpzakupki',
		'href'=>'http://lp.zakupki.com.ua/?TenderID={tenderID}',
		'contractor'=>true,
		'tender'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>false,
		'level4'=>false,		
	]

];
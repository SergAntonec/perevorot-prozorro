<?php

return [

	[
		'name'=>'Public Bid',
		'slug'=>'pb',
		'href'=>'https://public-bid.com.ua/?TenderID={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,
	],
	[
		'name'=>'Smart Tender',
		'slug'=>'smart-tender',
		'href'=>'https://smarttender.biz/government/details/{tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
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
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],
	[
		'name'=>'E-tender',
		'slug'=>'etender',
		'href'=>'https://bid.e-tender.biz/tender?tenderid={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],
	[
		'name'=>'ПриватМаркет',
		'slug'=>'privatmarket',
		'href'=>'https://privatmarket.ua/business/tenders?TenderID={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
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
		'type1'=>false,
		'type2'=>false,
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
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],
	[
		'name'=>'zakupki.com.ua',
		'slug'=>'lpzakupki',
		'href'=>'http://lp.zakupki.com.ua/?TenderID={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],
    [
		'name'=>'Brizol.net',
		'slug'=>'brizol',
		'href'=>'https://www.brizol.net/tender/view/{tenderID}',
		'public'=>'https://www.brizol.net/register',
		'disabled'=>false,
		'contractor'=>true,
		'tender'=>false,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],
	[
		'name'=>'APS Market',
		'slug'=>'aps',
		'href'=>'https://aps-market.com/?TenderID={tenderID}',
		'public'=>'https://aps-market.com/',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>false,
		'level4'=>false,		
	],
	[
		'name'=>'Українська універсальна біржа',
		'slug'=>'uub',
		'href'=>'https://tender.uub.com.ua/tender/{tenderID}',
		'public'=>'https://tender.uub.com.ua/',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],
	[
		'name'=>'Про Закупівлі',
		'slug'=>'prozakupivli',
		'href'=>'http://platform.zakupkipro.com/tender/{tenderID}',
		'public'=>'http://platform.zakupkipro.com/',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],
	[
		'name'=>'Open Tender закупівлі',
		'slug'=>'opentender',
		'href'=>'http://open-tender.com.ua/tender/view/{tenderID}',
		'public'=>'https://open-tender.com.ua/',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],
    [
		'name'=>'TENDERMASTER',
		'slug'=>'tendermaster',
		'href'=>'https://tendermaster.com.ua/tender/{id}',
		'public'=>'https://tendermaster.com.ua/',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>true,
		'level4'=>true,		
	],	
    [
		'name'=>'UPETEM',
		'slug'=>'uptem',
		'href'=>'https://dz.upetem.com.ua/',
		'public'=>'https://dz.upetem.com.ua/',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>false,
		'level4'=>false,
	],	
    [
		'name'=>'EPU',
		'slug'=>'epu',
		'href'=>'https://epu.com.ua/',
		'public'=>'https://epu.com.ua/?TendersSearch[tender_cbd_id]={tenderID}',
		'contractor'=>true,
		'tender'=>true,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>false,
		'level4'=>false,
	],	
    /*
	[
		'name'=>'Прозора Торгівля',
		'slug'=>'proztorg',
		'href'=>'http://proztorg.com.ua/tender/{tenderID}',
		'contractor'=>true,
		'tender'=>false,
		'type1'=>false,
		'type2'=>false,
		'level1'=>true,
		'level2'=>true,
		'level3'=>false,
		'level4'=>false,		
	]
    */

];
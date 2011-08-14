var absaraThin = {
		src: '/sites/default/themes/voices/flash/absaraThin.swf'
	  };
var absaraRegular = {
		src: '/sites/default/themes/voices/flash/absaraRegular.swf'
	  };
var absaraMedium = {
		src: '/sites/default/themes/voices/flash/absaraMedium.swf'
	  };
var helvetica45Light = {
		src: '/sites/default/themes/voices/flash/helvetica-45light.swf'
	  };


	
	  sIFR.debugMode = false;
	  sIFR.prefetch(absaraThin, absaraRegular, absaraMedium);
	  sIFR.activate(absaraThin, absaraRegular, absaraMedium);
		//
sIFR.replace(absaraThin, {
		selector: '.page.store #main h1.title'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #e9c91a; }'
		]
	  });

sIFR.replace(absaraThin, {
		selector: '.page.teachers #main h1.title'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #db8945; }'
		]
	  });

sIFR.replace(absaraThin, {
		selector: '.page.news #main h1.title'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #851ea3; }'
		]
	  });

sIFR.replace(absaraThin, {
		selector: '.page.events #main h1.title'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #6f4bb2; }'
		]
	  });

sIFR.replace(absaraThin, {
		selector: '.page.organize #main h1.title'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #356cd2; }'
		]
	  });

sIFR.replace(absaraThin, {
		selector: '.page.watch #main h1.title, .page.watch-theme #main h1.title'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #19b0cb; }'
		]
	  });

sIFR.replace(absaraThin, {
		selector: '.page.about #main h1.title'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #58ab4f; }'
		]
	  });

sIFR.replace(absaraThin, {
		selector: '.page .ntype-performance .field-field-subhead'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #666; }'
		]
	  });
sIFR.replace(absaraThin, {
		selector: '.page .ntype-news-story .field-field-subhead, .page .ntype-press-release .field-field-subhead'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #851EA3; }'
		]
	  });


sIFR.replace(absaraThin, {
		selector: '#main h1.title'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #666666; }'
		]
	  });

sIFR.replace(absaraRegular, {
		selector: '#main .view-video-list h3.title'
		,wmode: 'transparent'
		,css: [
//		  '.sIFR-root { color: #19b0cb; text-transform: uppercase }'
		  '.sIFR-root { color: #19b0cb; font-size: 16px;}'
       ,'a { text-decoration: none; color: #19b0cb; }'
       ,'a:hover { text-decoration: underline; color: #cb1900; }'
		]
	  });

sIFR.replace(absaraRegular, {
		selector: '.view-upcoming-events-all .itemline .location-date h3.item-date'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #1974CB; font-size: 16px;}'
       ,'a { text-decoration: none; color: #1974CB; }'
       ,'a:hover { text-decoration: underline; color: #cb1900; }'
		]
	  });


sIFR.replace(absaraRegular, {
		selector: '.watch-videos-first h3'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #1598b0; font-size: 16px;}'
       ,'a { text-decoration: none; color: #1598b0; }'
       ,'a:hover { text-decoration: underline; color: #cb1900; }'
		]
	  });
sIFR.replace(absaraRegular, {
		selector: '#block-block-10 h3'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #ffffff; font-size: 16px;}'
       ,'a { text-decoration: none; color: #ffffff; }'
       ,'a:hover { text-decoration: underline; color: #ffffff; }'
		]
	  });
sIFR.replace(absaraRegular, {
		selector: '.block h3, .block h3 a, .page .block h3, .page .block h3 a'
		,wmode: 'transparent'
		,css: [
//		  '.sIFR-root { color: #19b0cb; text-transform: uppercase }'
		  '.sIFR-root { color: #C37738; font-size: 16px;}'
       ,'a { text-decoration: none; color: #f08313; }'
       ,'a:hover { text-decoration: underline; color: #cb1900; }'
		]
	  });


// ------------------------------------------------------------------------------

sIFR.replace(helvetica45Light, {
		selector: '#homepage.page .testimonial-block .testimonial p'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #0f4d99;font-size:24px;  leading: 1}'
		]
	  });
sIFR.replace(helvetica45Light, {
		selector: '#homepage.page .testimonial-block .testimonial .hang-quote'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #0f4d99; font-size:24px;}'
		]
	  });





sIFR.replace(helvetica45Light, {
		selector: '.page .testimonial-block .testimonial p'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #3380FF;font-size:24px; }'
		]
	  });

sIFR.replace(helvetica45Light, {
		selector: '.page .testimonial-block .testimonial .hang-quote'
		,wmode: 'transparent'
		,css: [
		  '.sIFR-root { color: #3380FF; font-size:24px;}'
		]
	  });


//0f4d99
//3380FF
/* 
//SIFRed anchors will not work on IE
sIFR.replace(absaraThin, {
		selector: '#header .block-menu li.menu-81>a'
		,wmode: 'transparent'
		,css: [
		'.sIFR-root { color: #ffffff; }'
        ,'a { text-decoration: none; }'
		,'a:link { color: #ffffff; }'
		,'a:hover { color: #ffffff; }'

		]
	  });

*/
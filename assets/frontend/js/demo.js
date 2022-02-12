
/*global SyntaxHighlighter*/
SyntaxHighlighter.config.tagName = 'code';

if ( window.$ ) {
	$(document).ready( function () {
		if ( ! $.fn.dataTable ) {
			return;
		}
		var dt110 = $.fn.dataTable.Api ? true : false;

		// Work around for WebKit bug 55740
		var info = $('div.info');

		if ( info.height() < 115 ) {
			info.css( 'min-height', '8em' );
		}

		var escapeHtml = function ( str ) {
			return str.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
		};

		// css
		var cssContainer = $('div.tabs div.css');
		if ( $.trim( cssContainer.find('code').text() ) === '' ) {
			cssContainer.find('code, p:eq(0), div').css('display', 'none');
		}

		// init html
		var table = $('<p/>').append( $('table').clone() ).html();
		var demoHtml = $.trim( $('div.demo-html').html() );

		if ( demoHtml ) {
			demoHtml = demoHtml+'\n\n';
		}

		$('div.tabs div.table').append(
			'<code class="multiline language-html">\t\t\t'+
				escapeHtml( demoHtml + table )+
			'</code>'
		);
		//SyntaxHighlighter.highlight({}, $('#display-init-html')[0]);

		// Tabs
		$('ul.tabs').on( 'click', 'li', function () {
			$('ul.tabs li.active').removeClass('active');
			$(this).addClass('active');

			$('div.tabs>div')
				.css('display', 'none')
				.eq( $(this).index() ).css('display', 'block');
		} );
		$('ul.tabs li.active').click();
	} );
}



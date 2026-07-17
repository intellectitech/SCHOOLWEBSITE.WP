( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {
		var navLinks = document.querySelectorAll(
			'.wp-block-navigation-item .wp-block-navigation-item__content'
		);

		var primaryColor = 'var(--wp--preset--color--primary)';

		function applyActiveColor( el ) {
			el.style.setProperty( 'color', primaryColor, 'important' );
		}

		function clearActiveColor( el ) {
			el.style.removeProperty( 'color' );
			el.style.removeProperty( 'font-weight' );
		}

		function clearActive() {
			navLinks.forEach( function ( link ) {
				link.closest( '.wp-block-navigation-item' ).classList.remove( 'is-active' );
				clearActiveColor( link );
				link.querySelectorAll( '*' ).forEach( clearActiveColor );
			} );
		}

		function setActive( link ) {
			clearActive();
			link.closest( '.wp-block-navigation-item' ).classList.add( 'is-active' );
			link.style.setProperty( 'font-weight', '600', 'important' );
			applyActiveColor( link );
			link.querySelectorAll( '*' ).forEach( applyActiveColor );
		}

		// Set active on click
		navLinks.forEach( function ( link ) {
			link.addEventListener( 'click', function () {
				setActive( link );
			} );
		} );

		// Set active on page load by matching current URL / hash against nav link href attributes
		var currentHash = window.location.hash;

		function normalizeUrl( url ) {
			url = url.split( '?' )[ 0 ].split( '#' )[ 0 ];
			return url === '/' ? '/' : url.replace( /\/$/, '' );
		}

		var currentUrl  = normalizeUrl( window.location.href );
		var currentPath = normalizeUrl( window.location.pathname );

		navLinks.forEach( function ( link ) {
			var href = link.getAttribute( 'href' );
			if ( ! href ) {
				return;
			}

			var normalized = normalizeUrl( href );

			if ( currentHash && normalized === currentHash ) {
				setActive( link );
				return;
			}

			if ( normalized === currentUrl ) {
				setActive( link );
				return;
			}

			if ( normalized === currentPath ) {
				setActive( link );
			}
		} );
	} );
} )();

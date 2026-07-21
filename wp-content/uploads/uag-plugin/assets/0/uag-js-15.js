document.addEventListener("DOMContentLoaded", function(){ window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-5b40ff1c', {"layout":"number","heading":"Happy leaners","numberPrefix":"","numberSuffix":" +","startNumber":0,"endNumber":5000,"totalNumber":5000,"decimalPlaces":0,"animationDuration":1901,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-ea6765f0', {"layout":"number","heading":"Qualified teachers ","numberPrefix":"","numberSuffix":" +","startNumber":0,"endNumber":80,"totalNumber":100,"decimalPlaces":0,"animationDuration":1201,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-2afd2b53', {"layout":"number","heading":"Years of excellence","numberPrefix":"","numberSuffix":"+","startNumber":0,"endNumber":20,"totalNumber":100,"decimalPlaces":0,"animationDuration":1401,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-116a8b3d', {"layout":"number","heading":"PLE RESULTS  ","numberPrefix":"","numberSuffix":"% DIV 1","startNumber":0,"endNumber":30,"totalNumber":100,"decimalPlaces":0,"animationDuration":1701,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
				window.addEventListener( 'DOMContentLoaded', function() {
					const scope = document.querySelector( '.uagb-block-158ff8dc' );
					if ( scope ){
						if ( scope.children[0].classList.contains( 'spectra-image-gallery__layout--tiled' ) ) {
							const element = scope.querySelector( '.spectra-image-gallery__layout--tiled' );
							const tileSizer = scope.querySelector( '.spectra-image-gallery__media-sizer' );
							element.style.gridAutoRows = `${ tileSizer.getBoundingClientRect().width }px`;

							imagesLoaded( element ).on( 'progress', ( theInstance, theImage ) => {
								if ( theImage.isLoaded ){
									const imageElement = theImage.img;
									const imageWrapper = imageElement.parentElement.parentElement;
									const mediaWrapper = imageWrapper.parentElement;
									if( ! mediaWrapper.classList.contains( 'spectra-image-gallery__media-wrapper--focus' ) ){
										if ( imageElement.naturalWidth >= ( imageElement.naturalHeight * 2 ) - ( imageElement.naturalHeight / 2 ) ){
											mediaWrapper.classList.add( 'spectra-image-gallery__media-wrapper--wide');
											imageWrapper.classList.add( 'spectra-image-gallery__media--tiled-wide');
										}
										else if ( imageElement.naturalHeight >= ( imageElement.naturalWidth * 2 ) - ( imageElement.naturalWidth / 2 ) ){
											mediaWrapper.classList.add( 'spectra-image-gallery__media-wrapper--tall');
											imageWrapper.classList.add( 'spectra-image-gallery__media--tiled-tall');
										}
									}
								}
							} );
							tileSizer.style.display = 'none';
						}
					}
				} );
			jQuery( document ).ready( function() {
	if( jQuery( '.uagb-block-51a47773' ).length > 0 ){
	jQuery( '.uagb-block-51a47773' ).find( ".is-carousel" ).slick( {"slidesToShow":1,"slidesToScroll":1,"autoplaySpeed":"2000","autoplay":true,"infinite":true,"pauseOnHover":true,"speed":"598","arrows":true,"dots":true,"rtl":false,"prevArrow":"<button type='button' data-role='none' class='slick-prev' aria-label='Previous' tabindex='0' role='button' style='border-color: #333;border-radius:0px;border-width:0px'><svg xmlns='https:\/\/www.w3.org\/2000\/svg' viewBox='0 0 256 512' height ='20' width = '20' fill ='#333'  ><path d='M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z'><\/path><\/svg><\/button>","nextArrow":"<button type='button' data-role='none' class='slick-next' aria-label='Next' tabindex='0' role='button' style='border-color: #333;border-radius:0px;border-width:0px'><svg xmlns='https:\/\/www.w3.org\/2000\/svg' viewBox='0 0 256 512' height ='20' width = '20' fill ='#333' ><path d='M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z'><\/path><\/svg><\/button>","responsive":[{"breakpoint":1024,"settings":{"slidesToShow":1,"slidesToScroll":1}},{"breakpoint":767,"settings":{"slidesToShow":1,"slidesToScroll":1}}]} );
	}
	var $scope = jQuery('.uagb-block-51a47773');
	var enableEqualHeight = ( '' );
			if( enableEqualHeight ){
				$scope.imagesLoaded( function() {
					UAGBTestimonialCarousel._setHeight( $scope );
				});

				$scope.on( "afterChange", function() {
					UAGBTestimonialCarousel._setHeight( $scope );
				} );
			}
} );
 });
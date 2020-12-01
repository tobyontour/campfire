/**
 * File utils.js.
 */
( function() {
	window.onscroll = function() {
		scrollMenu();
	};

	function scrollMenu() {
		if ( document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 ) {
			document.getElementById( 'site-navigation' ).className = 'main-navigation scrolled';
		} else {
			document.getElementById( 'site-navigation' ).className = 'main-navigation';
		}
	}

	const acc = document.getElementsByClassName( 'accordion' );
	let i;

	for ( i = 0; i < acc.length; i++ ) {
		acc[ i ].addEventListener( 'click', function() {
			/* Toggle between adding and removing the 'active' class,
			to highlight the button that controls the panel */
			this.classList.toggle( 'active' );

			/* Toggle between hiding and showing the active panel */
			const panel = this.nextElementSibling;
			if ( panel.style.display === 'block' ) {
				panel.style.display = 'none';
			} else {
				panel.style.display = 'block';
			}
		} );
	}
}() );

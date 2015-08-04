/**
 * User: clint
 * Date: 04/08/15
 * Time: 11:45
 *
 * Learning is a Sisyphean Exercise - Me.
 */


$(function() {
   var $window = $( window );

    $( 'section[data-type=background]' ).each( function(){
       var $this = $(this);
        $window.scroll( function(){
            var yPos = -( $window.scrollTop() / $this.data( 'speed' ) );
            var coords = '50% ' + yPos + 'px';

            $this.css( { backgroundPosition: coords } );
        });
    });
});
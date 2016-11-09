
(function() {
	//**************      menu mobile    **************

    if( $('#quetzalgallery').length ){
        console.log("quetzal");
      /*
      $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true
      });
             $('.grid').packery({
        itemSelector: '.grid-item',
        percentPosition: true,
       
      });
 */


      var $grid = $('.grid').imagesLoaded( function() {
        // init Packery after all images have loaded
        $grid.packery({
          itemSelector: '.grid-item',
          percentPosition: true,
          gutter: 0
        });
      });  


    }

    if( $('#main').length ){
     Grid.init();
    }

    if ($('#map').length) {

    };

})();





(function() {

	console.log("script app 2");

})();

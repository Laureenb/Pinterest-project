// Javascript
var container = document.querySelector('#masonry-grid');
var msnry = new Masonry( container, {
  // options
  columnWidth: 200,
  itemSelector: '.grid-item'
});

// external js: masonry.pkgd.js

var grid = document.querySelector('.grid');
var msnry = new Masonry( grid, {
  columnWidth: 160,
  itemSelector: '.grid-item'
});

grid.addEventListener( 'click', function( event ) {
  // only click on grid-items
  if ( !matchesSelector( event.target, '.grid-item' ) ) {
    return;
  }
  // remove clicked element
  msnry.remove( event.target );
  // layout remaining item elements
  msnry.layout();
});
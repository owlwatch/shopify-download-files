// Go to Settings > Files and run this on every pages
var files = files || [];
jQuery('input[value*="cdn.shopify"]').each(
function(){ var v = this.value; if( files.indexOf(v) === -1 ) files.push( v );
});

// on the last page, run
JSON.stringify(files);

// chrome should have a button to "Copy" that output.
// paste it in a "files.json" in this directory

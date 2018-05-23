<?php
/**
 * From the javascript console, run this on each page of
 * Settings > Files.
 *
 */
$files = json_decode( file_get_contents( __DIR__ . '/files.json' ) );
@mkdir( __DIR__.'/files' );

foreach( $files as $file ){
    $filename = explode('?',basename( $file ))[0];
    $save = __DIR__."/files/{$filename}";

    if( file_exists( $save ) ){
        echo "Skipping {$filename}\n";
        continue;
    }
    echo "Downloading {$filename}\n";

    file_put_contents( $save, fopen($file, 'r'));
}

echo "\n\nAll done.\n\nCreate an archive of the `files` directory and share with whomever needs it.\n\n";

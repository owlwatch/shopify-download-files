# Shopify: Download Settings > Files 
AFAIK, There is no easy way to access the "Files" from the Settings of a Shopify site. When copying a theme from one shop to another, sometimes your theme depends on those files and you end up with a bunch of broken images, which isn't great.

To get those dang files over to the new site, you will want to:

1. Login to the site that has the images (in Chrome).
2. Go to Settings > Files.
3. Check out console.js for javascript to use in the console (there are more directions there.)
4. Copy the resulting json into a "files.json" file.
5. Run `php ./download-files.php` from within this directory.
6. Wait for a bit - you should see some output while the files are downloading.
7. Create an archive of the resulting `files` directory.
8. Share that file.

To import on the new site, you will want to:

1. Extract that archive.
2. Go to Settings > Files and click Upload
3. Select all the files in the directory created from the archive.
4. More waiting. 

If anyone knows of a better way to do this, please let me know since this seems a little ridiculous.

# Redirect Unattached Images #

Redirect WordPress attachment pages for all unattached images to the current site's home page.

__Contributors:__ [Robert Neu](https://github.com/robneu)  
__Requires:__ 4.1.2  
__Tested up to:__ 4.1.2  
__License:__ [GPL-2.0+](http://www.gnu.org/licenses/gpl-2.0.html)

## Description ##

The default behavior in WordPress is to generate attachment pages for all of the images in your media library. While this can sometimes be useful, it can also cause problems.

When you upload an image to your media gallery without inserting it into a post or page, it becomes an unattached image. By default, these images generate attachment pages with no pretty permalink structure. This isn't very useful for anyone, including search engines.

This plugin takes all of these unattached images and safely redirects them using a 301 redirect to your site's home page. If you're using WordPress multisite, it redirects to the current site's home page. There are no options or settings, just install, activate, and enjoy better SEO and fewer useless pages on your website!

## Installation ##

### Upload ###

1. Download the [latest release](https://github.com/wpsitecare/redirect-unattached-images/archive/master.zip) from GitHub.
2. Go to the __Plugins &rarr; Add New__ screen in your WordPress admin panel and click the __Upload__ tab at the top.
3. Upload the zipped archive.
4. Click the __Activate Plugin__ link after installation completes.

### Manual ###

1. Download the [latest release](https://github.com/wpsitecare/redirect-unattached-images/archive/master.zip) from GitHub.
2. Unzip the archive.
3. Copy the folder to `/wp-content/plugins/`.
4. Go to the __Plugins__ screen in your WordPress admin panel and click the __Activate__ link under Redirect Unattached Images.

Read the Codex for more information about [installing plugins manually](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

### Git ###

Clone this repository in `/wp-content/plugins/`:

`git clone https://github.com/wpsitecare/redirect-unattached-images.git`

Then go to the __Plugins__ screen in your WordPress admin panel and click the __Activate__ link under Redirect Unattached Images.

## Updating ##

Although it's not likely that this plugin will need updated, there is always the possibility that a change will be required. Fortunately, there are a couple of options you can install to manage updates from GitHub-hosted plugins:

* [Git Plugin Updates](https://github.com/brainstormmedia/git-plugin-updates)
* [GitHub Updater](https://github.com/afragen/github-updater)

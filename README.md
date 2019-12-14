# Wordpress theme for thingsandcode.com based on Less Reloaded

Customizations:
- **Photo from static URL instead of Gravatar**.
- **The link bar has been replaced by my name and my LinkedIn profile.**.
- **I put the license of the contents in the footer**
- **Improved readability**: I changed the color of the content to increase contrast.
- **I replaced the comments counter by the date of the post** and put it over the title of the posts.
- **SEO**:
    - **Robots: noimageindex**: Because images are not the relevant thing of this blog.
    - **Robots: noindex**: Disable indexing for 404, pages, categories, tags, and archive. Only homepage and posts are indexed on search engines.
    - **Add Google Analytics**: To understand how people interact with the blog.
    - **Disable emojis**: For faster page load times. Also I don't use emojis.
- **Bugs solved**:
    - **Remove `<h1 />` from `<header />`**: Because an html page should have only one title.
    - **Remove `role` attribute**: Removed form Header, Navigation bar, and Footer because are not necesary when using the html tags `<header />`, `<nav />`, and `<footer />`.
    - **Move the comments form outside `<ol />`** to pass w3 html validator.
- **Added GDPR notice**

Feel free to download and use this theme in your page.
**IMPORTANT: CHANGE THESE THINGS BEFORE USING THIS THEME IN YOUR WEBSITE!**
- **Change the URL of the avatar and put a photo of yours**
- **Change my name and LinkedIn link for yours**
- **Delete Google Analytics tracking code at `<footer />`**

# Details about Less Reloaded

A simple minimal WordPress theme built with only what is needed to survive

Less is a super minimal theme, both front end and back end. adding no bloat whatesover. It only uses the minimum requirements that WordPress has, a stylesheet, screenshot and the index page.
Less Reloaded is modefied version that works with WordPress 5 and it's translation ready and it support rtl.


== Copyright ==

Less Reloaded Theme is based on Less Theme © Jared Erickson, GPL License - https://github.com/alliswell/Less
Less Reloaded Theme is distributed under the terms of the GNU GPL

== Changelog ==

= 1.0.3 =
* Fix 404 error
* Update screenshot
* Update readme.txt

= 1.0.2 =
* Update screenshot
* Remove fitvids.js due to WordPress new embeds
* Move pingback_url to function.php and add a conditional for it
* Remove break_credits action in footer
* Add Google font with wp_enqueue_style

= 1.0.1 =
* Update readme.txt
* Update Copyright
* Update screenshot
* Some fixes

= 1.0 =
* Initial release

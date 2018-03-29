# Todo

* Vilka epostadresser ska användas?

## Nästa version

* Döpa veckodagar på menyn, t.ex. påskafton m.m. Behövs det?
* Lägga in bokningar av lokal.
* Rebuild CSS with Gulp.

## Info

* Starter theme [Understrap](https://understrap.com/), [Underscore](http://underscores.me/), [Underscor-me](http://components.underscores.me/wp/)
* [Shortcodes](https://github.com/billerickson/display-posts-shortcode/blob/master/README.md#parameters)
  [display-posts include_title="false" posts_per_page="20" include_content="true" wrapper="div" include_date="true" date_format="l \\d\\e\\n d F"]
* [Wordpress conditional tags](https://codex.wordpress.org/Conditional_Tags)
* [Jetpack Email](https://jetpack.com/support/contact-form/)

## Commands

```bash
bash ssh.sh # Connect with SSH
bash push.sh # Copy files from local to remote
bash build.sh # Generera temafiler

# Make them writable
cd /opt/bitnami/apps/wordpress/htdocs/wp-content/themes
sudo chown -R daemon:ropaolle rosengarden
sudo chmod 775 rosengarden
sudo chmod 664 rosengarden/*

# Certs
sudo /opt/bitnami/ctlscript.sh stop
cd /opt/bitnami/letsencrypt
# Restricted to 5 times per week
sudo ./certbot-auto certonly --standalone -d ropaolle.se -d www.ropaolle.se -d wp.ropaolle.se -d rosengardenmat.se
```

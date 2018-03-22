# Todo

* [ ] ?

Hur många rätter
Återkommer rätterna
Ska vi spara menyerna
Vad ska visa
Priser




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
```

## Posts
https://github.com/billerickson/display-posts-shortcode/blob/master/README.md#parameters


## Shortcodes
[display-posts include_title="false" posts_per_page="20" include_content="true" wrapper="div" include_date="true" date_format="l \\d\\e\\n d F"]
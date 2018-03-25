# Todo

* [ ] ?

Hur många rätter
Återkommer rätterna
Ska vi spara menyerna
Vad ska visa
Priser

## Info

http://components.underscores.me/wp/
http://underscores.me/

## Certs

# Stop server

sudo /opt/bitnami/ctlscript.sh stop

# Generate certs

cd /opt/bitnami/letsencrypt
sudo ./certbot-auto certonly --standalone -d ropaolle.se -d www.ropaolle.se -d wp.ropaolle.se -d rosengardenmat.se

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

Rosengårdens Restaurang

Vallentuna Mat & Catering
Rosengårdsvägen XX
XXX XX VALLENTUNA

Tel: 08-6667788
Epost: kontakt@vallentuna.se

</p>

<p>Köksmästare: Andreas Rosén</p>

<h2 class="widget-title">Öppettider</h2>
Lunch: Mån–Fre: 10:00 – 14:00

ropaolle@wordpress-multisite-production-vm:/opt/bitnami/letsencrypt$ sudo ls -l /etc/letsencrypt/live/ropaolle.se
total 4
lrwxrwxrwx 1 root root 35 Mar 22 11:20 cert.pem -> ../../archive/ropaolle.se/cert3.pem
lrwxrwxrwx 1 root root 36 Mar 22 11:20 chain.pem -> ../../archive/ropaolle.se/chain3.pem
lrwxrwxrwx 1 root root 40 Mar 22 11:20 fullchain.pem -> ../../archive/ropaolle.se/fullchain3.pem
lrwxrwxrwx 1 root root 38 Mar 22 11:20 privkey.pem -> ../../archive/ropaolle.se/privkey3.pem
-rw-r--r-- 1 root root 543 Feb 9 14:32 README

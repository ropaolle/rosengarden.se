gcloud compute scp ~/Projects/rosengarden.se/themes/rosengarden/* \
    wordpress-multisite-production-vm:/opt/bitnami/apps/wordpress/htdocs/wp-content/themes/rosengarden \
    # --recurse
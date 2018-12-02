
### START INITIALIZING THE EXTERNAL NETWORK
```bash
docker network create nginx-proxy
```

### ADD LOOPBACK TO NAMESERVERS
```bash
echo "nameserver 127.0.0.1" | sudo tee -a /etc/resolv.conf
```


### AFTER START THE CONTAINER RUN THIS CODES TO UPDATE THE NEXTCLOUD CONFIG FILE:

```bash
docker cp ./nextcloud/config.php nextcloud-app:/var/www/html/config/config.php
docker exec nextcloud-app chmod 777 /var/www/html/config/config.php
```
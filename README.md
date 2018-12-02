# DOCKER LOCAL SERVER

## HOW TO RUN

### SETUP THE EXTERNAL NETWORK

```bash
docker network create nginx-proxy
```

### ADD LOOPBACK TO NAMESERVERS

```bash
sudo sed -i "1i nameserver 127.0.0.1" /etc/resolv.conf
```

### START THE DOCKER COMPOSE

```bash
docker-compose up
```

### AFTER START THE DOCKER COMPOSE RUN THIS CODES TO UPDATE THE NEXTCLOUD CONFIG FILE

```bash
docker cp ./nextcloud/config.php nextcloud-app:/var/www/html/config/config.php
docker exec nextcloud-app chmod 777 /var/www/html/config/config.php
```

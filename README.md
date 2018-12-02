# DOCKER LOCAL SERVER

## HOW TO RUN

### SETUP THE EXTERNAL NETWORK IF NOT EXISTS ALREADY

```bash
docker network create nginx-proxy
```

### ADD LOOPBACK TO NAMESERVERS

```bash
sudo sed -i "1i nameserver 127.0.0.1" /etc/resolv.conf
```

### START THE DOCKER COMPOSE

```bash
docker-compose up --build
```

#!/bin/bash

# Create The docker external network
if ! docker network ls | grep nginx-proxy > /dev/null; then
    echo "Created the external docker network 'nginx-proxy'"
    docker network create nginx-proxy
    echo ''
fi

# Add the loopback as primary nameserver if not exixts
if ! more /etc/resolv.conf | grep 127.0.0.1 > /dev/null; then
    echo "Set the loopback as primary nameserver at resolv.conf"
    sudo sed -i "1i nameserver 127.0.0.1" /etc/resolv.conf
    echo ''
fi

echo "Start the docker compose"
docker-compose up -d --build > /dev/null
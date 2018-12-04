# DOCKER LOCAL SERVER

## DESCRIPTION

This project aims to create a local server to help on the development and/or production of small projects, that modifies little or none of the host OS files

## BASE PROJECTS

- [perrout/docker-proxy](https://github.com/perrout/docker-proxy)
- [jpillora/docker-dnsmasq](https://github.com/jpillora/docker-dnsmasq)

## HOW TO RUN

```bash
sh ./start.sh
```

## HOW CHANGE THE DOMAIN

To change the domain, you need to change all 'localhost.net' from the files /dns/dnsmasq.conf and inside the docker-compose.yml

## HOW ADD OTHER DOCKER APPLICATIONS TO THE ENVIRONMENT

Add the environment variable 'VIRTUAL_HOST' with the desired url to the dockerfile/docker-compose for the nginx-proxy make the redirect.

> If the url is a subdomain of the one that's already defined to the dnsmasq, you just need start the container.
Else you need to add the new domain inside the dnsmasq service that is in the localhost:5380 by default.
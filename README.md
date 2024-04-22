# Apache/PHP/SSL

optional paths to override (bind):
 - /app - application files (private)
 - /app/public - Apache document root (both http and https)
 - /certs:
   - server.pem
   - server.key
   - ca-bundle.crt - for client auth cert


default certs are for `localhost`
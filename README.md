# official-site-WP
WordPress Official Site

## Deploy Docker Develop Environment
### Startup Preparation
```
git clone https://github.com/0verseas/traefik.git
```
#### *if domain SSL is not Cloudflare handle*
```
cd ./traefik/traefikHTTP/
cp ./.env.example ./.env
```
#### *if domain SSL is Cloudflare handle*
```
cd ./traefik/traefikDNS/
cp ./.env.example ./.env
```
### Edit Config File
#### *if domain SSL is not Cloudflare handle*
modify DOMAIN_NAME, ENTRYPOINTS, NETWORKS
```
vim ./.env
```
#### *if domain SSL is Cloudflare handle*
modify DOMAIN_NAME, ENTRYPOINTS, NETWORKS, CF_API_EMAIL, CF_API_KEY
```
vim ./.env
```
### StartUp
✨Notify: if local environment nginx is running then will not up successful, please stop local environment nginx service first✨
*at ./docker/ path*
```
sudo docker-compose up -d
```
### Stop
*at ./docker/ path*
```
sudo docker-compose down
```
### ✨Nonstop Container and Apply New Edit Docker-Compose Setting (Use Only Container is running)✨
The command will not effect on the running container if you have not edited any of the settings on docker-compose.yaml
*at ./docker/ path*
```
sudo docker-compose up --detach
```
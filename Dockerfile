FROM nginx:stable-alpine

LABEL maintener="Samuel John <docker-maint@nginx.com>"

WORKDIR /usr/share/nginx/html

COPY . .
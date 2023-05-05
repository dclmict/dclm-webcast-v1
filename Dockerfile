FROM nginx:stable-alpine

LABEL maintener="Samuel John <sam4real02@gmail.com>"

WORKDIR /usr/share/nginx/html

COPY . .
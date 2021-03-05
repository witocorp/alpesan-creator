#!/bin/bash
# VARIABLES
#
# $usr          - usuari
# $dir          - directori fitxers web
# $domini       - domini a crear

#Agafem els parametres
domini=$1
email=$email

#Activar ssl
sudo certbot --non-interactive --agree-tos --redirect --no-eff-email --cert-name $domini --apache -d $domini -m $email

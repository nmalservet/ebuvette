#!/bin/bash
MUSER="nicolas"
MURL="192.168.1.xx"
MPATH="/var/www/ebuvette"

echo "supppression des fichiers en cache local/pas de besoin de synchro"
rm -Rf ./ebuvette/assets/*
rm -Rf ./ebuvette/runtime/*
echo "syncro des sources"
rsync -avz -e 'ssh'  --exclude '.svn' ./ebuvette/ $MUSER@$MURL:$MPATH

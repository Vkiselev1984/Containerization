#!/bin/bash

docker cp ./backup.sh webproject-db-1:/backup.sh
docker exec -t webproject-db-1 pg_dump -U user -d my_database > /backup/$(date +%Y%m%d%H%M%S).sql


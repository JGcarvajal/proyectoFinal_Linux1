#!/bin/bash
#los parametros de entrada son: usuario,  nombre, interprete,grupo, clave

echo "sudo /usr/sbin/useradd -c $2 -s /bin/$3 -g $4 $1"

sudo /usr/sbin/useradd -c $2 -s /bin/$3 -g $4 $1

sudo passwd $1

echo "$5" | passwd "$1" --stdin

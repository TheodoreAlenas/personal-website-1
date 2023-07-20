push_to_site() {
  cd target || return 1
  sftp root@136.244.116.107 <<EOF
put -R * /srv
exit
EOF
}

if make && git add -Av && git commit && git push -u origin main
then (push_to_site)
fi

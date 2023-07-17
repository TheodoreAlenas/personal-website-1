push_to_site() {
  cd target || return 1
  sftp root@136.244.116.107 <<EOF
put -R * /srv
exit
EOF
}

push_to_github() {
  git push -u origin main
}

push_to_github && (push_to_site)

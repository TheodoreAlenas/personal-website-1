cat "$0";

if make && git add -Av && git commit && git push -u origin main
then rsync -vr target/* root@theodoros-d-alenas.site:/srv
fi


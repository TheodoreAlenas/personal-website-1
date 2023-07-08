.PHONY: links all clean

all: target/index.html target/images

clean:
	echo removing:; find target -maxdepth 1
	rm -rf target/*

links:
	ln -s images img

target/index.html: home/index.php $(wildcard home/*/*)
	php $< > $@

target/images: images
	find images -type d -exec mkdir -v target/{} \; -o -type f -exec ln -v {} target/{} \;

.PHONY: links all clean

all: target/index.html target/test-banner.html target/test-menu-bar.html target/images

clean:
	echo removing:; find target -maxdepth 1
	rm -rf target/*

links:
	ln -s images img

target/index.html: home/index.php $(wildcard home/*/*)
	php $< > $@

target/test-banner.html: home/banner/test.php $(wildcard home/banner/*) $(wildcard common/*)
	php $< > $@

target/test-menu-bar.html: common/menu-bar/test.php $(wildcard common/menu-bar/*) $(wildcard common/*)
	php $< > $@

target/images: images
	find images -type d -exec mkdir -v target/{} \; -o -type f -exec ln -v {} target/{} \;

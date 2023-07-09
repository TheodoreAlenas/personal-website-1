.PHONY: links all clean

all: target/index.html target/test-banner.html target/test-menu-bar.html target/images

clean:
	echo removing:; find target -maxdepth 1
	rm -rf target/*

links:
	ln -s images img

target/index.html: home/index.php target/menu-bar.css $(wildcard home/*/*)
	php $< > $@

target/test-banner.html: home/banner/test.php target/menu-bar.css $(wildcard home/banner/*) $(wildcard common/*)
	php $< > $@

target/test-menu-bar.html: common/menu-bar/test.php target/menu-bar.css $(wildcard common/menu-bar/*) $(wildcard common/*)
	php $< > $@

target/images: images
	find images -type d -exec mkdir -v target/{} \; -o -type f -exec ln -v {} target/{} \;

target/menu-bar.css: common/menu-bar/css/include-to-get-media-queries.php $(wildcard common/menu-bar/css/*)
	php $< > $@


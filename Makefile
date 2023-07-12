.PHONY: links all clean

all: target/en/biography.html target/en/biography.html target/en/index.html target/gr/index.html target/test/banner.html target/test/menu-bar.html target/images

clean:
	echo removing:; find target -maxdepth 1
	rm -rf target/*

links:
	ln -s images img

target/%/index.html: home/index-%.php target/menu-bar.css target/banner.css home/mod.php $(wildcard home/*/*) $(wildcard common/*)
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/%/biography.html: biography/index-%.php target/menu-bar.css biography/mod.php $(wildcard biography/*) $(wildcard common/*)
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/test/banner.html: home/banner/test.php target/menu-bar.css target/banner.css $(wildcard home/banner/*) $(wildcard common/*)
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/test/menu-bar.html: common/menu-bar/test.php target/menu-bar.css $(wildcard common/menu-bar/*) $(wildcard common/*)
	php $< > $@

target/images: images
	find images -type d -exec mkdir -pv target/{} \; -o -type f -exec ln -vf {} target/{} \;

target/menu-bar.css: common/menu-bar/css/include-to-get-media-queries.php $(wildcard common/menu-bar/css/*)
	php $< > $@

target/banner.css: home/banner/css/include-to-get-media-queries.php $(wildcard home/banner/css/*)
	php $< > $@


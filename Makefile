MAINS_NAKED = index biography contact
TESTS_NAKED = banner menu-bar contact face-and-name

MAINS_EN = $(addprefix target/en/,$(addsuffix .html,${MAINS_NAKED}))
MAINS_GR = $(addprefix target/gr/,$(addsuffix .html,${MAINS_NAKED}))
MAINS = ${MAINS_EN} ${MAINS_GR}
TESTS = $(addprefix target/test/,$(addsuffix .html,${TESTS_NAKED}))

.PHONY: links all clean

all: ${MAINS} ${TESTS} target/images

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

target/%/contact.html: contact/index-%.php target/menu-bar.css contact/mod.php $(wildcard contact/*) $(wildcard common/*)
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/test/banner.html: home/banner/test.php target/menu-bar.css target/banner.css $(wildcard home/banner/*) $(wildcard common/*)
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/test/menu-bar.html: common/menu-bar/test.php target/menu-bar.css $(wildcard common/menu-bar/*) $(wildcard common/*)
	php $< > $@

target/test/contact.html: contact/test.php $(wildcard contact/*) $(wildcard common/*)
	php $< > $@

target/test/face-and-name.html: contact/face-and-name-test.php $(wildcard contact/face-and-name*) $(wildcard common/*)
	php $< > $@

target/images: images
	mkdir -p $@
	find images -maxdepth 1 -type f -exec ln -vf {} target/{} \;
	ln -vf images/favicon.ico target/favicon.ico

target/menu-bar.css: $(wildcard common/menu-bar/css/*)
	php $< > $@

target/banner.css: home/banner/css/include-to-get-media-queries.php $(wildcard home/banner/css/*)
	php $< > $@


# License at the bottom.

MAINS_NAKED = index biography contact portfolio portfolio/tdd
TESTS_NAKED = banner menu-bar contact face-and-name

MAINS_EN = $(addprefix target/en/,$(addsuffix .html,${MAINS_NAKED}))
MAINS_GR = $(addprefix target/gr/,$(addsuffix .html,${MAINS_NAKED}))
MAINS = ${MAINS_EN} ${MAINS_GR}
TESTS = $(addprefix target/test/,$(addsuffix .html,${TESTS_NAKED}))

COMMON = Makefile $(wildcard common/* common/*/*)

.PHONY: links all clean

all: ${MAINS} ${TESTS} target/images

clean:
	echo removing:; find target -maxdepth 1
	rm -rf target/*

links:
	ln -s images img

target/%/index.html: home/index-%.php target/banner.css home/mod.php $(wildcard home/*/*) ${COMMON}
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/%/portfolio.html: portfolio/index-%.php $(wildcard portfolio/*) ${COMMON}
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/%/portfolio/tdd.html: portfolio/tdd/index-%.php $(wildcard portfolio/*) ${COMMON}
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/%/biography.html: biography/index-%.php $(wildcard biography/*) ${COMMON}
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/%/contact.html: contact/index-%.php $(wildcard contact/*) ${COMMON}
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/test/banner.html: home/banner/test.php target/banner.css $(wildcard home/banner/*) ${COMMON}
	@dirname $@ | xargs mkdir -pv
	php $< > $@

target/test/menu-bar.html: common/menu-bar/test.php $(wildcard common/menu-bar/*) ${COMMON}
	php $< > $@

target/test/contact.html: contact/test.php $(wildcard contact/*) ${COMMON}
	php $< > $@

target/test/face-and-name.html: contact/face-and-name-test.php $(wildcard contact/face-and-name*) ${COMMON}
	php $< > $@

target/images: images
	mkdir -p $@
	find images -maxdepth 1 -type f -exec ln -vf {} target/{} \;
	ln -vf images/favicon.ico target/favicon.ico

target/banner.css: home/banner/css/include-to-get-media-queries.php $(wildcard home/banner/css/*)
	php $< > $@

# Copyright (c) 2023 Dimakopoulos Theodoros
# 
# Permission is hereby granted, free of charge, to any person obtaining a copy
# of this software and associated documentation files (the "Software"), to deal
# in the Software without restriction, including without limitation the rights
# to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
# copies of the Software, and to permit persons to whom the Software is
# furnished to do so, subject to the following conditions:
# 
# The above copyright notice and this permission notice shall be included in all
# copies or substantial portions of the Software.
# 
# THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
# IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
# FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
# AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
# LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
# OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
# SOFTWARE.

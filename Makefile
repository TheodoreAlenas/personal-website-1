# License at the bottom.

MAINS_NAKED = index biography contact portfolio
TESTS_NAKED = banner menu-bar contact face-and-name

MAINS_EN = $(addprefix target/en/,$(addsuffix .html,${MAINS_NAKED}))
MAINS_GR = $(addprefix target/gr/,$(addsuffix .html,${MAINS_NAKED}))
MAINS = ${MAINS_EN} ${MAINS_GR}
TESTS = $(addprefix target/test/,$(addsuffix .html,${TESTS_NAKED}))

.PHONY: all clean

all: tags ${MAINS} ${TESTS} target/images

clean:
	echo removing:; find target -maxdepth 1
	rm -rf target/*

tags: $(find . -name .git -prune -o -type f -print)
	find . -name .git -prune -o -type f -print0 | xargs -0 ctags

COMMON = Makefile $(wildcard common/* common/*/*)

define THE_USUAL =
@dirname $@ | xargs mkdir -pv
php $< > $@
endef

target/%/index.html: home/index-%.php target/banner.css home/mod.php $(wildcard home/*/*) ${COMMON}
	$(THE_USUAL)
target/%/portfolio.html: portfolio/index-%.php $(wildcard portfolio/*) ${COMMON}
	$(THE_USUAL)
target/%/biography.html: biography/index-%.php $(wildcard biography/*) ${COMMON}
	$(THE_USUAL)
target/%/contact.html: contact/index-%.php $(wildcard contact/*) ${COMMON}
	$(THE_USUAL)
target/test/banner.html: home/banner/test.php target/banner.css $(wildcard home/banner/*) ${COMMON}
	$(THE_USUAL)
target/test/menu-bar.html: common/menu-bar/test.php $(wildcard common/menu-bar/*) ${COMMON}
	$(THE_USUAL)
target/test/contact.html: contact/test.php $(wildcard contact/*) ${COMMON}
	$(THE_USUAL)
target/test/face-and-name.html: contact/face-and-name/test.php $(wildcard contact/face-and-name/*) ${COMMON}
	$(THE_USUAL)
target/banner.css: home/banner/css/include-to-get-media-queries.php $(wildcard home/banner/css/*)
	$(THE_USUAL)

target/images: images
	mkdir -p $@
	find images -maxdepth 1 -type f -exec ln -vf {} target/{} \;
	ln -vf images/favicon.ico target/favicon.ico

IMG_PROMPT = prompt-display-32-times-shorter.png prompt-display.png
IMG_FACE = face-64-times-shorter.png face.jpg
IMG_STRIPE = stripe-with-faces.png stripe-with-faces-8-times-shorter.png
IMG_PAT = pat-8-times-shorter.png pat.png

IMAGE_NAMES = ${IMG_PROMPT} ${IMG_FACE} ${IMG_STRIPE} ${IMG_PAT}

URI = http://www.theodoros-d-alenas.site
IMAGE_URIS = ${URI}/favicon.ico $(addprefix ${URI}/images/,${IMAGE_NAMES})

images:
	mkdir -p images
	cd images && wget ${IMAGE_URIS}


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

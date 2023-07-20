# Theodore's Home Page

## Goal

A website whos purpose is to look at it,
then look at me, and think to yourself that
it got to be my website. I emphasise that
because I don't like the design of most sites,
they have nothing to do with the person
they're made for.

Also I wanted to learn web development and
disciplines of handling complexity.
I expect this project to be the center of
my portfolio in the near future.

## Running

It's a static site, so you may try it using
```bash
git clone https://github.com/TheodoreAlenas/personal-home-page
make
your-browser file://$PWD/target/en/index.html
```

I find it valuable to throttle, and for that you may try
```bash
python3 -m http.server 3000
```
so that you can enable throttling in the browser.

You'll need php. Version 7 will work,
and probably version 4 will too.
Also, you'll need a Linux environment.

## About

The site is online, as of now, Summer of 2023. It's called
[www.theodore-d-alenas.site](www.theodore-d-alenas.site).

It supports light and dark theme,
Greek and English language,
desktop screens and mobile screens,
it should be easy to modify by an unfamiliar programmer,
and it's friendly to the disabled.

## Technical side

The code was cleaned up all throughout the process,
because I knew I'd easily lose track of what I'm doing,
given I don't know how to make a website.
I did know how to write CSS,
and HTML with accessibility concerns,
and I have handled complex tasks in the past.
However it was my first time that I made a site.

I highly recommend you try to navigate the code,
because I put plenty of effort into the directory structure.
The goal is to make it so navigating the code
feels the same as navigating the site,
and if multiple pieces of code need to change for
the same reason then they're next to each other.

Something else that I find worth trying out is the
JavaScript functions that are defined for
toggling the theme from light to dark.
The function for toggling is composed of other functions
that may be tried out individually in the browser console.

Part of the site was made with test driven development,
in a way. The tests aren't automated, and as tests
I count webpages that show off a component in different
states, such as stretched, localized, overfull
and themed. I didn't actually try them themed
but the infastructure is there, a page could have
two menu bars themed differently.

## Apologies

It's my first web development project.
The reason it's mostly PHP is that I thought I'd use PHP.
I wasn't expecting it to turn out this way,
I either expected I'd use PHP in the original intended way
or I'd make a server side rendered site.
By making the site incrementally, however, it turned out
that the best approach is to stitch together strings
that make up HTML files.
That makes it unnecessary to use PHP indeed.

Also I'm sorry I didn't think
of other platforms than Linux.
I didn't intend to publish the code originally.

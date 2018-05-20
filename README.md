This website is built using a static web page generator.
It is generated via a Travis build (= virtual machine) and sent as static files to a fast web page.

This is a community website, you are welcome to contribute.
[Learn how to contribute](https://github.com/CodeDesignInitiative/cdweb1801/blob/master/CONTRIBUTING.md).

## Tools used:

- Static Site Generator: [Jigsaw (PHP, Laravel)](https://jigsaw.tighten.co)
- Hosting: [Netlify](https://netlify.com)
- Git: [Github](https://github.com)
- CSS Framework: [Tailwind CSS (Utility-First)](https://tailwindcss.com)
- Media Player: [Plyr (JavaScript)](https://plyr.io/)

To run the site locally, you need the following tools:

- `Git`
- `Composer`
- `Browser of your choice`

## How to run site locally?

If you want to develop a feature or fix a bug, you need to run a local copy of the page.
Here is how to do that.

```bash    
git clone git@github.com:CodeDesignInitiative/cdweb1801.git
cd cdweb1801
composer install
./vendor/bin/jigsaw build production
cd build_production
# open the index.html in browser
```

To automaticaly build the site when you make changes you can use [the silversearcher tool](https://github.com/ggreer/the_silver_searcher) and [entr](http://entrproject.org/).
```bash
# open another terminal and navigate to the cdweb1801 directory
ag -l | entr ./vendor/bin/jigsaw build production
```

Most probably your browser will protest and say that the site is insecure. In Chrome just type `badidea` and proceed, in Firefox ignore all warnings and visit page.

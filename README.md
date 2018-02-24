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

- `Node` and `NPM`
- `Composer`
- `BrowserSync`

## How to run site locally?

If you want to develop a feature or fix a bug, you need to run a local copy of the page.
Here is how to do that.

```bash    
git clone git@github.com:CodeDesignInitiative/cdweb1801.git
cd codedesign
composer install
npm install
gulp watch
# new terminal tab
cd build_local
browser-sync start -s -f . --no-notify --https
```

Most probably your browser will protest and say that the site is insecure. In Chrome just type `badidea` and proceed, in Firefox ignore all warnings and visit page.

This website is built using a static web page generator. It is generated offline and sent as static files to a fast web page.

## Tools used:

- Static Site Generator: [Jigsaw (PHP, Laravel)](https://jigsaw.tighten.co)
- Hosting: [Netlify](https://netlify.com)
- Git: [Gitlab](https://gitlab.com)
- CSS Framework: [Tailwind CSS (Utility-First)](https://tailwindcss.com)
- Media Player: [Plyr (JavaScript)](https://plyr.io/)

To run the site locally, you need the following tools:

- `Node` and `NPM`
- `Composer`
- `BrowserSync`

## How to run site locally?

```bash    
git clone gitlab.com/...
cd codedesign
composer install
npm install
gulp watch
# new terminal tab
cd build_local
browser-sync start -s -f . --no-notify --https
```

Most probably your browser will protest and say that the site is insecure. You can savely ignore this and proceed.

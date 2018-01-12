@extends('_layouts.master')

@section('body')
<main class="p-8 bg-grey">

        <div class="text-white text-3xl mb-4">Docs</div>


    <div class="bg-white p-8">
        <div class="text-lg leading-normal w-1/2">
            
        <div class="text-2xl">Tech Stack</div>

        <p>
            This website is built using a static web page generator. It is generated offline and sent as static files to a fast web page.
        </p>

        <p class="mt-8">
            <p>Tools used:</p>
            <ul class="list-reset">
                <li>– Static Site Generator: <a href="https://jigsaw.tighten.co" target="_blank">Jigsaw (PHP, Laravel)</a></li>
                <li>– Hosting: <a href="https://netlify.com" target="_blank">Netlify</a></li>
                <li>– Git: <a href="https://gitlab.com" target="_blank">Gitlab</a></li>
                <li>– CSS Framework: <a href="https://tailwindcss.com" target="_blank">Tailwind CSS (Utility-First)</a></li>
                <li>– Media Player: <a href="https://plyr.io/" target="_blank">Plyr (JavaScript)</a></li>
            </ul>
        </p>

        <p class="mt-8">
            To run the site locally, you need the following tools:
            <ul class="list-reset">
                <li><code>– Node</code> and <code>NPM</code></li>
                <li>– <code>Composer</code></li>
                <li>– <code>BrowserSync</code></li>
            </ul>
        </p>


        <p class="mt-8">
            How to run site locally?

<pre><code class="language-bash line-numbers">
git clone gitlab.com/...
cd codedesign
composer install
npm install
gulp watch
browser-sync start -s -f . --no-notify --https
</code></pre></p>

<p>Most probably your browser will protest and say that the site is insecure. You can savely ignore this and proceed.</p>

        </div>
    </div>

</main>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/prism.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/plugins/line-numbers/prism-line-numbers.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/components/prism-bash.min.js"></script>
</script>
</script>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/themes/prism.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.9.0/plugins/line-numbers/prism-line-numbers.min.css" />
@endsection
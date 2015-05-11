# php-search-words
Word search in php without database can create a word search within php files in a folder.

Insert input search in your PHP page:

<code><div id="search">
<form action="?buscador" method="post">
<!-- OR <form action="buscador.php" method="post"> -->
<input type="text" value="Encuentra en nuestro sitio..." autocomplete="off" class="text-search" name="q"/>
<input type="submit" class="submit-search" value="Buscar" name="search"/>
</form>
</div></code>

```html
<h2>Example of code</h2>

<pre>
    <div class="container">
        <div class="block two first">
            <h2>Your title</h2>
            <div class="wrap">
            //Your content
            </div>
        </div>
    </div>
</pre>
```

And create the page buscador.php

# php-search-words
Word search in php without database can create a word search within php files in a folder.

Insert input search in your PHP page:

```html
<div id="search">
<form action="?buscador" method="post">
<!-- OR <form action="buscador.php" method="post"> -->
<input type="text" value="Encuentra en nuestro sitio..." autocomplete="off" class="text-search" name="q"/>
<input type="submit" class="submit-search" value="Buscar" name="search"/>
</form>
</div>
```

And create the page buscador.php

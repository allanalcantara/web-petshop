<ul id="flexiselDemo3">
    <!-- fazer echo de cada imagem -->
    <?php
        $files = glob("../img/slide/*.*");
        for ($i=1; $i<count($files); $i++)
        {
            $num = $files[$i]; echo '<li><img alt="random image" data-u="image" src="'.$num.'" width="1300" height="250"/></li>'; 
        }
    ?>    
</ul>
<img src='img/separador.png' width="100%" height="10" />

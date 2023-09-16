<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospeSites</title>
    <?php  wp_head();?>
</head>
<body>
    <header>
        <div class="logo">
            <h1>hospeSites</h1>
        </div>
        <nav>
            <h2>Menu</h2>
        </nav>
    </header>

    <main>
        <section>
            <h2>Slider Noticias</h2>
            <p>Pequeno Slider de Noticias</p>
        </section>

        <section>
            <article>
                <h2>Seção dos Artigos</h2>
                <p>Seção dos artigos também terá uma sidebar</p>

                <aside>
                    <h2>Sidebar ao Lado Direito dos Artigos</h2>
                </aside>
            </article>
        </section>

        <section>
            <h2>Seção Sobre</h2>
            <p>Seção texto sobre</p>
        </section>
    </main>
    <footer>
        <h2>Rodapé</h2>
        <p>Finalizando os site</p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
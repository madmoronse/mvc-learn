<?php echo $header; ?>
<div class="intro">
	<div class="intro-content">
		 <div class="left-content">
            <div class="intro-content">
                    <div class="intro-text">
                        <h1>Торт - это всегда праздник!</h1><br>
                        <p>
                            Торт всегда был одним из самых наилучших лакомств для любителей десертов.
                        </p><br>
                        <div class="button-block">
                            <a href="#form">
                                <button class="button btn-1">Посмотреть каталог</button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
	</div>
</div>
<div class="wrapper">
    <div class="category section">
    	<div class="item">
            <?php foreach ($categories as $value): ?>
                <a href="#" class="category-it-link"><div class="category-it <?php echo 'it-' . $value['id']; ?>"><h1><?php echo $value['title']; ?></h1></div></a>
            <?php endforeach ?>
        </div>
    </div>
    <div class="section-2 section">

    </div>
    <div class="section-3 section">

    </div>
</div>
<div class="scroll-up">
	<svg class="scroll-up__svg" viewBox="-2 -2 52 52">
		<path
			class="scroll-up__svg-path"
			d="
			M24, 0
			a24,24 0 0, 1 0, 48
			a24,24 0 0, 1 0, -48"
		/>
	</svg>
</div>
<?php echo $footer; ?>

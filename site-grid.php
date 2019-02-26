<?php 
include_once 'parse.php';

if(file_exists('head.php')) {
    include_once 'head.php';
} else {
	echo 'Файл head.php не найден';
}

?>
<body>
	<div class="wrapper">
		<?php 
			if(file_exists('header.php')) {
	    include_once 'header.php';
	} else {
		echo 'Файл header.php не найден';
	}
		?>
		<div class="box3">
			<div></div>
			<div class="horizontal-bar">
					<ul class="dropdown">
						<li>
							<a href=""><i class="fas fa-align-justify"></i> Каталог</a>
							<ul>
								<li><a href="">Игрушки плюшевые</a></li>
								<li><a href="">Игрушки механические</a></li>
								<li><a href="">Игрушки электрические</a></li>
								<li><a href="">Настольные игры</a></li>
								<li><a href="">Костюмы персонажей</a></li>
							</ul>
						</li>
						<li><a href=""> О компании</a></li>
						<li><a href="">Контакты</a></li>
						<li><a href="">Доставка</a></li>
						<li><a href="">Оплата</a></li>
						<li><a href="">Статьи</a></li>
						<li><a href="">Обратная связь</a></li>
					</li>
						</ul>
			</div>
			<div></div>
		</div>
		<div class="box4">
			<div class="banner">
			</div>
		</div>
		<div class="box5">
			<div class="products-card">
                <?= goodsOut($decodeContent); ?>
			</div>
		</div>
		<div class="box6">
			<div class="description-bottom">
				<h2>Покупайте у нас!</h2>
				<h3>Радуйте своих малышей только хорошими игрушками!</h3>
			</div>
		</div>
	</div>
<script scr="js/jquery-3.3.1.min.js"></script>
</body>
</html>
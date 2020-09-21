<? 

$password = 'magniflexmattress';
$content_links = '<ul class="links_for_partners">
					<li><a target="_blank" href="/upload/MХ прайс розн 27.08.20.pdf">Прайс-лист розница от 27.08.2020 г.</a></li>
					<li><a href="/upload/restcollection_new_design.zip">Rest Collection новый дизайн</a></li>					
					<li><a href="/upload/sert.zip">Сертификаты</a></li>
					<li><a href="/upload/dok_inwork.zip">Документы для работы</a></li>
					<li><a href="/upload/buk_rus_pdf.rar">Буклет Россия pdf</a></li>
					<li><a href="/upload/logo_Magniflex.rar">Логотипы Magniflex</a></li>
					<li><a href="/upload/material_itliya.rar">Материалы Италия</a></li>
					<li><a href="/upload/matrass_beach.rar">Матрасы на пляжах</a></li>
					<li><a href="/upload/komp_aoto_opis.rar">О компании фото + описание</a></li>
					<li><a href="/upload/opisan_materia.rar">Описание материалов</a></li>
					<li><a href="/upload/photo_ital.rar">Фото Италии</a></li>
					<li><a href="/upload/photo_matr.rar">Фото материалов</a></li>
					<li><a href="/upload/plednew.zip">Фотографии пледов 24.01.2019 + описания</a></li>
					<!--<li><a href="/upload/tracks.rar">Пледы (описания, фото и сертификат)</a></li>-->
					<li><a href="/upload/photo-pillow.zip">Фотографии подушек 25.06.2019</a></li>
					<li><a href="/upload/photo-matrases.zip">Фотографии матрасов 24.01.2019</a></li>
					<li><a href="/upload/Наматрасники Италия 2.xlsx">Наматрасники описания</a></li>
				</ul>';
$error_text = '<p>Неверный пароль. <a id="return_input">Повторить ввод</a></p>';	
if (md5($_POST['pass']) === md5($password)) {
	echo $content_links;
} else {
	echo $error_text;
}

//echo $password;
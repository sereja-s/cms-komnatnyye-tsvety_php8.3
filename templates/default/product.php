<?php if (!empty($data)) :  ?>

	<section class="page__products products">

		<div class="products__container _container">
			<h1 class="products__title-cat _title"><?= $data['name'] ?></h1>
			<div class="products__items">
				<div class="products__item item-product">
					<div class="item-product__image _ibg">
						<img src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>">
					</div>
					<div class="item-product__body">
						<div class="item-product__content">
							<h3 class="item-product__title"><?= $data['name'] ?></h3>
							<div class="item-product__text"><?= $data['short_content'] ?></div>

							<?php if ($data['price'] || $data['price_m_opt']) : ?>

								<div class="item-product__text">Цена:</div>

							<?php endif; ?>

							<?php if ($data['price']) : ?>

								<div class="item-product__prices">
									<div class="item-product__price"><?= $data['price'] ?> руб.</div>
									<div class="item-product__price item-product__price_old">розница</div>
								</div>

							<?php endif; ?>

							<?php if ($data['price_m_opt']) : ?>

								<div class="item-product__prices">
									<div class="item-product__price"><?= $data['price_m_opt'] ?> руб.</div>
									<div class="item-product__price item-product__price_old">мелкий опт</div>
								</div>

							<?php endif; ?>

							<?php if ($data['content']) : ?>

								<div class="item-product__text" style="padding-top: 15px;"><?= $data['content'] ?></div>

							<?php endif; ?>

						</div>

					</div>
				</div>
			</div>

			<div class="s-content" style="margin-top: 35px">
				<div class="content-block">
					<p class="text-attention"><?= $data['name'] ?> купить в Донецке, Макеевке ДНР по адресу: <?= $this->set['address'] ?>. Сделать заказ можно по тел. <?= $this->set['phone'] ?>. Цены доступные. Есть возможность доставки по Донецку, Макеевке. Свяжитесь с нами! Мы поможем собрать набор под любой повод и бюджет, стильно оформим и подготовим к вручению. Звоните или напишите нам — подскажем лучшие сочетания!</p>
					<!-- <h3 class="title-block">Беговелы для детей</h3> -->
					<p class="text"> Обращаем Ваше внимание на то, что данный интернет-сайт носит исключительно информационный характер и ни при каких условиях информационные материалы и цены, размещенные на сайте, не являются публичной офертой, определяемой положениями статьи 437 Гражданского кодекса РФ.</p>
				</div>
			</div>

		</div>

	</section>

<?php endif; ?>
<?php
/**
 * @frontend/modules/letter/layouts/footer.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Steppe West
 * @link https://steppewest.com/
 * @license MIT
 */

/**
 * @var \yii\web\View $this
 */
?><footer class="bg-dark py-4"><div class="container"><?php if (!empty($this->params['footer'])): ?><?= $this->params['footer'] ?><?php else: ?><p class="m-0 text-center text-white">Steppe West acknowledges the <a class="link-info link-opacity-75-hover text-decoration-none"href="https://gubbigubbidyungungoo.com/"target="_blank"title="Gubbi Gubbi">Gubbi Gubbi</a> (also known as the <a class="link-info link-opacity-75-hover text-decoration-none"href="https://gubbigubbidyungungoo.com/explanation-of-the-gubbi-gubbi-language/"target="_blank"title="Kabi Kabi">Kabi Kabi</a>) peoples, on whose land we are based.</p><p class="m-0 text-center text-white">Steppe West is, & always will be, a not for profit enterprise.</p><p class="m-0 text-center text-white">Steppe West stands with 🇺🇦 Ukraine & 🇵🇸 Palestine.</p><p class="m-0 text-center text-white">Copyright © Steppe West 2024.</p><?php endif; ?></div></footer>

<?php
if(isset($infos['cgvUrl']) && !empty($infos['cgvUrl'])) {
	$cgvLink = ' <a href="' . $infos['cgvUrl'] . '" target="_blank">'. t('En savoir plus et gérer ces paramètres.') . '</a>';
}
else { $cgvLink = ''; }

echo '<div id="cookie-footer">
	<a href="#" class="close">' . t('Fermer') . '</a>' . 
	t('En poursuivant votre navigation sur ce site, vous acceptez nos CGV et l’utilisation de cookies pour vous proposer des contenus et services adaptés à vos centres d’intérêts et vous permettre l\'utilisation de boutons de partages sociaux.') . 
	$cgvLink .
'</div>';

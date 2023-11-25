<?php
function changeLabel($url, $label) {
    $currentPage = basename($_SERVER['REQUEST_URI']);

    $isActive = $currentPage == $url ? 'active' : '';

    echo '<li><a class="dropdown-item ' . $isActive . '" href="' . $url . '">' . $label . '</a></li>';
}
?>

1/ File
vendor/magento/framework/App/State.php

2/ Code
<?php
try {
    $this->state->getAreaCode();
} catch (LocalizedException $e) {
    $this->state->setAreaCode(\Magento\Framework\App\Area::AREA_GLOBAL);
}
?>

3/ Errors
Area code is not set
Area code is already set

https://github.com/magento/magento2/issues/8770
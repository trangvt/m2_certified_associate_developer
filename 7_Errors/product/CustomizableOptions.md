# Import product has CustomizableOptions

Dựa vào file này để lưu 'Customizable Options' của product
vendor/magento/magento2-base/dev/tests/integration/testsuite/Magento/Catalog/_files/product_simple_with_options.php

1/ data truyền vào phải thỏa mãn
+ là array
+ structure giống như ở file mẫu
Nếu có element nào thừa ra thì phải unset, nếu không sẽ báo lỗi

2/ Sau đó sử dụng code mẫu để setOptions

3/ Save product

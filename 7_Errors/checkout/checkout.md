Nếu place order  gặp lỗi này
	A server error stopped your order from being placed. Please try to place your order again

Thì tìm tới file
	app/code/SM/Checkout/Plugin/Api/PaymentInformationManagementInterfacePlugin.php:33
	vendor/magento/module-checkout/Model/PaymentInformationManagement.php:95

```PHP
throw new CouldNotSaveException(
    __('A server error stopped your order from being placed. Please try to place your order again.'),
    $e
);
```
và chuyển thành
```PHP
throw new CouldNotSaveException(
    __('A server error stopped your order from being placed. Please try to place your order again.' . $e->getMessage()),
    $e
);
```
để in ra lỗi chính xác

An exception occurred on 'sales_model_service_quote_submit_failure' event: Indexer handler is not available: elasticsearch6

app/code/SM/Payment/Helper/Data.php:38
checkElasticHealth() 
return true ngay ở đầu function
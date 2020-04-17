# Delete shipment in DB
https://www.quora.com/Can-I-delete-Shipment-in-Magento-2

1/ Delete data in below tables
	1/ sales_shipment
	2/ sales_shipment_comment
	3/ sales_shipment_grid
	4/ sales_shipment_item
	5/ sales_shipment_track

We have
	sales_shipment.order_id = sales_shipment_grid.order_id
	sales_shipment.entity_id = sales_shipment_item.entity_id

2/ Update data in sales_order_item
	SET SQL_SAFE_UPDATES = 0; 
	UPDATE sales_order_item SET qty_shipped = 0 where order_id IN (sales_shipment.order_id)
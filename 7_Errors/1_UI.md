# We're sorry, an error has occurred while generating this content.

Cause: Elastic search die

Check như sau

1/ Connect server

2/ tail -f var/log/exception.log
	Thấy lỗi 
	[2020-04-01 09:29:42] report.CRITICAL: No alive nodes found in your cluster {"exception":"[object] (Elasticsearch\\Common\\Exceptions\\NoNodesAvailableException(code: 0): No alive nodes found in your cluster at /urbanfox/mccp_sg/vendor/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/StaticNoPingConnectionPool.php:53)"} []

3/ Check docker: sudo docker ps -a

Thấy elasticserch6 có STATUS = Exited (137) 8 days => DIE

4/ Khởi động lại container
	sudo docker restart elasticserch6

5/ Test conncetion cho chắc
	Config > CALALOG > Catalog > Catalog Search
	Click `Test Connection`

6/ bin/magento c:f

7/ DONE
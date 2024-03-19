run_10:
	siege -c10 -r100 -T application/json -f urls.txt

run_25:
	siege -c25 -r100 -T application/json -f urls.txt

run_50:
	siege -c50 -r100 -T application/json -f urls.txt

run_100:
	siege -c100 -r100 -T application/json -f urls.txt

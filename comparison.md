# Compare results on local setup

## Docker config

* CPU limit: 2
* Memory limit: 2 GB
* Swap: 4 GB

## Comparison details

| Concurrency | Availability (%) | Response time (s) | Throughput (MB/s) | Transaction rate (trans/s) |
|-------------|------------------|-------------------|-------------------|----------------------------|
| 10          | 100              | 1.65              | 0.00              | 6.02                       |
| 25          | 100              | 4.16              | 0.00              | 5.98                       |
| 50          | 100              | 8.31              | 0.00              | 5.99                       |
| 100         | 100              | 16.53             | 0.00              | 6.02                       |

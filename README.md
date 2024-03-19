# Stress Test Practice

## Set up the environment

Start up the containers and prepare the app:

```shell
docker compose up -d
docker compose exec php composer install
docker compose exec php bin/console d:m:m
```

## Run checks

Checks are placed under the `Makefile` and you can use 4 options:

10 concurrent users for battle:

```shell
make run_10
```

25 concurrent users for battle:

```shell
make run_25
```

50 concurrent users for battle:

```shell
make run_50
```

100 concurrent users for battle:

```shell
make run_100
```

## Local results details

[Local results details](comparison.md)

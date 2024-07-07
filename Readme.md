# Digikala Seller Service Sandbox

This project is a Dockerize service to help developers to understand various response types of Seller Service APIs, so they can develop and implement practical apps and services for sellers.

## Installation

### 1st step:
Clone the sandbox project (implemented on Symfony) from this [Git Repository](https://github.com/salimousavi/seller_service_sandbox)

```bash
git clone https://github.com/salimousavi/seller_service_sandbox.git
```

### 2nd step:
Run docker-compose to install the required containers and also composer dependencies (you may need VPN in Iran)

```bash
docker-compose up
```
### 3nd step:
if docker containers from prev step installed and run completely, now you should create your local database schema. use below command for this purpose:

```bash
docker-compose exec -it ss_worker php bin/console doctrine:migrations:migrate
```
if faced any issue check these:

1. .env file is in your project and env variable "DATABASE_URL" is defined correctly.
2. if you face connection error, try to change "ss_mysql" to "127.0.0.1" in "DATABASE_URL" env variable. (remember to rechange this variable to original value after creating db schema)


## Usage

To start using this service, you should know the APIs of seller service project. you can find it in [seller service swagger](https://seller.digikala.com/api/v3/doc/) or you can just use below command in this project:

```bash
docker-compose exec -it ss_worker php bin/console debug:router
```

For checking the response of each API, you must define a specific header key in each request:
```
x-response-code = 200
```

This header gets the Http status code that you expect and create response based on that, so you can see the response structures you will see in each request status code from that Api.


## Contributing

It will be appreciated if you can suggest any improvement on this sandbox all the main project.
Let us know by creating issue.

## License
[Digikala Seller Center](https://seller.digikala.com/)

Developed By: Ali Mousavi

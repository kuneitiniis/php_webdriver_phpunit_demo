# php_webdriver_phpunit_demo

This is the example application to demonstrate using:
- [php-webdriver](https://github.com/php-webdriver/php-webdriver)
- [phpunit](https://github.com/sebastianbergmann/phpunit)
- [docker-selenium](https://github.com/SeleniumHQ/docker-selenium)

## how to up in attached mode?

- up in attached mode via docker compose

  ```shell
  docker compose up
  ```

- look at

  <http://localhost:7900/?autoconnect=1&resize=scale&password=secret>

## how to run in detached mode?

- up only firefox in detached mode via docker compose

  ```shell
  docker compose up -d firefox
  ```

- install dependencies via composer

  ```shell
  docker compose run --rm composer install
  ```

- run tests

  ```shell
  docker compose run --rm php vendor/bin/phpunit
  ```

## how to down?

- down via docker compose

  ```shell
  docker compose down
  ```

## what about links?

- <https://github.com/DavertMik/php-webdriver-demo>
- <https://github.com/jmather/phpunit-selenium-first-test>
- <https://github.com/sandrokeil/docker-selenium-grid-phpunit>
- <https://www.selenium.dev/documentation/grid/getting_started/#hub-and-node>
- <https://github.com/SeleniumHQ/docker-selenium/wiki/Getting-Started-with-Docker-Compose>
- <https://docs.docker.com/compose/environment-variables/set-environment-variables/>
- <https://docs.docker.com/reference/cli/docker/compose/run/>

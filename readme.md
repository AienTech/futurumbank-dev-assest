# How to run
1. `docker compose up -d`
2. `opt/bin/composer install`
3. `opt/bin/console doctrine:database:create`
4. `opt/bin/console doctrine:migrations:migrate`

# Test and see
- Open [http://localhost:8080](http://localhost:8080)
- Or `opt/bin/console read:tx <address>`
- Or `opt/bin/console read:tx --help`
# Understory Site
### A boilerplate package for a WordPress site using Understory.

Utilizies the [stoutlogic/local-wordpress-theme-repository](https://github.com/StoutLogic/local-wordpress-theme-repository) composer plugin to create the local composer package repository for your theme, allowing you to maintain your theme outside the scope of the WordPress install.

## Create Project
```
composer create-project stoutlogic/understory-site .
composer run-script theme-init
```

## Optional Setup
### Install WP-CLI Deploy
```
composer run-script install-wp-deploy
```
<p align="center">
  <a href="https://kubeeapp.io/kcms/">
    <img alt="kcms" src="https://cdn.kubeeapp.io/app/uploads/logo-kcms.svg" height="100">
  </a>
</p>

<p align="center">
  <a href="LICENSE.md">
    <img alt="MIT License" src="https://img.shields.io/github/license/kubeeapp/kcms?color=%23525ddc&style=flat-square" />
  </a>

  <a href="https://packagist.org/packages/kubeeapp/kcms">
    <img alt="Packagist" src="https://img.shields.io/packagist/v/kubeeapp/kcms.svg?style=flat-square" />
  </a>

  <a href="https://circleci.com/gh/kubeeapp/kcms">
    <img alt="Build Status" src="https://img.shields.io/circleci/build/gh/kubeeapp/kcms?style=flat-square" />
  </a>

  <a href="https://twitter.com/kubeeappwp">
    <img alt="Follow kubeeapp" src="https://img.shields.io/twitter/follow/kubeeappwp.svg?style=flat-square&color=1da1f2" />
  </a>
</p>

<p align="center">
  <strong>A modern CMS stack</strong>
  <br />
  Built with ❤️
</p>

<p align="center">
  <a href="https://kubeeapp.io">Official Website</a> | <a href="https://kubeeapp.io/docs/kcms/master/installation/">Documentation</a> | <a href="CHANGELOG.md">Change Log</a>
</p>

## Supporting

**kcms** is an open source project and completely free to use.

However, the amount of effort needed to maintain and develop new features and products within the kubeeapp ecosystem is not sustainable without proper financial backing. If you have the capability, please consider donating using the links below:

<div align="center">

[![Donate via Patreon](https://img.shields.io/badge/donate-patreon-orange.svg?style=flat-square&logo=patreon")](https://www.patreon.com/kubeeappdev)
[![Donate via PayPal](https://img.shields.io/badge/donate-paypal-blue.svg?style=flat-square&logo=paypal)](https://www.paypal.me/kubeeappdev)

</div>

## Overview

kcms is a modern WordPress stack that helps you get started with the best development tools and project structure.

Much of the philosophy behind kcms is inspired by the [Twelve-Factor App](http://12factor.net/) methodology including the [WordPress specific version](https://kubeeapp.io/twelve-factor-wordpress/).

## Features

- Better folder structure
- Dependency management with [Composer](https://getcomposer.org)
- Easy WordPress configuration with environment specific files
- Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
- Autoloader for mu-plugins (use regular plugins as mu-plugins)
- Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/kubeeapp/wp-password-bcrypt))

## Requirements

- PHP >= 7.1
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation

1. Create a new project:
   ```sh
   $ composer create-project kubeeapp/kcms
   ```
2. Update environment variables in the `.env` file. Wrap values that may contain non-alphanumeric characters with quotes, or they may be incorrectly parsed.

- Database variables
  - `DB_NAME` - Database name
  - `DB_USER` - Database user
  - `DB_PASSWORD` - Database password
  - `DB_HOST` - Database host
  - Optionally, you can define `DATABASE_URL` for using a DSN instead of using the variables above (e.g. `mysql://user:password@127.0.0.1:3306/db_name`)
- `WP_ENV` - Set to environment (`development`, `staging`, `production`)
- `WP_HOME` - Full URL to WordPress home (https://example.com)
- `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
- `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
  - Generate with [wp-cli-dotenv-command](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
  - Generate with [our WordPress salts generator](https://kubeeapp.io/salts.html)

3. Add theme(s) in `web/app/themes/` as you would for a normal WordPress site
4. Set the document root on your webserver to kcms's `web` folder: `/path/to/site/web/`
5. Access WordPress admin at `https://example.com/wp/wp-admin/`

## Documentation

kcms documentation is available at [https://kubeeapp.io/docs/kcms/master/installation/](https://kubeeapp.io/docs/kcms/master/installation/).

## Contributing

Contributions are welcome from everyone. We have [contributing guidelines](https://github.com/kubeeapp/guidelines/blob/master/CONTRIBUTING.md) to help you get started.

## kcms sponsors

Help support our open-source development efforts by [becoming a patron](https://www.patreon.com/kubeeappdev).

<a href="https://kinsta.com/?kaid=OFDHAJIXUDIV"><img src="https://cdn.kubeeapp.io/app/uploads/kinsta.svg" alt="Kinsta" width="200" height="150"></a> <a href="https://k-m.com/"><img src="https://cdn.kubeeapp.io/app/uploads/km-digital.svg" alt="KM Digital" width="200" height="150"></a> <a href="https://carrot.com/"><img src="https://cdn.kubeeapp.io/app/uploads/carrot.svg" alt="Carrot" width="200" height="150"></a>

## Community

Keep track of development and community news.

- Participate on the [kubeeapp Discourse](https://discourse.kubeeapp.io/)
- Follow [@kubeeappwp on Twitter](https://twitter.com/kubeeappwp)
- Read and subscribe to the [kubeeapp Blog](https://kubeeapp.io/blog/)
- Subscribe to the [kubeeapp Newsletter](https://kubeeapp.io/subscribe/)
- Listen to the [kubeeapp Radio podcast](https://kubeeapp.io/podcast/)

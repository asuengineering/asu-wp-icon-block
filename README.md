# Pitchfork Plugin

This plugin extends The Icon Block to include icons from the ASU Awesome icon library.

Requires at least: WP 6.0
Tested up to: 6.0
Requires PHP: 7.3
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

**Contributors**

- Steve Ryan (ASU Engineering)

## Usage Requirements

- Download the lastest release from Github.
- Install in the normal WP location for plugins which is typically `/wp-content/plugins`.

**Required Additional Plugins**

This plugin will require the "parent" plugin called [The Icon Block](https://wordpress.org/plugins/icon-block/) to be active on the site before it can also be activated.

Once both plugins are activated, users will be able to insert an icon from the ASU Awesome icon library into their project.

Plugin updates can optionally be managed from the admin dashboard through the use of [Git Updater](https://git-updater.com/).

## Development

- Run `npm install` and `composer install` prior to local development.
- SASS and JS compile & watch tasks are triggered via WP-Gulp and `npx gulp-wp` from the project root.

## Release Notes

See [CHANGELOG.md](CHANGELOG.md) for the a list of all improvements made to the theme.

We also keep similar notes in the [releases section](https://github.com/asuengineering/pitchfork-blocks/releases) of our project for an overview of what changed with each release.

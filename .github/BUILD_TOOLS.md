# Build tools

**Important**
You may need to authorize your machine with your token if you are not able to pull assets.

```
lando terminus auth:login --machine-token=TOKEN
```

### Local Build Commands

`npm run setup` - Runs a build to startup local environment, then runs `refresh` command.\
`npm run refresh` - Refresh to install new requirements, import Drupal configuration, build theme, and clear caches.\
`npm run get-db` - Acquires database from the Pantheon test environment. \

#### Drupal specific build commands

`npm run confex` - Exports Drupal configuration. \
`npm run confim` - Imports Drupal configuration.


## Theme

This project uses an [Emulsify](https://github.com/emulsify-ds/emulsify-drupal) theme named `kitchen_karaoke` (`web/themes/custom/kitchen_karaoke/`). For details on Emulsify usage, see that [project wiki](https://docs.emulsify.info/).

#### Theme Tasks

`npm run theme` - Run the theme compiler and watch task for active development. \
`npm run theme-build` - Compile the theme without running the watch task.

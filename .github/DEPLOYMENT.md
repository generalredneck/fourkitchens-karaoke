# Four Kitchens Karaoke.

This documentation outlines the current deployment process for this project.


## Deployment workflow

CircleCI takes care of automated deployment for the `master` branch.

An automated deployment process is kicked off for the branches mentioned
above any time you push. You can monitor the progress of the build and deployment 
here: https://app.circleci.com/pipelines/github/fourkitchens/fourkitchens-karaoke

Code is automatically deployed to Pantheon once the build process is
complete.

### Server Environment and Branches

#### Pull Requests

This is the only valid method of commiting code to the project. Once a pull request is created a series of tasks will be handled with CircleCI to test and build the application into an new multidev environment on Pantheon. A link to the environment will be provided as a comment in the PR once the build and deployment is complete.

#### Dev

The 'Dev' environment is updated with any new code that is merged into master. Base configuration is automatically imported.


#### Test

- Commit changes to test via the Pantheon dashboard.
- Clear the environment cache: `terminus drush fourkitchens-karaoke.test cr`
- Import base configurations: `terminus drush fourkitchens-karaoke.test cim`

If you want to test SSO logins on the test environment:
- Import 'live' configurations: `terminus drush fourkitchens-karaoke.test csim live -y`

#### Live

- Commit changes to live via the Pantheon dashboard.
- Import configurations: `terminus drush fourkitchens-karaoke.live cim`
- Clear the environment cache: `terminus drush fourkitchens-karaoke.live cr`
- Import configurations: `terminus drush fourkitchens-karaoke.live csim live -y`

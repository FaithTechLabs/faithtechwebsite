# Description

* This is the source for faithtech.com
* Please include Andrew Alkema and Mitchell Smith on pull requests.

## Deployment

* The site is automatically deployed to dev.faithtech.com on any push via CircleCi: https://circleci.com/gh/FaithTechLabs/workflows/website
* Each commit will have a link to the corresponding CircleCi
* Config for deployment is in .circleci directory
* Deploy to prod is still manual

* Next steps - modify job to push to prod on merge to master
* Create smoke tests to verify test and not push to prod unless those pass
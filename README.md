## Onepager [![Join the chat at https://gitter.im/themexpert/onepager](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/themexpert/onepager)

## Requirements
* PHP 5.4+

## Browser Requirements
* Google Chrome 41+
* Firefox 36+
* Safari 8+
* Opera 28+
* Internet Explorer 10+

## Installation

Download the **Onepager** plugin from our website and install it as regual plugin for WordPress.

### Developer 

Make sure you have installed `NodeJs` and `NPM` and availabe system wide. You also need to install `composer`, PHP package management system and availabe system wide. Now run this command
```
npm install
```
We need bower to get installed
```
bower install
```
Composer
```
composer install
```
Finally run it
```
gulp
```
Gulp will automatically compile your `LESS` and `JS` changes to `dist` folder.

## Where to Get Help

A chat room has been set up using [Gitter](https://gitter.im/themexpert/onepager) where you can go to talk about the project with developers, contributors, and other members of the community. This is the best place to go to get quick tips and discuss features with others.

[Documentation](http://docs.getonepager.com) is also available, and being continually added to as development progresses.

## How to Contribute

Contributing to the Onepager is easy. Development is being conducted via [Github](http://github.com), where you can submit **Issues** to report any bugs or suggest improvements, as well as submit your own **Pull Requests** to submit your own fixes and additions.

We recommend chatting with the team via [Gitter](https://gitter.im/themexpert/onepager) prior to submitting the pull request to avoid doubling up on a fix that is already pending or likely to be overwritten by an upcoming change.

Onepager follows the [GitFlow branching model](http://nvie.com/posts/a-successful-git-branching-model). The ```master``` branch always reflects a production-ready state while the latest development is taking place in the ```develop``` branch.

Each time you want to work on a fix or a new feature, create a new branch based on the ```develop``` branch: ```git checkout -b BRANCH_NAME develop```. Only pull requests to the ```develop``` branch will be merged.

## Versioning

Onepager is maintained by using the [Semantic Versioning Specification (SemVer)](http://semver.org).

## Copyright and License

Copyright [ThemeXpert](http://www.themexpert.com) under the [GNU GPLv3](http://www.gnu.org/licenses/gpl.html) or later.

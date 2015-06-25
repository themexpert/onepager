#!/bin/bash

#ascend
cd onepager
bower install
composer install
sudo npm install
gulp

#go back
cd ..
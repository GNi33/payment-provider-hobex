#!/bin/bash

set -eu -o xtrace

cp -rv .github/ci/files/var .
cp .github/ci/files/.env .
cp -rf .github/ci/files/composer.json .
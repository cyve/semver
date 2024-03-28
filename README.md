# semver
Simple binary to manipulate semantic version numbers

## Requirements
- PHP >= 7.3

## Installation
`composer require cyve/semver`

## Usage
`semver get:major 1.2.3` => `1`

`semver get:minor 1.2.3` => `2`

`semver get:patch 1.2.3` => `3`

`semver get:pre_release 1.2.3-beta` => `beta`

`semver increase:major 1.2.3` => `2.0.0`

`semver increase:minor 1.2.3` => `1.3.0`

`semver increase:patch 1.2.3` => `1.2.4`

`semver increase:pre_release 1.2.3-beta` => `1.2.3-beta2`

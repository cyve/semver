<?php

exec('php semver get:foo 1.2.3', $output, $resultCode);
assert(array_shift($output) === '"get:foo" is an invalid command', 'Output should be ""get:foo" is an invalid command"');

exec('php semver foo:major 1.2.3', $output, $resultCode);
assert(array_shift($output) === '"foo:major" is an invalid command', 'Output should be ""foo:major" is an invalid command"');

exec('php semver get:major foo', $output, $resultCode);
assert(array_shift($output) === '"foo" is an invalid version format', 'Output should be ""foo" is an invalid version format"');

exec('php semver get:major 1.2', $output, $resultCode);
assert(array_shift($output) === '"1.2" is an invalid version format', 'Output should be ""1.2" is an invalid version format"');

exec('php semver get:major 1.2.3-beta', $output, $resultCode);
assert(array_shift($output) === '1', 'Output should be "1"');

exec('php semver get:minor 1.2.3-beta', $output, $resultCode);
assert(array_shift($output) === '2', 'Output should be "2"');

exec('php semver get:patch 1.2.3-beta', $output, $resultCode);
assert(array_shift($output) === '3', 'Output should be "3"');

exec('php semver get:pre_release 1.2.3-beta', $output, $resultCode);
assert(array_shift($output) === 'beta', 'Output should be "beta"');

exec('php semver increase:major 1.2.3-beta', $output, $resultCode);
assert(array_shift($output) === '2.0.0', 'Output should be "2.0.0"');

exec('php semver increase:minor 1.2.3-beta', $output, $resultCode);
assert(array_shift($output) === '1.3.0', 'Output should be "1.3.0"');

exec('php semver increase:patch 1.2.3-beta', $output, $resultCode);
assert(array_shift($output) === '1.2.4', 'Output should be "1.2.4"');

exec('php semver increase:pre_release 1.2.3-beta', $output, $resultCode);
assert(array_shift($output) === '1.2.3-beta2', 'Output should be "1.2.3-beta2"');

exec('php semver increase:pre_release 1.2.3', $output, $resultCode);
assert(array_shift($output) === '1.2.3', 'Output should be "1.2.3"');

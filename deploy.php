<?php
namespace Deployer;
require 'recipe/common.php';

set('repository', 'git@github.com:Pet-etine/perhekalenteri.git');

// Hosts
host('neutroni.hayo.fi')
    ->user('p97755')
    ->set('deploy_path', '~/public_html/{{application}}');


desc('Deploy');
task('deploy', [
  'deploy:prepare',
  'deploy:release',
  'deploy:update_code',
  'deploy:shared',
  'deploy:vendors',
  'deploy:writable',
  'deploy:symlink',
  'deploy:unlock',
  'cleanup',
]);

<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'https://github.com/ElBiniou/phi-bo.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
set('shared_files', []);
set('shared_dirs', []);

// Writable dirs by web server 
set('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('127.0.0.1')
    ->user('Julien')
    ->identityFile('/home/Julien/.ssh/id_rsa')
    ->forwardAgent(true)
    //->multiplexing(true)
    //->set('deploy_path', '/cygdrive/c/__Work/shared/www/{{application}}');
    ->set('deploy_path', '/cygdrive/c/__Work/shared/www/deploy');
    

// Tasks

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

task('test', function () {
  writeln('Hello world');
});
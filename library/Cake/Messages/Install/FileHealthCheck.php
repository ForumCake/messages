<?php
namespace Cake\Messages;

class Install_FileHealthCheck extends \Cake\Install_FileHealthCheckBase
{
    
    public function getFileHashes()
    {
        return array(
        	'library/Cake/Messages/addon-Cake_Messages.xml' => 'a304b31ccfba2214403ee639a2d2cd22',
        	'library/Cake/Messages/Install/Controller.php' => '3f233ef15ed6a47db9e800407abf755b',
        	'library/Cake/Messages/Install/Data.php' => '00d0d9721bdc210b4ed0cff4bb414cb7',
        	'js/cake/messages/index.html' => 'd41d8cd98f00b204e9800998ecf8427e',
        	'styles/default/cake/messages/index.html' => 'd41d8cd98f00b204e9800998ecf8427e',
        );
    }
}
<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoload9303a908666dc230966c4209553dec89($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'genericuser' => '/GenericUser.class.php',
            'genericuserfactory' => '/GenericUserFactory.class.php',
            'ihaveansshkey' => '/IHaveAnSSHKey.php',
            'pfuser' => '/User.class.php',
            'sessionnotcreatedexception' => '/SessionNotCreatedException.class.php',
            'user_invalidpasswordexception' => '/InvalidPasswordException.class.php',
            'user_invalidpasswordwithuserexception' => '/InvalidPasswordWithUserException.class.php',
            'user_logincontroller' => '/LoginController.class.php',
            'user_loginexception' => '/LoginException.class.php',
            'user_loginmanager' => '/LoginManager.class.php',
            'user_loginpresenter' => '/LoginPresenter.class.php',
            'user_passwordexpiredexception' => '/PasswordExpiredException.class.php',
            'user_soapserver' => '/User_SOAPServer.class.php',
            'user_sshkeydumper' => '/User_SSHKeyDumper.class.php',
            'user_sshkeyvalidator' => '/User_SSHKeyValidator.class.php',
            'user_statusdeletedexception' => '/StatusDeletedException.class.php',
            'user_statusinvalidexception' => '/StatusInvalidException.class.php',
            'user_statuspendingexception' => '/StatusPendingException.class.php',
            'user_statussuspendedexception' => '/StatusSuspendedException.class.php',
            'user_userstatusmanager' => '/UserStatusManager.class.php',
            'userhelper' => '/UserHelper.class.php',
            'userimport' => '/UserImport.class.php',
            'usermanager' => '/UserManager.class.php',
            'usernotactiveexception' => '/UserNotActiveException.class.php',
            'usernotauthorizedexception' => '/UserNotAuthorizedException.class.php',
            'usernotexistexception' => '/UserNotExistException.class.php',
            'users' => '/Users.class.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoload9303a908666dc230966c4209553dec89');
// @codeCoverageIgnoreEnd
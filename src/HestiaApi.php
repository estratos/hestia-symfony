<?php

namespace Estratos\HestiaApi;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class HestiaApi extends AbstractBundle
{

    private $admin = 'admin';
    private $username;
    private $password;
    private $hostname;
    private $port = '8083';



    public function __construct($admin = "admin", $password = "ownerpass")
    {
        $this->username = $admin;
        $this->password = $password;
    }

    public function listUser($username,  $format = 'json')
    {
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-list-user';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $format
        );

        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }

    public function listUsers($format = 'json')
    {
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-list-users';
     

        // Prepare POST query with json output
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,                 
            'arg1' => $format
        );

        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }

    public function addUser($username, $password, $email,  $format = 'json')
    {
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-add-user';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $password,
            'arg3' => $email,
            'arg4' => $format
        );

        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }




    public function suspendUser($username, $format = 'json')
    {


        //// bin/v-suspend-user
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-suspend-user';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $format
        );



        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }
    public function unsuspendUser($username, $format = 'json')
    {


        //// bin/v-suspend-user
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-unsuspend-user';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $format
        );



        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }

    ///v-list-user-packages

    public function listUserPackages($format = 'json')
    {


        //// bin/v-list-user-packages
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-list-user-packages';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $format
        );



        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }
    

    public function listDomain($username, $domain, $format = 'json')
    {
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-list-web-domain';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain,
            'arg3' => $format
        );

        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }

    public function listDomains($username, $format = 'json')
    {
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-list-web-domains';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $format
        );

        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }

    public function addDomain($domain)
    {

        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = $this->port;
        $hst_username = $this->admin;
        $hst_password = $this->password;
        $hst_returncode = 'yes';
        $hst_command = 'v-add-domain';

        // Domain details
        $username = $this->username;
        //$domain = 'demo.hestiacp.com';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain
        );


        $answer = $this->request($postvars);

        // Check result
        if ($answer === 0) {
            return "Domain has been successfuly created\n";
        } else {
            return "Query returned error code: " . $answer . "\n";
        }
    }

    public function suspendDomain($username,$domain, $format = 'json')
    {
        //// bin/v-suspend-web-domain
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-suspend-web-domain';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain,
            'arg3' => $format
        );
        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);
        return $data;
    }

    public function unsuspendDomain($username,$domain, $format = 'json')
    {
        //// bin/v-suspend-web-domain
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-unsuspend-web-domain';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain,
            'arg3' => $format
        );
        $answer = $this->request($postvars);
        // Parse JSON output
        $data = json_decode($answer, true);
        return $data;
    }


    ///// MAIL FUNCIONS
    public function listMailDomains($username, $format = 'json')
    {


        //// bin/v-list-mail-domains
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-list-mail-domains';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $format
        );



        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }

    public function listMailDomain($username, $domain, $format = 'json')
    {


        //// bin/v-list-mail-domain
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-list-mail-domain';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain,
            'arg3' => $format
        );



        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }

    public function listMailAccounts($domain, $format = 'json')
    {


        //// bin/v-list-mail-domains
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-list-mail-accounts';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $domain,
            'arg2' => $format
        );



        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }

    public function changeMailaccountPassword($username, $domain,  $account, $password,  $format = 'json')
    {
        //// bin/v-change-mail-account-password
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-change-mail-account-password';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain,
            'arg3' => $account,
            'arg4' => $password,
            'arg5' => $format
        );

        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }

    public function addMailaccount($username, $domain,  $account, $password,  $format = 'json')
    {
        //// bin/v-add-mail-account
        // Server credentials
        $hst_hostname = $this->hostname;
        $hst_port = '8083';
        $hst_returncode = 'no';
        $hst_username = 'admin';
        $hst_password = $this->password;
        $hst_command = 'v-add-mail-account';

        // Prepare POST query
        $postvars = array(
            'user' => $hst_username,
            'password' => $hst_password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain,
            'arg3' => $account,
            'arg4' => $password,
            'arg5' => $format
        );

        $answer = $this->request($postvars);

        // Parse JSON output
        $data = json_decode($answer, true);


        return $data;
    }







    ///// DNS RECORD

    public function addDnsRecord($username, $domain, $type, $value)
    {
        /// 
        $hst_command = 'v-add-dns-record';
        $hst_returncode = 'no';

        // Prepare POST query
        $postvars = array(
            'user' => $this->admin,
            'password' => $this->password,
            'returncode' => $hst_returncode,
            'cmd' => $hst_command,
            'arg1' => $username,
            'arg2' => $domain,
            'arg3' => $type,
            'arg4' => $value,

        );

        $answer = $this->request($postvars);

        return $answer;
    }

    public function request($postvars)
    {
        // Send POST query via cURL
        $postdata = http_build_query($postvars);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://' . $this->hostname . ':' . $this->port . '/api/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
        $answer = curl_exec($curl);

        return $answer;
    }

    /**
     * Set the value of hostname
     *
     * @return  self
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Set the value of port
     *
     * @return  self
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }
}
